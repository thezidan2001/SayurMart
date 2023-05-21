<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        $products = Product::all()->take(4);
        // dd($products);
        return view('landing_page', ['products' => $products]);
    }
}