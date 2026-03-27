<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interface\OrderInterface;
use App\Models\Product;
use App\Http\Requests\OrderRequest;
class OrderController extends Controller
{
    protected $orderService;

    public function __construct(OrderInterface $orderService)
    {
        $this->orderService = $orderService;
    }

    public function store(OrderRequest $request)
    {
        $order = $this->orderService->takeOrder($request->validated());

        if (!$order) {
            return response()->json([
                'status' => 'failed',
                'message' => 'order failed'
            ], 500);
        }

        return response()->json([
            'status' => 'success',
            'data' => $order
        ], 200);


    }
}
