<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index()
    {
        session_start();
        $product_id = $_GET["id"];
        if(isset($_POST["amount"])){
            $_SESSION["cart"][$product_id] = $_POST["amount"];
        }
        $response = Http::get('https://fakestoreapi.com/products/' . $product_id);
        $product = $response->json();
        $product_name = $product["title"];
        $product_image = $product["image"];
        $product_description = $product["description"];
        $product_price = $product["price"];
        if (isset($_SESSION["cart"]) && isset($_SESSION["cart"][$product_id])){
            $amount = $_SESSION["cart"][$product_id];
        } else {
            $amount = 0;
        }
        return view('product',
            [
                'name' => $product_name,
                'img' => $product_image,
                'description' => $product_description,
                'price' => $product_price,
                'amount' => $amount
            ]
        );
    }
}
