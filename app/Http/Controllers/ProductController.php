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
      $products = Product::all(); //Traemos todos los productos.
      return view('products', compact('products'));
    }

    public function show($id)
    {
      $product = Product::find($id); //Identificamos el producto que queremos mostrar.
      return view('product', compact('product')); //Pasamos el dato a la vista.
    }

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

                  return redirect('/products');
    }
    public function search(Request $req){
      $searchData = '%'.$req["name"].'%';
      $gifts = Product::where('name','like',$searchData)
       ->orderBy('name')
       ->get();

      return view('products',compact('gifts'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
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
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productdelete = Product::find($id);
        $productdelete->delete();

        return redirect('/products');
      }
    }
