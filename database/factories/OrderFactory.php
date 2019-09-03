<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;
use App\User;
$factory->define(Order::class, function (Faker $faker) {
	$listUserIds=User::pluck('id');
    return [
        'name'=>$faker->name,
        'address'=>$faker->address,
        'tel'=>$faker->phoneNumber,
        'user_id'=>$faker->randomElement($listUserIds)
    ];
});
