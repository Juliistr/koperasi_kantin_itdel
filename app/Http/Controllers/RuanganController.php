<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function ruangan(){
        $ruangan = Ruangan::all();
        return response()->json($ruangan);
    }

    public function store($id){
        $ruangan = Ruangan::where(['id' => $id])->first();
        return response()->json($ruangan);
    }
}
