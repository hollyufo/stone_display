<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
    // index
    public function index()
    {
        $data = [
            "products" => Product::orderBy("id","DESC")->paginate(2)
        ];
        return view("front.products",$data);
    }
    // find
    public function find(Product $product,$name)
    {
        $data = [
            "product" => $product,
            "related" => Product::where('id_category',$product->id_category)->where("id","!=",$product->id)->get()
        ];
        return view("front.product",$data);
    }
}
