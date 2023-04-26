<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@zaqat.com',
            'password' => Hash::make('123admin123')
        ]);

        DB::table('jumlah_zakat')->insert([
            'jumlah_beras' => 0,
            'jumlah_uang' => 0,
            'total_beras' => 0,
            'total_uang' => 0,
            'total_distribusi' => 0,

        ]);
    }
}
