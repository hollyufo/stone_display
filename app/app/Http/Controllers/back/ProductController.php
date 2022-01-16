<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            "products" => Product::all()
        ];
        return view("back.products",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            "categories" => Category::all()
        ];
        return view("back.products-add",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "description" => "required",
            "min_order" => "required",
            "dimentions" => "required",
            "category" => "required|exists:categories,id",
            "thumbnail" => "required"
        ]);

        try {
            $gallery = [];
            if($request->file('gallery') != null && !empty($request->file('gallery'))){
                foreach($request->file('gallery') as $key => $pic){
                        array_push($gallery,$pic->store("product/gallery","public"));
                }
            }
            Product::create([
                "name" => $request->input("name"),
                "description" => $request->input("description"),
                "min_order" => (int)$request->input("min_order"),
                "dimentions" => $request->input("dimentions"),
                "id_category" => $request->input("category"),
                "thumbnail" => $request->file("thumbnail")->store("product/thumbnails","public"),
                "gallery" => $gallery
            ]);

            return redirect()->route("admin.product.all");
        } catch (Exception $th) {
            return redirect()->back()->withErrors($th->getMessage)->withInput();
        }
        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route("admin.product.all");
    }
}
