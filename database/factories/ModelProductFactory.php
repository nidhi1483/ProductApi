<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'sku' => $faker->paragraph,
        'price' => $faker->numberBetween(100,1000),
        'created' => $faker->dateTime(),
         'updated' => $faker->dateTime(),
    ];
});
