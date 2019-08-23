<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use App\Category;
$factory->define(Product::class, function (Faker $faker) {
	$listCategoryIds=Category::pluck('id');
    return [
        'name'=>$faker->name,
        'status'=>$faker->status,
        'price'=>rand(20000,500000),
        'quantity'=>rand(1,20),
        'description'=>$faker->description,
        'image'=>$faker->image,
        'category_id'=>$faker->randomElement($listCategoryIds),
    ];
});
