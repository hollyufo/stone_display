<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            "categories" => Category::orderBy("id","DESC")->get()
        ];
        return view("back.categories.all",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = [
            "categories" => Category::orderBy("id","DESC")->get()
        ];
        return view("back.categories.add",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "name" => "required",
        ]);

        try {
            Category::create([
                "name" => $request->input("name")
            ]);

            return redirect()->route("admin.categories.add");
        } catch (Exception $th) {
            return redirect()->back()->withErrors($th->getMessage)->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        $data = [
            "category" => $category
        ];
        return view("back.categories.show",$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $data = [
            "category" => $category
        ];
        return view("back.categories.edit",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $request->validate([
            "name" => "required",
        ]);

        try {
            $category->update([
                "name" => $request->input("name")
            ]);

            return redirect()->route("admin.categories.add");
        } catch (Exception $th) {
            return redirect()->back()->withErrors($th->getMessage)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route("admin.categories.add");
    }
}
