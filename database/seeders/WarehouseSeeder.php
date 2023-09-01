<?php

namespace Database\Seeders;

use App\Models\Warehouse;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Warehouse::create([
            'name' => 'A',
            'address' => 'Semarang',
        ]);
        Warehouse::create([
            'name' => 'B',
            'address' => 'Weleri',
        ]);
        Warehouse::create([
            'name' => 'C',
            'address' => 'Ungaran',
        ]);

    }
}
