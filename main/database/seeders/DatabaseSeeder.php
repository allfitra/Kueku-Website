<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Fozan',
            'email' => 'test@gmail.com',
            'contact' => '081314151617',
            'password' => Hash::make('password')
        ]);

        DB::table('product')->insert([
            'nama' => 'Kue Putu',
            'toko' => 'Toko Kue Putu',
            'deskripsi' => 'Ini adalah kue putu, paling enak.',
            'gambar' => '',
            'harga' => '15.000',
            'terjual' => 0
        ]);

        DB::table('product')->insert([
            'nama' => 'Kue Pancong',
            'toko' => 'Toko Kue Pancong',
            'deskripsi' => 'Ini adalah kue pancong, paling enak.',
            'gambar' => '',
            'harga' => '29.000',
            'terjual' => 0
        ]);
    }
}
