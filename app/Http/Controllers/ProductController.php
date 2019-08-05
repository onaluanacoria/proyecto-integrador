<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
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
       $products = Product::paginate(9);
       return view('gifts', compact('products'));
     }

    public function giftindex()
    {
      $products = Product::all();
      $categories = Category::all();
      return view('index', compact('products', 'categories'));
    }

    public function search(Request $req){
      $searchData = '%'. $req["name"] .'%';
      $products = Product::where('name','like', $searchData)->get();
      return view('/gifts',compact('products'));
    }

    public function show($id)
    {
      $product = Product::find($id);
      return view('gift', compact('product'));
    }

    public function category($id){
    $products = Product::where('categoria_id', $id)->paginate(5);
    $category = Category::find($id);
    return view('categories', compact('products', 'category'));
  }

    // public function filter($id)
    // {
    //   $category= Category::find($id);
    //   $products = Product::where('categoria_id', $id);
    //
    //   return view('categories', compact('category', 'products'));
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Category::all();
        return view('addgift', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

                  // //Primero valido los datos. //
                  $reglas = [
                    "name" => "required|string|min:2",
                    // "name"=>"required|string|min:2",
                    "description"=> "required|string",
                    "price" => "required|integer",
                    "featured_img" =>"image",
                    // "categoria_id" => "integer",
                  ];

                  $mensajes = [
                    "string" => "El campo :attribute  debe ser de texto.",
                    // "name.string" => "El campo Nombre debe ser de texto.",
                    "required" => "El campo :attribute debe completarse",
                    "integer" => "El campo :attribute debe ser un numero entero.",
                    "min" => "El campo debe :attribute tener como minimo :value caracteres",
                    "max" => "El campo debe :attribute tener como maximo :value caracteres"
                  ];

                  $this->validate($req, $reglas, $mensajes);
                  //Crear un nuevo objeto movie.
                  $newGift = new Product();

                  $path = $req->file('featured_img')->store('/public/products');
                  $file = basename($path);
                  //dd($path, $file);

                //  Le voy a cargar los datos que vienen por post (request)
                  $newGift->name = $req["name"];
                  $newGift->description = $req["description"];
                  $newGift->price = $req["price"];
                  // $newGift->categoria_id = $req["categoria_id"];
                  $newGift->featured_img = $file;
                  $newGift->categoria_id = $req['categoria_id'];
                  // dd($req, $nuevaPelicula);
                //  Guardo el objeto en la base de datos.

                  $newGift->save();

                  return redirect('/gifts');
              }


    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
     public function update($id)
     {
       $product = Product::find($id);
       $categorias = Category::all();
       return view('editGift', compact('product', 'categorias'));
     }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $req)
    {

      $reglas = [
        "name" => "required|string|min:2",
        // "name"=>"required|string|min:2",
        "description"=> "required|string",
        "price" => "required|integer",
        "featured_img" =>"image",
        // "categoria_id" => "integer",
      ];

      $mensajes = [
        "string" => "El campo :attribute  debe ser de texto.",
        // "name.string" => "El campo Nombre debe ser de texto.",
        "required" => "El campo :attribute debe completarse",
        "integer" => "El campo :attribute debe ser un numero entero.",
        "min" => "El campo debe :attribute tener como minimo :value caracteres",
        "max" => "El campo debe :attribute tener como maximo :value caracteres"
      ];

      $this->validate($req, $reglas, $mensajes);

      $product = Product::find($id);
      $product->name = $req["name"];
      $product->description = $req["description"];
      $product->price = $req["price"];
      $product->categoria_id = $req['categoria_id'];
      $product->save();
      return view('/gifts', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $productDelete = Product::find($id);
        $productDelete->delete();

        return redirect('/gifts');
      }
    }
