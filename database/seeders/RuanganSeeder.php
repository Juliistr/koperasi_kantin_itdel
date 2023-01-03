<?php

namespace Database\Seeders;

use App\Models\Ruangan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RuanganSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            [
                'nama_ruangan' => 'Kantin Lama Lantai 1'
                
            ],
            [
                'nama_ruangan' => 'Kantin Lama Lantai 2'
                
            ],
            [
                'nama_ruangan' => 'Kantin Baru 1 Lantai 1'
                
            ],
            [
                'nama_ruangan' => 'Kantin Baru 1 Lantai 2'
                
            ],
            [
                'nama_ruangan' => 'Kantin Baru Tengah'
                
            ],
            [
                'nama_ruangan' => 'Kantin Baru 2 Lantai 1'
                
            ],
            [ 
                'nama_ruangan' => 'Kantin Baru 2 Lantai 2'
                
            ],
            [
                'nama_ruangan' => 'Kantin Baru Belakang Lantai 2'
                
            ],
        );
        foreach($data AS $d){
            Ruangan::create([
                'nama_ruangan' => $d['nama_ruangan'],
            ]);
        }
    }
}
