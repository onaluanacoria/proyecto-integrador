<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  public $table = 'carts';
  public $guarded = [];

  public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function subtotal(){
      return $this->cantidad * $this->price;
    }
}
