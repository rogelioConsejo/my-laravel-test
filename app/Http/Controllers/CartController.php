<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class CartController extends Controller
{
    public function index(){
        session_start();
        if (isset($_SESSION["cart"])){
            $session_products = $_SESSION["cart"];
            $cart_products = [];
            foreach ($session_products as $product){
                $response = Http::get('https://fakestoreapi.com/products/' . $product);
                $cart_products[$response["id"]] = $response->json();
            }
        } else {
            $_SESSION["cart"] = [];
            $cart_products = [];
        }

        return view('cart', ['products' => $cart_products]);
    }
}
