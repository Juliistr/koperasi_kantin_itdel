<?php

namespace App\Http\Controllers;

use App\Models\ProdukKoperasi;
use Illuminate\Http\Request;

class ProdukKoperasiController extends Controller
{

    public function koperasi(){
        $produkkoperasi = ProdukKoperasi::all();
        return response()->json(["success" => 200, "data" => $produkkoperasi]);
    }

    public function show($id){
        $produkkoperasi = ProdukKoperasi::where(['id' => $id])->first();
        return response()->json($produkkoperasi);
    }
}
