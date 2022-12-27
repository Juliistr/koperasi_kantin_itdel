<?php

namespace App\Http\Controllers;

use App\Models\ProdukKoperasi;
use Illuminate\Http\Request;

class ProdukKoperasiController extends Controller
{

    public function koperasi(){
        $produkkoperasi = ProdukKoperasi::all();
        return response()->json($produkkoperasi);
    }

    public function show($id){
        $produkkoperasi = ProdukKoperasi::where(['id' => $id])->first();
        return response()->json($produkkoperasi);
    }
}
