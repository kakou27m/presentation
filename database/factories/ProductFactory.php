<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'categorie_id' => $faker->numberBetween(1,5),
        'name' => $faker->text(10),
        'price'=>$faker->numberBetween(1500,15000),
        'weight' => $faker->numberBetween(1,5).'g',
        'description' => $faker->text(400),
    ];
});
