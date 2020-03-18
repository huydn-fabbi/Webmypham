<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        'category_name' => $faker->text(10),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
