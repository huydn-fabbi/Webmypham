<?php

use Illuminate\Database\Seeder;

class OperatingCompanyUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('operating_company_users')->insert([
            'name' => 'Nam Huy',
            'authority_type' => 1,
            'email' => 'namhuydo18@gmail.com',
            'password' => bcrypt('123456'),
            'remember_token' => '88888888',
        ]);
    }
}
