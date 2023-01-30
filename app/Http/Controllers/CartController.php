<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class CartController extends Controller
{
    public function index(){
        $products_amount = 0;
        session_start();
        if(isset($_POST["clear"])){
            $_SESSION["cart"] = [];
            return view('cart', ['products' => [], 'total' => '', 'products_amount' => ""]);
        }

        $total = 0;
        if (isset($_SESSION["cart"])){
            $session_cart = $_SESSION["cart"];
            $cart_products = [];
            foreach ($session_cart as $product_id => $amount){
                $response = Http::get('https://fakestoreapi.com/products/' . $product_id);
                $cart_products[$product_id] = $response->json();
                $products_amount += $amount;
                $total += $cart_products[$product_id]["price"] * $amount;
            }
        } else {
            $_SESSION["cart"] = [];
            $cart_products = [];
        }

        $products_amount = $products_amount ? $products_amount . " Items" : "";

        return view('cart', ['products' => $cart_products, 'total' => "Total $" . $total, 'products_amount' => $products_amount]);
    }
}
