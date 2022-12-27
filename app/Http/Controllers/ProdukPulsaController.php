<?php

namespace App\Http\Controllers;

use App\Models\ProdukPulsa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukPulsaController extends Controller
{
    public function pulsa(){
        $produkpulsa = ProdukPulsa::all();
        return response()->json($produkpulsa);
    }

    public function store($id){
        $produkpulsa = ProdukPulsa::where(['id' => $id])->first();
        return response()->json($produkpulsa);
    }
}
