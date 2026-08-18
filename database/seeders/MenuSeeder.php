<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $menus = [
            [
                'nama' => 'Rendang Daging Sapi',
                'kategori' => 'Makanan Utama',
                'deskripsi' => 'Daging sapi olahan rempah khas Minang yang dimasak berjam-jam hingga empuk.',
                'harga' => 45000,
                'gambar' => 'rendang.jpg',
                'is_favorit' => true,
            ],
            [
                'nama' => 'Sate Ayam Madura',
                'kategori' => 'Makanan Utama',
                'deskripsi' => 'Daging ayam pilihan dibakar dengan bumbu kacang khas Madura yang gurih.',
                'harga' => 35000,
                'gambar' => 'sate.jpg',
                'is_favorit' => true,
            ],
            [
                'nama' => 'Soto Ayam Lamongan',
                'kategori' => 'Makanan Utama',
                'deskripsi' => 'Soto ayam kuah kuning segar disajikan dengan koya gurih melimpah.',
                'harga' => 30000,
                'gambar' => 'soto.jfif',
                'is_favorit' => true,
            ],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}