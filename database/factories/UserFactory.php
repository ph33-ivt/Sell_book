<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Role;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
	$listRoleIds=Role::pluck('id');
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('000000000'), 
        'remember_token' => Str::random(10),
        'age'=> rand(18,99),
        'address'=>$faker->address,
        'tel'=>$faker->phoneNumber,
        'role_id'=>$faker->randomElement($listRoleIds),
    ];
});
