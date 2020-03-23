<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        \DB::table('users')->insert([
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'name' => "admin",
            'member_type' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);

        \DB::table('users')->insert([
            'email' => 'editor@gmail.com',
            'password' => bcrypt('123456'),
            'name' => "editor",
            'member_type' => 2,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);

        \DB::table('users')->insert([
            'email' => 'member@gmail.com',
            'password' => bcrypt('123456'),
            'name' => "member",
            'member_type' => 3,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);

        factory(App\Models\User::class, 30)->create();
    }
}
