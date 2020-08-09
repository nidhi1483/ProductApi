<?php

use App\Model\Product;
use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Model\Category::class, function (Faker $faker) {
    return [
    	'product_id' => function(){
    		return Product::all()->random();	
    	},
        
    ];
});
