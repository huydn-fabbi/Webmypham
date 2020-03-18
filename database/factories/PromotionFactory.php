<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Promotion::class, function (Faker $faker) {
    return [
        'discount' => ($faker->randomDigit) * 10,
        'start_date' => $faker->date(),
        'end_date' => $faker->date(),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
