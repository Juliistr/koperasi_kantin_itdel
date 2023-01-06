<?php

namespace Database\Seeders;

use App\Models\ProdukKantin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukKantinSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            [
                'nama_produk' => 'Es Teh',
                'harga' => '5000',
                'gambar' => 'images/esteh.jpg',
                'jumlah' => '10',
                'deskripsi' => 'Es Teh pakai/tidak pakai gula'
            ],
            [
                'nama_produk' => 'Nasi Goreng Seafood',
                'harga' => '6000',
                'gambar' => 'images/nasigoreng.jpeg',
                'jumlah' => '10',
                'deskripsi' => 'Nasi goreng pedas sedang/pedas banget',
            ],
            [
                'nama_produk' => 'Kombinasi Menu sarapan Pagi ',
                'harga' => '100000',
                'gambar' => 'images/kantin/pagi1.jpg',
                'jumlah' => '30',
                'deskripsi' => 'Menu makan Korean style pada pagi hari',
            ],
            [
                'nama_produk' => 'Kombinasi Menu Makan siang ',
                'harga' => '98000',
                'gambar' => 'images/kantin/siang1.jpg',
                'jumlah' => '30',
                'deskripsi' => 'Menu makan Korean style pada Makan siang',
            ],
            [
                'nama_produk' => 'Kombinasi Menu Makan Malam ',
                'harga' => '90000',
                'gambar' => 'images/kantin/Malam1.jpg',
                'jumlah' => '30',
                'deskripsi' => 'Menu makan Korean style pada Makan Malam',
            ],
            [
                'nama_produk' => 'Kombinasi Menu sarapan Pagi ',
                'harga' => '100000',
                'gambar' => 'images/kantin/pagi2.jpg',
                'jumlah' => '30',
                'deskripsi' => 'Menu makan Korean style pada pagi hari',
            ],
            [
                'nama_produk' => 'Kombinasi Menu Makan siang ',
                'harga' => '98000',
                'gambar' => 'images/kantin/siang2.jpg',
                'jumlah' => '30',
                'deskripsi' => 'Menu makan Korean style pada Makan siang',
            ],
            [
                'nama_produk' => 'Kombinasi Menu Makan Malam ',
                'harga' => '90000',
                'gambar' => 'images/kantin/Malam2.jpg',
                'jumlah' => '30',
                'deskripsi' => 'Menu makan Korean style pada Makan Malam',
            ],
            [
                'nama_produk' => 'Kombinasi Menu sarapan Pagi ',
                'harga' => '100000',
                'gambar' => 'images/kantin/pagi3.jpg',
                'jumlah' => '30',
                'deskripsi' => 'Menu makan Korean style pada pagi hari',
            ],
            [
                'nama_produk' => 'Kombinasi Menu Makan siang ',
                'harga' => '98000',
                'gambar' => 'images/kantin/siang3.jpg',
                'jumlah' => '30',
                'deskripsi' => 'Menu makan Korean style pada Makan siang',
            ],
            [
                'nama_produk' => 'Kombinasi Menu Makan Malam ',
                'harga' => '90000',
                'gambar' => 'images/kantin/Malam3.jpg',
                'jumlah' => '30',
                'deskripsi' => 'Menu makan Korean style pada Makan Malam',
            ],
            [
                'nama_produk' => 'Kombinasi Menu Makan Malam ',
                'harga' => '90000',
                'gambar' => 'images/kantin/Malam4.jpg',
                'jumlah' => '30',
                'deskripsi' => 'Menu makan Korean style pada Makan Malam',
            ],
    
        );
        foreach($data AS $d){
            ProdukKantin::create([
                'nama_produk' => $d['nama_produk'],
                'harga' => $d['harga'],
                'gambar' => $d['gambar'],
                'jumlah' => $d['jumlah'],
                'deskripsi' => $d['deskripsi']
            ]);
        }
    }
}
