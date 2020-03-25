<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->text(8),
        'content' => $faker->text(30),
        'description' => $faker->text(15),
        'image' => '/uploads/blogs/3/1.png',
        'user_id' => 3,
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
