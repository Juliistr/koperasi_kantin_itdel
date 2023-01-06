<?php

namespace App\Http\Controllers;

use App\Models\ProdukPulsa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukPulsaController extends Controller
{
    public function pulsa(){
        $produkpulsa = ProdukPulsa::all();
        return response()->json(["success" => 200, "data" => $produkpulsa]);
    }

    public function show($id){
        $produkpulsa = ProdukPulsa::where(['id' => $id])->first();
        return response()->json(["success" => 200, "data" => $produkpulsa]);
    }
}
