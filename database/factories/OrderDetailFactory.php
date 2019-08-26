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
        'quantity'=>$faker->quantity,
        'price'=>$faker->price,
        'order_id'=>randomElement($listOrderIds),
        'product_id'=>randomElement($listProductIds)
    ];
});
