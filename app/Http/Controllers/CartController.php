<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // ponemos un filtro si el usuario esta logueado

      $userLog = Auth::user();
      if ($userLog == null) {
        return redirect();
      } else {
      $carts = Cart::where('status',0)
      ->where('user_id', Auth::id())
      ->get(); //Identificamos todos los items de los carritos abiertos del usuario logueado.

      $total = 0;
      foreach ($carts as $item) {
        $total = $total +($item->quantity * $item->price);

      return view('cart', compact('carts', 'total'));

    }
  }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ponemos un filtro si el usuario esta logueado
        $userLog = Auth::user();
          if ($userLog == null) {
            return redirect("/login");
          } else {

        $product = Product::find($request->id);

        $cart = new Cart; //Recordar que cada Cart es un item dentro del carrito.
        $cart->name = $product->name;
        $cart->price = $product->price;
        $cart->quantity = $request->quantity;
        $cart->user_id = Auth::id();

        $cart->save();
        return redirect('/cart');
      }
    }
        /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */

      public function destroy($id)
      {
          $item = Cart::where('id',$id)
          ->where('user_id',Auth::id())
          ->where('status',0)->get(); //La consulta nos devuelve un array de datos con 1 solo item.

          $item[0]->delete(); //El item está en la posición 0 del array. Lo eliminamos.

          //Otra forma de traer el item a borrar es usando first():
          // $item = Cart::where('id',$id)
          // ->where('user_id',Auth::user()->id)
          // ->where('status',0)->first();
          // $item->delete();

          return redirect('/cart');
      }

}
