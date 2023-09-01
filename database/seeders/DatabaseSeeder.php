<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Whoops\Run;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // User
            UserRoleSeeder::class,
            UserSeeder::class,

            // Item
            TypeSeeder::class,
            SupplierSeeder::class,
            ItemSeeder::class,

            // Warehouse
            WarehouseSeeder::class,

            // Shop
            ShopSeeder::class,

        ]);
    }
}
