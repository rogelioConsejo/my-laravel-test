<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductListController extends Controller
{
    public function index(){
        session_start();
        if(isset($_POST["product"])){
            $product = $_POST["product"];
            $cart_amount = $_SESSION["cart"][$product] ?? 0;
            $cart_amount++;
            $_SESSION["cart"][$product] = $cart_amount;
        }
        if (!isset($_SESSION["products"])){
            $response = Http::get('https://fakestoreapi.com/products');
            $products = json_decode($response->body());
            $_SESSION["products"] = $products;
        }
        return view('product-list', ['products' => $_SESSION["products"]]);
    }
}
