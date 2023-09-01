<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            'type_id' => 3,
            'supplier_id' => 1,
            'name' => 'Lemari Kayu',
            'purchase_price' => '500000',
            'selling_price' => '700000',
        ]);

        Item::create([
            'type_id' => 2,
            'supplier_id' => 2,
            'name' => 'Kursi Lipat',
            'purchase_price' => '100000',
            'selling_price' => '170000',
        ]);


    }
}
