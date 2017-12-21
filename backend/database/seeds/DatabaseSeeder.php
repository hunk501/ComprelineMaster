<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();

		// $this->call('UserTableSeeder');
		
		DB::table('users')->where('email', '=', 'compreline@yahoo.com')->delete();
		
		DB::table('users')->insert([
				'name' => 'Admin',
				'email' => 'compreline@yahoo.com',
				'password' => md5('Admin123')		
		]);
	}
	
	
	/*
		
		C:\xampp\htdocs\Compreline\backend>php artisan db:seed
	
	*/
}
