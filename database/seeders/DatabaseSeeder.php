<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Petugas;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Petugas::create([
            'nama_petugas' => 'Adminstrator',
            'username' => 'admin',
            'password' => Hash::make('password'),
            'telp' => '08998671253',
            'level' => 'admin',
         ]);
    }
}
