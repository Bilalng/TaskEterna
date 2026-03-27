<?php

namespace App\Service;
use App\Interface\OrderInterface;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\Licens;
use App\Jobs\SendLicensEmailJobs;
class OrderService implements OrderInterface
{
    public function takeOrder($data)
    {
        DB::transaction(function () use ($data) {
            $product = Product::lockForUpdate()->findOrFail($data['product_id']);

            if ($product->avaliable_stock < 1) {
                throw new \Exception("Stok yok");
            }

            $license = Licens::where('product_id', $data['product_id'])
                ->whereNull('user_id')
                ->lockForUpdate()
                ->first();

            if ($license) {
                throw new \Exception("Lisans yok yok");
            }

            $license->update([
                'user_id' => $data['user_id']
            ]);

            $product->decrement('avaliable_stock');

            SendLicensEmailJobs::dispatch($license);
        });
    }
}