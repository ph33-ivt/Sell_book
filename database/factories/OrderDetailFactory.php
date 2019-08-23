<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrderDetail;
use Faker\Generator as Faker;
use App\Order;
use App\Product;
$factory->define(OrderDetail::class, function (Faker $faker) {
	$listOrderIds=Order::pluck('id');
	$listProductIds=Product::pluck('id');
    return [
        'quantity'=>rand(1,50),
        'price'=>rand(20000,500000),
        'order_id'=>$faker->randomElement($listOrderIds),
        'product_id'=>$faker->randomElement($listProductIds),
    ];
});
