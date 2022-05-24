<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        
        return view('product', compact('products'));
    }

    public function detail($id)
    {
        $product = Product::find($id);

        return view('detail', compact('product'));
    }

    public function search(Request $request)
    {
        $searchProduct = $request->input('searchProduct');
        
        $products = Product::where('name', 'like', '%'.$searchProduct.'%')
                        ->get();
        
        return view('search', compact('products'));
    }
}