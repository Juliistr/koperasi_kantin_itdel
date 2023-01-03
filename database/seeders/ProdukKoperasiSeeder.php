<?php

namespace Database\Seeders;

use App\Models\ProdukKoperasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukKoperasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'nama_produk' => 'pepsodent',
                'harga' => '5000',
                'gambar' => 'images/pepsodent.jpg',
                'jumlah' => '10',
                'deskripsi' => 'Pepsodent Barang Bagus'
            ],
            [
                'nama_produk' => 'head and shoulders',
                'harga' => '6000',
                'gambar' => 'images/head_and_shoulders.jpeg',
                'jumlah' => '10',
                'deskripsi' => 'Sampo untuk cowo',
            ],
        );
        foreach($data AS $d){
            ProdukKoperasi::create([
                'nama_produk' => $d['nama_produk'],
                'harga' => $d['harga'],
                'gambar' => $d['gambar'],
                'jumlah' => $d['jumlah'],
                'deskripsi' => $d['deskripsi']
            ]);
        }
    }
}
