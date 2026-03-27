<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Licens;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Str;

class testSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);
         User::create([
            'name' => 'Bilal',
            'email' => 'bilalgoksen714@gmail.com',
            'password' => Hash::make('password'),
        ]);

        Product::create([
            'title' => 'Windows',
            'description' => 'Windows Etkinleştirme Anahatarı',
            'avaliable_stock' => 10,
        ]);
        Product::create([
            'title' => 'Microsoft 365',
            'description' => 'Microsoft Etkinleştirme Anahatarı',
            'avaliable_stock' => 10,
        ]);

        Licens::create([
            'key' => Str::random(),
            'product_id' => 1,
        ]);
         Licens::create([
            'key' => Str::random(),
            'product_id' => 1,
        ]);
    }
}
