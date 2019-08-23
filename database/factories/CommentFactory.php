<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;
use App\User;
use App\Product;
$factory->define(Comment::class, function (Faker $faker) {
		$listUserIds=User::pluck('id');
		$listProductIds=Product::pluck('id');
    return [
        'user_id'=>$faker->randomElement($listUserIds),
        'product_id'=>$faker->randomElement($listProductIds),
        'content'=>$faker->content,
    ];
});
