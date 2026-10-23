<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@perlahan.test'],
            [
                'name' => 'Admin PERLAHAN',
                'password' => Hash::make('password123'),
                'role' => 'admin',
                'no_hp' => '081234567890',
            ]
        );

        User::updateOrCreate(
            ['email' => 'masyarakat@perlahan.test'],
            [
                'name' => 'Masyarakat PERLAHAN',
                'password' => Hash::make('password123'),
                'role' => 'masyarakat',
                'no_hp' => '081234567891',
            ]
        );

        User::updateOrCreate(
            ['email' => 'petugas@perlahan.test'],
            [
                'name' => 'Petugas PERLAHAN',
                'password' => Hash::make('password123'),
                'role' => 'petugas',
                'no_hp' => '081234567892',
            ]
        );
    }
}
