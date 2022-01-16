<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    // Home
    public function index()
    {
        
        $data = [
            "products" => Product::all()
        ];
        return view("front.home",$data);
    }
}