<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Basket;


class ProductController extends Controller
{
    public function display(){
        $products = Product::all();
        return view('boutique', ['products' => $products]);
    } 

    public function addToCart(Request $request){
       //DB::table('basket')->insert (['id' => $id, 'Quantity' => 1, 'ProductID' => $ProductID]);
        //$cart = new Basket([]);
       // $userd = 

       // $cart = $request->input('id', 'Request');

        $bdd = Product::all();
       // return $cart;
        $user = auth()->id();
        $products = new Basket;
        $products->ProductID = $request->add; 
        $products->id = $user;
        $products->save();

        return view('boutique', ['products' => $bdd]);

    //    $product = Product::find($ProdID);
    //     $oldCart = Session::has('cart') ? Session::get('cart') : null;
    //     $cart = new Cart($oldCart);
    //     $cart->add($product, $product->ProductID);

    //     $request->session()->put('cart', $cart);
    //     return redirect()->route('product.shop');
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);

    }

    public function store(Request $request)
    {
        $image = $request->file('image');
        $data = $request->all();
        $image = $image->store('products','images');
        Product::create([
            'ProductName' => $data['product_name'],
            'ProductPrice' => $data['product_price'],
            'ProductDescription' => $data['product_description'],
            'ProductImage' => $image,
        ]);
        return redirect('/boutique');
    }


    // public function getCheckout()
    // {
    //     if (!Session::has('cart')) {
    //         return view('shop.shopping-cart');
    //     }
    //     $oldCart = Session::get('cart');
    //     $cart = new Cart($oldCart);
    //     $total = $cart->totalPrice;
    //     return view('shop.checkout', ['total' => $total]);
    // }


    // public function getReduceByOne($ProdID)
    // {
    //     $oldCart = Session::has('cart') ? Session::get('cart') : null;
    //     $cart = new Cart($oldCart);
    //     $cart->reduceByOne($ProdID);
    //     if (count($cart->items) > 0) {
    //         Session::put('cart', $cart);
    //     } else {
    //         Session::forget('cart');
    //         return redirect()->route('product.shop');
    //     }
    //     return redirect()->route('product.shoppingCart');
    // }

    // public function getRemoveItem($ProdID)
    // {
    //     $oldCart = Session::has('cart') ? Session::get('cart') : null;
    //     $cart = new Cart($oldCart);
    //     $cart->removeItem($ProdID);
    //     if (count($cart->items) > 0) {
    //         Session::put('cart', $cart);
    //     } else {
    //         Session::forget('cart');
    //         return redirect()->route('product.shop');
    //     }
    //     return redirect()->route('product.shoppingCart');
    // }
}
