<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
  $dir= storage_path('app\public\products');
    return [
      'name'=>$faker->word(3),
      'description'=>$faker->sentence(6),
      'price'=> $faker->randomFloat(2,300, 10000),
      "featured_img"=>$faker->image($dir, 300, 300, 'cats', false),
      'categoria_id'=>$faker->numberBetween($min = 1, $max = 6),
      'rating' => $faker ->randomFloat(1, 1, 10),
      'stock' => $faker ->randomDigit()
    ];
});
