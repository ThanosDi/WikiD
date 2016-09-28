<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
	

		foreach(range(1, 10) as $index)
		{
			$now = date('Y-m-d H:i:s');
			$users = array(  
						 'name' => 'name'.$index,
						 'lastname' => 'lastname'.$index,
						 'username' => 'username'.$index,
						 'password' => Hash::make('test'.$index),
						 'email' => 'email'.$index.'@gmail.com',
						 'created_at' => $now,
						 'updated_at' => $now
					);

             // make sure you do the insert
         DB::table('users')->insert($users);
		}
	}

}