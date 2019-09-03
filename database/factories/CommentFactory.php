<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;
use App\User;
use App\Product;
$factory->define(Comment::class, function (Faker $faker) {
	$listProductIds=Product::pluck('id');
	$listUserIds=User::pluck('id');
    return [
        'content'=>Str::random(),
        'user_id'=>$faker->randomElement($listUserIds),
        'product_id'=>$faker->randomElement($listProductIds)
    ];
});
