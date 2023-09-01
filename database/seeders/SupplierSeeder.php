<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::create([
            'name' => 'Joko Sujoko',
            'address' => 'Kalibanteng',
            'phone_number' => '08279812938'
        ]);

        Supplier::create([
            'name' => 'Slamet Tingkir',
            'address' => 'Jogja',
            'phone_number' => '082728129382'
        ]);
        
        Supplier::create([
            'name' => 'Kirana Asail',
            'address' => 'Jakarta',
            'phone_number' => '082798129448'
        ]);

    }
}
