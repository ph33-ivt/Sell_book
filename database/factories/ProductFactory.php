<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use App\Category;

$factory->define(Product::class, function (Faker $faker) {
	$listCategoryIds=Category::pluck('id');
    return [
        'name'=>$faker->name,
        'quantity'=>rand(1,20),
        'price'=>rand(20000,50000),
        'status'=>rand(1,3),
        'description'=>Str::random(),
        'image'=>$faker->image,
        'category_id'=>$faker->randomElement($listCategoryIds)
    ];
});
