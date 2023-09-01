<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserRole::create([
            'role' => 'Admin',
        ]);

        UserRole::create([
            'role' => 'Admin Gudang',
        ]);

        UserRole::create([
            'role' => 'Kasir',
        ]);
    }
}
