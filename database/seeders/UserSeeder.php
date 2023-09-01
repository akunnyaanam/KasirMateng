<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('password'),
            'id_role' => '1',
        ]);

        User::create([
            'name' => 'Admin Gudang',
            'username' => 'admingudang',
            'password' => Hash::make('password'),
            'id_role' => '2',
        ]);

        User::create([
            'name' => 'Kasir',
            'username' => 'kasir',
            'password' => Hash::make('password'),
            'id_role' => '3',
        ]);
    }
}
