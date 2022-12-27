<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\ProdukKantin;

class ProdukKantinController extends Controller
{
    public function kantin(){
        $produkkantin = ProdukKantin::all();
        return response()->json($produkkantin);
    }

    public function show($id){
        $produkkantin = ProdukKantin::where(['id' => $id])->first();
        return response()->json($produkkantin);
    }
}
