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
                'name' => 'test2',
                'email' => 'test2@gmail.com',
                'contact' => '081314151618',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'test3',
                'email' => 'test3@gmail.com',
                'contact' => '081314151619',
                'password' => Hash::make('password')
            ]
        ];

        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }


        // Seller Seeder
        $sellers = [
            [
                'name' => 'Toko Kue A',
                'user_id' => '1',
                'provinsi' => 'Sumatra Barat',
                'kota_kabupaten' => 'Painan',
                'kecamatan' => '-',
                'alamat_lengkap' => '-',
                'contact' => '081314151617'
            ],
            [
                'name' => 'Toko Kue B',
                'user_id' => '2',
                'provinsi' => 'Sumatra Barat',
                'kota_kabupaten' => 'Painan',
                'kecamatan' => '-',
                'alamat_lengkap' => '-',
                'contact' => '081314151617'
            ],
            [
                'name' => 'Toko Kue C',
                'user_id' => '3',
                'provinsi' => 'Sumatra Barat',
                'kota_kabupaten' => 'Painan',
                'kecamatan' => '-',
                'alamat_lengkap' => '-',
                'contact' => '081314151617'
            ]
        ];
        foreach ($sellers as $seller) {
            DB::table('sellers')->insert($seller);
        }


        // Product Seeder
        $products = [
            [
                'nama' => 'Kue Putu',
                'seller_id' => 4,
                'toko' => 'Toko Kue A',
                'deskripsi' => 'Ini adalah kue putu, paling enak.',
                'gambar' => 'kue-putu.jpg',
                'harga' => 15000,
                'jumlah' => 5,
                'kategori' => 'kue basah'
            ],
            [
                'nama' => 'Kue Pancong',
                'seller_id' => 4,
                'toko' => 'Toko Kue A',
                'deskripsi' => 'Ini adalah kue pancong, paling enak.',
                'gambar' => 'kue-putu.jpg',
                'harga' => 29000,
                'jumlah' => 5,
                'kategori' => 'kue basah'
            ],
            [
                'nama' => 'Kue Bugis',
                'seller_id' => 4,
                'toko' => 'Toko Kue B',
                'deskripsi' => 'Ini adalah kue Bugis, paling enak.',
                'gambar' => 'kue-putu.jpg',
                'harga' => 20000,
                'jumlah' => 5,
                'kategori' => 'kue basah'
            ],
            [
                'nama' => 'Kue Bolu',
                'seller_id' => 4,
                'toko' => 'Toko Kue B',
                'deskripsi' => 'Ini adalah kue bolu, paling enak.',
                'gambar' => 'kue-putu.jpg',
                'harga' => 50000,
                'jumlah' => 5,
                'kategori' => 'kue basah'
            ],
            [
                'nama' => 'Kue Brownis',
                'seller_id' => 4,
                'toko' => 'Toko Kue C',
                'deskripsi' => 'Ini adalah kue brownis, paling enak.',
                'gambar' => 'kue-putu.jpg',
                'harga' => 85000,
                'jumlah' => 5,
                'kategori' => 'kue basah'
            ],
            [
                'nama' => 'Pudding',
                'seller_id' => 4,
                'toko' => 'Toko Kue C',
                'deskripsi' => 'Ini adalah pudding, paling enak.',
                'gambar' => 'kue-putu.jpg',
                'harga' => 10000,
                'jumlah' => 5,
                'kategori' => 'kue basah'
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert($product);
        }
    }
}
