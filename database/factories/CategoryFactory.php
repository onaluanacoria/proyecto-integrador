<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
      $dir= storage_path('app\public\imgCategories');
    return [
      'name'=>$faker->word(3),
      "imgCategories"=>$faker->image($dir, 300, 300, 'cats', false)

    ];
});
