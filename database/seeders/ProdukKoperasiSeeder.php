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
                'nama_produk' => 'Cimory Fresh Milk',
                'harga' => '7000',
                'gambar' => 'images/koperasi/CimoryFreshMilk.jpeg',
                'jumlah' => '15',
                'deskripsi' => 'Varian susu yang banyak dengan susu yang nikmat'
            ],
            [
                'nama_produk' => 'Cimory Squeeze',
                'harga' => '9000',
                'gambar' => 'images/koperasi/CimorySqueeze.jpeg',
                'jumlah' => '3',
                'deskripsi' => 'penyajian yogurt yang praktis dan rasa yang enak',
            ],
            [
                'nama_produk' => 'Doritos',
                'harga' => '9000',
                'gambar' => 'images/koperasi/Doritos.jpeg',
                'jumlah' => '15',
                'deskripsi' => 'makanan yang enak dimakan bersama'
            ],
            [
                'nama_produk' => 'Gery Salut',
                'harga' => '12000',
                'gambar' => 'images/koperasi/GerySalut.jpeg',
                'jumlah' => '3',
                'deskripsi' => 'perpaduan malkis yang lembut dan keju yang nikmat',
            ],
            [
                'nama_produk' => 'Good Time',
                'harga' => '3000',
                'gambar' => 'images/koperasi/GoodTime.jpeg',
                'jumlah' => '5',
                'deskripsi' => 'chocochip yang ada diatasnya membuat rasa lebih nikmat'
            ],
            [
                'nama_produk' => 'Pillow',
                'harga' => '6000',
                'gambar' => 'images/koperasi/pillous.jpeg',
                'jumlah' => '9',
                'deskripsi' => 'balutan coklat didalamnya membuat sensasi makan lebih nikmat',
            ],
            [
                'nama_produk' => 'Pocky',
                'harga' => '7000',
                'gambar' => 'images/koperasi/Pocky.jpeg',
                'jumlah' => '7',
                'deskripsi' => 'coklat diujungngnya membuat ketagihan'
            ],
            [
                'nama_produk' => 'Siip',
                'harga' => '4000',
                'gambar' => 'images/koperasi/Siip.jpeg',
                'jumlah' => '9',
                'deskripsi' => 'dimana lagi ada keju yang saat terasa sekali gigit',
            ],
            [
                'nama_produk' => 'Super Star',
                'harga' => '2000',
                'gambar' => 'images/koperasi/SuperStar.jpeg',
                'jumlah' => '10',
                'deskripsi' => 'perpaduan coklat yang enak disetiap lapis'
            ],
            [
                'nama_produk' => 'Yupi',
                'harga' => '5000',
                'gambar' => 'images/koperasi/Yupi.jpeg',
                'jumlah' => '5',
                'deskripsi' => 'sekali gigit merasakan sensasi kenyal yang nikmat',
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
