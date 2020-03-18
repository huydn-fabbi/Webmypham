<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoryTableSeeder::class);
        $this->call(BrandTableSeeder::class);
        $this->call(PromotionTableSeeder::class);
        $this->call(ProductTableSeeder::class);  
        $this->call(OperatingCompanyUserTableSeeder::class);  
        $this->call(ImagePathTableSeeder::class);    
    }
}
