<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Brand::class, function (Faker $faker) {
    return [
        'brand_name' => $faker->text(10),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
