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
        DB::table('users')->insert([
	        array( 
	        	'username' => str_random(10),
	      		'email' => str_random(10).'@gmail.com',
	      		'password' => bcrypt('secret'),
	      		'first_name' => str_random(10),
		        'last_name' => str_random(10),
		        'phone_number' => str_random(10),
		        'user_profile' => 1,
		        'specialty_id' => 26
	  		),
	  		array( 
	  			'username' => str_random(10),
	      		'email' => str_random(10).'@gmail.com',
	      		'password' => bcrypt('secret'),
	      		'first_name' => str_random(10),
		        'last_name' => str_random(10),
		        'phone_number' => str_random(10),
		        'user_profile' => 2,
		        'specialty_id' => 0
	  		),
	  		array( 
	  			'username' => str_random(10),
	      		'email' => str_random(10).'@gmail.com',
	      		'password' => bcrypt('secret'),
	      		'first_name' => str_random(10),
		        'last_name' => str_random(10),
		        'phone_number' => str_random(10),
		        'user_profile' => 3,
		        'specialty_id' => 15
	  		),
	  		array( 
	  			'username' => str_random(10),
	      		'email' => str_random(10).'@gmail.com',
	      		'password' => bcrypt('secret'),
	      		'first_name' => str_random(10),
		        'last_name' => str_random(10),
		        'phone_number' => str_random(10),
		        'user_profile' => 3,
		        'specialty_id' => 31
	  		),
	  		array( 
	  			'username' => str_random(10),
	      		'email' => str_random(10).'@gmail.com',
	      		'password' => bcrypt('secret'),
	      		'first_name' => str_random(10),
		        'last_name' => str_random(10),
		        'phone_number' => str_random(10),
		        'user_profile' => 2,
		        'specialty_id' => 0
	  		),
	  		
	    ]);
    }
}
