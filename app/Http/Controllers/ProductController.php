<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\SUpport\Facades\DB;
use Illuminate\Support\Facades\Request;
use App\Product;
use App\Kategori;
//use Auth;
//use Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view = Request::get('view', 'list1');

        if ($view != 'list' && $view != 'list1') {
            $view = 'list1';
        }

        return view('product/index', [
            'products'      => Product::latest()->paginate(4),
            'recommended'   => Product::take(8)->get(),
            'view'          => $view
        ]);
    }

    public function admin()
    {
        $products = DB::table('products')->get();
        return view('admin.produk.show', ['products' => $products]);
    }
    public function list1()
    {
        return Product::latest()->paginate(4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $kategori = Kategori::get();

        return view('product.create', ['product' => new Product, 'kategori' => $kategori]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('img')) {

            $file = $request->file('img');

            $fileName = time() . '-' . $file->getClientOriginalName();
            $file->move('uploads', $fileName);

            $data['image'] = $fileName;
        }

        $data['user_id'] = Auth::user()->id;
        $p = Product::create($data);


        return redirect('/store/' . $p->store_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product/show', [
            'product'       => $product,
            'related'       => Product::take(16)->get(),
            'menjual'       => Product::take(4)->get(),
            'recommended'   => Product::take(8)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product/edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->all();

        if ($request->hasFile('img')) {

            $file = $request->file('img');

            $fileName = time() . '-' . $file->getClientOriginalName();
            $file->move('uploads', $fileName);

            $data['image'] = $fileName;
        }

        $product->update($data);

        return redirect('product/' . $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = DB::table('products')->select('*')->where('id', '=', $id)->delete();

        return redirect('/admin/produk/show');
    }

    public function manage()
    {
        return view('product/manage', [
            'products' => Product::all()
        ]);
    }

    public function getList()
    {
        $r              = Request::all();

        $sortColumn     = $r['columns'][$r['order'][0]['column']]['data'];
        $sortOrder      = $r['order'][0]['dir'];
        $searchValue    = '%' . $r['search']['value'] . '%';

        $products = Product::all();

        $filtered = Product::where('name', 'LIKE', $searchValue)
            ->orWhere('description', 'LIKE', $searchValue)
            ->orWhere('price', 'LIKE', $searchValue)
            ->orderBy($sortColumn, $sortOrder);

        return [
            'draw'              => $r['draw'],
            'recordsTotal'      => count($filtered->get()),
            'recordsFiltered'   => count($filtered->get()),
            'data'              => $filtered->limit($r['length'])
                ->offset($r['start'])
                ->get()
        ];
    }
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $product = DB::table('products')
            ->where('name', 'like', '%' . $cari . '%')
            ->paginate();

        // mengirim data pegawai ke view index
        return view('/product/index', ['product' => $product]);
    }
    public function hapus($id)
    {
        $data = Auth::user()->store_id;

        $user = DB::table('products')->select('*')->where('id', '=', $id)->delete();

        return redirect('/store/' . $data);
    }
}
