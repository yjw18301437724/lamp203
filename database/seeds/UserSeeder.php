<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0;  $i < 80; $i++){

	        DB::table('user')->insert([
	            'username' => str_random(10),
	            'password' => Hash::make('12345678'),
	            'phone' => '13911231231',
	            'status' => '1',
	            'profile' => '/uploads/KiQQgcLrKT1530623372.jpg',
	            'email' => str_random(10).'@gmail.com'

	        ]);
	    }

    }
}
