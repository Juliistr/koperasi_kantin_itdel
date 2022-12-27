<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukPulsa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'harga',
        'gambar',
        'jumlah',
    ];

    protected $table = "produk_pulsa";
}
