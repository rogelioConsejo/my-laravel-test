<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        session_start();
        if (isset($_POST["username"]) && isset($_POST["password"])){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            $_SESSION["cart"] = [];
        }
        if(isset($_SESSION["username"]) && isset($_SESSION["password"])){
            return redirect('/products');
        } else{
            return view('login');
        }
    }

    public function logout(){
        session_start();
        unset($_SESSION["username"]);
        unset($_SESSION["password"]);
        return redirect('/login');
    }
}
