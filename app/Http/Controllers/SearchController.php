<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


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
    public function index(Request $request)
    {
        $search = $request->keyword;
        $products = Product::where('name', 'like', "%" . $search . "%")
            ->paginate();

        return view('product/search', ['products' => $products, 'keyword' => $search, 'recommended'   => Product::take(8)->get(),]);
    }
}
