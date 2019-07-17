<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public $guarded = [];

  public function category(){
    return $this->belongsTo('App\Category', 'categoria_id');
  }
  public function product(){
    return $this->belongsToMany('App\Product','categoria_id','name');
  }

}
