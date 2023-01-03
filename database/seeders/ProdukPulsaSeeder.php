<?php

namespace Database\Seeders;
use App\Models\ProdukPulsa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdukPulsaSeeder extends Seeder
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
                'nama_produk' => 'Pulsa 10k Telkomsel',
                'harga' => '10000',
                'gambar' => 'images/icon_pulsa.jpeg',
                'jumlah' => '10'
            ],
            [
                'nama_produk' => 'Pulsa 25k Telkomsel',
                'harga' => '25000',
                'gambar' => 'images/icon_pulsa.jpeg',
                'jumlah' => '10'
            ],
            [
                'nama_produk' => 'Pulsa 50 Telkomsel',
                'harga' => '50000',
                'gambar' => 'images/icon_pulsa.jpeg',
                'jumlah' => '10'
            ],
            [
                'nama_produk' => 'Pulsa 75k Telkomsel',
                'harga' => '75000',
                'gambar' => 'images/icon_pulsa.jpeg',
                'jumlah' => '10'
            ],
            [
                'nama_produk' => 'Pulsa 100k Telkomsel',
                'harga' => '100000',
                'gambar' => 'images/icon_pulsa.jpeg',
                'jumlah' => '10'
            ],
        );
        foreach($data AS $d){
            ProdukPulsa::create([
                'nama_produk' => $d['nama_produk'],
                'harga' => $d['harga'],
                'gambar' => $d['gambar'],
                'jumlah' => $d['jumlah']
            ]);
        }
    }
}
