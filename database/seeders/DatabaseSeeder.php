<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ProdukPulsaSeeder;
use Database\Seeders\ProdukKantinSeeder;
use Database\Seeders\ProdukKoperasiSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProdukKantinSeeder::class);
        $this->call(ProdukKoperasiSeeder::class);
        $this->call(ProdukPulsaSeeder::class);
        $this->call(RuanganSeeder::class);
        $this->call(UserSeeder::class);
    }
}
