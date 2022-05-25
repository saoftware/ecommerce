<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class ProductController extends Controller
{
    // Retourne la liste des produits
    public function index()
    {
        $products = Product::all();
        
        return view('product', compact('products'));
    }

    // Affiche le detail d'un produit
    public function detail($id)
    {
        $product = Product::find($id);

        return view('detail', compact('product'));
    }

    // Fonction de recherche d'un produit
    public function search(Request $request)
    {
        $searchProduct = $request->input('searchProduct');
        
        $products = Product::where('name', 'like', '%'.$searchProduct.'%')
                        ->get();
        
        return view('search', compact('products'));
    }

    // Fonction d'ajout d'un produit au panier
    public function addToCart(Request $request)
    {
        if($request->session()->has('user'))
        {
            $cart = new Cart();
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }

    // Fonction de calcul du nombre de produit dans le panier
    public static function cartItem()
    {
        $userId = Session::get('user')['id'];
        
        return Cart::where('user_id', $userId)->count();
    }

    // Fonction qui affiche le contenu du panier
    public function cartList()
    {
        if(Session::has('user'))
        {
            $userId = Session::get('user')['id'];
        
            $products = DB::table('carts')
                    ->join('products', 'products.id', '=', 'carts.product_id')
                    ->where('carts.user_id', $userId)
                    ->select('products.*', 'carts.id as cartId')
                    ->get();
        
            return view('cartlist', compact('products'));
        }
        else{
            return redirect('/login');
        }
        
    }
    

    // Fonction de suppression d'un produit dans le panier
    public function removeCart($id)
    {
        Cart::destroy($id);

        return redirect('/cartlist');
    }
    
}