<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use Faker\Factory;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        // use the factory to create a Faker\Generator instance
        $faker = Factory::create();

        $data = [
            [
                'kode_produk' => $faker->unique($reset = true)->word . $faker->randomDigit(),
                'nama_produk'    => 'Serum',
                'stok' => 50,
                'harga' => 70000,
                'deskripsi' => $faker->text(),
                'foto_produk' => 'serum.jpeg'
            ],
            [
                'kode_produk' => $faker->unique($reset = true)->word . $faker->randomDigit(),
                'nama_produk'    => 'Face Mist',
                'stok' => 50,
                'harga' => 50000,
                'deskripsi' => $faker->text(),
                'foto_produk' => 'face mist.jpeg'
            ],
            [
                'kode_produk' => $faker->unique($reset = true)->word . $faker->randomDigit(),
                'nama_produk'    => 'Exfloating Gel',
                'stok' => 50,
                'harga' => 55999999,
                'deskripsi' => $faker->text(),
                'foto_produk' => 'gel.jpeg'
            ],
            [
                'kode_produk' => $faker->unique($reset = true)->word . $faker->randomDigit(),
                'nama_produk'    => 'Laptop Apel',
                'stok' => 50,
                'harga' => 20999999,
                'deskripsi' => $faker->text(),
                'foto_produk' => 'laptop2.jpg'
            ],
            [
                'kode_produk' => $faker->unique($reset = true)->word . $faker->randomDigit(),
                'nama_produk'    => 'Sepatu Pink',
                'stok' => 50,
                'harga' => 250999,
                'deskripsi' => $faker->text(),
                'foto_produk' => 'sepatu1.jpg'
            ],
            [
                'kode_produk' => $faker->unique($reset = true)->word . $faker->randomDigit(),
                'nama_produk'    => 'Sepatu Sport',
                'stok' => 50,
                'harga' => 300999,
                'deskripsi' => $faker->text(),
                'foto_produk' => 'sepatu2.jpg'
            ],
            [
                'kode_produk' => $faker->unique($reset = true)->word . $faker->randomDigit(),
                'nama_produk'    => 'Mouse B',
                'stok' => 50,
                'harga' => 90000,
                'deskripsi' => $faker->text(),
                'foto_produk' => 'mouse.jpg'
            ],
            [
                'kode_produk' => $faker->unique($reset = true)->word . $faker->randomDigit(),
                'nama_produk'    => 'Keyboard Gamin',
                'stok' => 50,
                'harga' => 240000,
                'deskripsi' => $faker->text(),
                'foto_produk' => 'keyboard.jpg'
            ],
            [
                'kode_produk' => $faker->unique($reset = true)->word . $faker->randomDigit(),
                'nama_produk'    => 'Tas Big',
                'stok' => 50,
                'harga' => 490000,
                'deskripsi' => $faker->text(),
                'foto_produk' => 'tas1.jpg'
            ],
            [
                'kode_produk' => $faker->unique($reset = true)->word . $faker->randomDigit(),
                'nama_produk'    => 'Tas P',
                'stok' => 50,
                'harga' => 120000,
                'deskripsi' => $faker->text(),
                'foto_produk' => 'tas2.jpg'
            ],
            [
                'kode_produk' => $faker->unique($reset = true)->word . $faker->randomDigit(),
                'nama_produk'    => 'Hoodie Kuning',
                'stok' => 50,
                'harga' => 260000,
                'deskripsi' => $faker->text(),
                'foto_produk' => 'Hoodie.jpg'
            ]
        ];

        // // Simple Queries
        // $this->db->query('INSERT INTO produk (kode_produk, nama_produk, stok, harga, deskripsi, foto_produk) VALUES(:kode_produk:, :nama_produk:, :stok:,:harga:,:deskripsi:,:foto_produk:)', $data);

        // Using Query Builder
        $this->db->table('produk')->insertBatch($data);
    }
}