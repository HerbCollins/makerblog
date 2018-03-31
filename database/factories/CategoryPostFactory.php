<?php

use Faker\Generator as Faker;

$factory->define(\App\CategoryPost::class, function (Faker $faker) {
    return [
        'category_id' => mt_rand(1,10),
        'post_id' => mt_rand(1,20),
    ];
});
