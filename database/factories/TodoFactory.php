<?php

use Faker\Generator as Faker;

$factory->define(App\Todo::class, function (Faker $faker) {
    return [
        //
        'todo' => $faker->sentence($nbWords = 6),
        'category_id' => $faker->numberBetween($min = 1, $max = 15),
        'completed' => 0,
    ];
    
});
