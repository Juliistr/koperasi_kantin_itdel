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
                'gambar' => 'esteh.jpg',
                'jumlah' => '10',
                'deskripsi' => 'Es Teh pakai/tidak pakai gula'
            ],
            [
                'nama_produk' => 'Nasi Goreng Seafood',
                'harga' => '6000',
                'gambar' => 'nasigoreng.jpeg',
                'jumlah' => '10',
                'deskripsi' => 'Nasi goreng pedas sedang/pedas banget',
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
