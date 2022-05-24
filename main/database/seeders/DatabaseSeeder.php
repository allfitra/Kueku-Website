<?php

namespace Database\Seeders;

use App\Models\ProductsModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
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
        //User Seeder
        $users = [
            [
                'name' => 'Fozan',
                'email' => 'test@gmail.com',
                'contact' => '081314151617',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'test',
                'email' => 'test2@gmail.com',
                'contact' => '081314151618',
                'password' => Hash::make('password')
            ]
        ];

        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }



        // Product Seeder
        $products = [
            [
                'nama' => 'Kue Putu',
                'toko' => 'Toko Kue Putu',
                'deskripsi' => 'Ini adalah kue putu, paling enak.',
                'gambar' => 'kue-putu.jpg',
                'harga' => 15000,
            ],
            [
                'nama' => 'Kue Pancong',
                'toko' => 'Toko Kue Pancong',
                'deskripsi' => 'Ini adalah kue pancong, paling enak.',
                'gambar' => 'logo-kueku.png',
                'harga' => 29000,
            ],
            [
                'nama' => 'Kue Bugis',
                'toko' => 'Toko Kue Bugis',
                'deskripsi' => 'Ini adalah kue Bugis, paling enak.',
                'gambar' => 'logo-kueku.png',
                'harga' => 20000,
            ],
            [
                'nama' => 'Kue Bolu',
                'toko' => 'Toko Kue Bolu',
                'deskripsi' => 'Ini adalah kue bolu, paling enak.',
                'gambar' => 'kue-putu.jpg',
                'harga' => 50000,
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert($product);
        }
    }
}
