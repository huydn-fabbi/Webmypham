<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'product_name' => $faker->text(10),
        'category_id' => rand(1, 10),
        'brand_id' => rand(1, 10),
        'promotion_id' => rand(1, 10),
        'description' => $faker->text(50),
        'content' => $faker->text(191),
        'price' => rand(1, 100) * 1000,
        'product_type' => rand(1, 3),
        'product_amount' => rand(0, 50),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
