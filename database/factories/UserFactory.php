<?php

use Faker\Generator as Faker;

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'member_type' => 3,
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$12$ZRcS1v.zACqk4PYTMPucTeXCEjdwhlZVqmVy.RRERvz.5zKd.Ftqi',
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
