<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Kategori;
use App\Product;
use Illuminate\SUpport\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = DB::table('kategori')->get();
        return view('admin.kategori.show', ['kategori' => $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $kategori = new Kategori();
        $kategori->nama = $request->nama;

        $kategori->save();
        return redirect('/admin/kategori/show');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori, Product $product, $id)
    {

        $kategori = Kategori::with(['products'])->find($id);
        // dd($kategori->toArray());

        return view('kategori.product', ['kategori' => $kategori, 'product' => $product, 'recommended'   => Product::take(8)->get(),]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = DB::table('kategori')->select('*')->where('id', '=', $id)->delete();

        return redirect('/admin/kategori/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = DB::table('kategori')->select('*')->where('id', '=', $id)->delete();

        return redirect('/admin/kategori/show');
    }
    public function view(Kategori $kategori, Product $product, $id)
    {
        $kategori = Kategori::with(['kat'])->find($id);
        //dd($kategori->toArray());

        return view('kategori.product', ['kategori' => $kategori, 'product' => $product, 'recommended'   => Product::take(8)->get(),]);
    }
}
