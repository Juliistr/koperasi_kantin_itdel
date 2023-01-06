<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\ProdukKantin;

class ProdukKantinController extends Controller
{
    public function kantin(){
        $produkkantin = ProdukKantin::all();
        return response()->json(["success" => true, "data" =>  $produkkantin]);
    }

    public function produkkantinterbaru(){
        $produkkantin = ProdukKantin::all()->sortByDesc(["created_at"]);
        return response()->json(["success" => true, "data" =>  $produkkantin]);
    }

    public function show($id){
        $produkkantin = ProdukKantin::where(['id' => $id])->first();
        return response()->json(["success" => true, "data" =>$produkkantin]);
    }
}
