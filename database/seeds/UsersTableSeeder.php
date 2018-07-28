<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        DB::table('users')->insert([
        	[
        		'name' => "Jhon Doe",
        		'email' => "jhondoe@test.com",
        		'password' => bcrypt('admin123')
        	],

        	[
        		'name' => "Brij Yadav",
        		'email' => "brij123@test.com",
        		'password' => bcrypt('admin123')
        	],

        	[
        		'name' => "Parth Shah",
        		'email' => "parth123@test.com",
        		'password' => bcrypt('admin123')
        	],
        ]);
    }
}
