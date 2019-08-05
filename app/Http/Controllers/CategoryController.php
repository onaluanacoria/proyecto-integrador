<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
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
       $categories = Category::all();
       // $product = Product::all();
       return view('categories', compact('categories'));
   }


      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function create()
    {
      $products= Product::all();
      return view('addcategory', compact('products'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

      $reglas = [
        "name" => "required",
        "imgCategories" =>"image",
      ];

      $mensajes = [
        "string" => "El campo :attribute  debe ser de texto.",
        // "name.string" => "El campo Nombre debe ser de texto.",
        "required" => "El campo :attribute debe completarse",
        "min" => "El campo debe :attribute tener como minimo :value caracteres",

      ];

      $this->validate($req, $reglas, $mensajes);
      $newCategory = new Category();

      $path = $req->file('imgCategories')->store('/public/imgCategories');
      $file = basename($path);


      $newCategory->name = $req["name"];
      $newCategory->imgCategories = $file;

      $newCategory->save();

      return redirect('/gift/categories');
    }


    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
         $categoryDelete = Category::find($id);
         $categoryDelete->delete();

         return redirect('gift/categories');
       }
}
