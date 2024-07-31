<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        $product = Product::all();
        return view('home',['products' => $product]);
    }
}
