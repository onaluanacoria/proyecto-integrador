<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public $table= "categories";
  public $guarded = [];

  public function products(){
  return $this->hasMany('App\Product', 'categoria_id');
}
}
