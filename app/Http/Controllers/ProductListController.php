<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductListController extends Controller
{
    public function index(){
        $response = Http::get('https://fakestoreapi.com/products');
        $products = json_decode($response->body());
        return view('product-list', ['products' => $products]);
    }
}
