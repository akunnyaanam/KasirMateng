<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shop::create([
            'name' => 'Jati Aji',
            'address' => 'Weleri',
        ]);

        Shop::create([
            'name' => 'Atos Tos',
            'address' => 'Batang',
        ]);

    }
}
