<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' =>$faker->sentence,
        'description' =>$faker->paragraph(6)
    ];
});
