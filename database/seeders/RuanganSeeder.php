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
                'nama_ruangan' => 'Gd5'
                
            ],
            [
                'nama_ruangan' => 'Gd6'
                
            ],
            [
                'nama_ruangan' => 'Gd7'
                
            ],
            [
                'nama_ruangan' => 'Gd8'
                
            ],
            [
                'nama_ruangan' => 'Gd9'
                
            ],
            
        );
        foreach($data AS $d){
            Ruangan::create([
                'nama_ruangan' => $d['nama_ruangan'],
            ]);
        }
    }
}
