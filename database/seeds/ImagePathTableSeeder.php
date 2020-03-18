<?php

use Illuminate\Database\Seeder;

class ImagePathTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 51; $i++) { 
            \DB::table('image_paths')->insert([
                'product_id' => $i,
                'image_type' => 1,
                'file_name' => 'image1 + ' . $i,
                'image_url' => '/uploads/products/1/MBUiwfeZLjD7nUkzKZkHeZ1zEZ8o0gbYC7lkGO78.jpeg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]);
        }

        for ($i=1; $i < 51; $i++) { 
            \DB::table('image_paths')->insert([
                'product_id' => $i,
                'image_type' => 1,
                'file_name' => 'image2 + ' . $i,
                'image_url' => '/uploads/products/1/TAr6OzJonBosK3ngGpgqyRhUGgbMbtNUpnBawHvd.jpeg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]);
        }
    }
}
