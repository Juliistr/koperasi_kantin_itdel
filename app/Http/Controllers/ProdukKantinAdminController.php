<?php

namespace App\Http\Controllers;


use App\Models\ProdukKantin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProdukKantinAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = ProdukKantin::all();
        return view('pages.produkkantin.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.produkkantin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validator = Validator::Make($request->all(), [
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required',
            'jumlah' => 'required|numeric',

        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ]);
        }

        $item = new ProdukKantin();
        $item->nama_produk = $request->nama_produk;
        $item->harga = $request->harga;
        $item->deskripsi = $request->deskripsi;
        $item->jumlah = $request->jumlah;

        $gambar = $request->file('gambar');
        $new_name = rand() . '.' . $gambar->getClientOriginalExtension();
        $gambar->move(public_path('images/'), $new_name);

        // $request->merge([
        //     'image' => "images/" . $new_name,
        // ]);
        $item->gambar = "images/" . $new_name;
        $item->save();

        // ProdukKantin::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'ProdukKantin created successfully',
            'redirect' => route('produkkantin.index')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produkkantin  $product
     * @return \Illuminate\Http\Response
     */
    public function show(ProdukKantin $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProdukKantin  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(ProdukKantin $product)
    {
        return view('pages.produkkantin.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProdukKantin  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProdukKantin $product)
    {
        $validator = Validator::Make($request->all(), [

            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ]);
        }

        $item1 = new ProdukKantin();
        $item1->nama_produk = $request->nama_produk;
        $item1->harga = $request->harga;
        $item1->deskripsi = $request->deskripsi;
        $item1->jumlah = $request->jumlah;

        $gambar = $request->file('gambar');
        $new_name = rand() . '.' . $gambar->getClientOriginalExtension();
        $gambar->move(public_path('images'), $new_name);

        // $request->merge([
        //     'image' => "images/" . $new_name,
        // ]);
        $item1->gambar = "images/product" . $new_name;
        $item1->save();


        if ($request->hasFile('avatar')) {
            $image_path = public_path('images/products/' . $product->image);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $gambar = $request->file('avatar');
            $new_name = rand() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('images/products'), $new_name);

            $request->merge([
                'image' => $new_name,
            ]);
        }

        $product->update($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'ProdukKantin updated successfully',
            'redirect' => route('produkkantin.index')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProdukKantin  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProdukKantin $product)
    {
        $image_path = public_path('images/products/' . $product->image);
        if (file_exists($image_path)) {
            unlink($image_path);
        }

        $product->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'ProdukKantin deleted successfully',
        ]);
    }
}
