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




		// Insurance Company
		DB::table('tbl_insurance_company')->truncate();
		DB::table('tbl_insurance_company')->insert(
			[
				'label' => 'FPG',
				'value' => 'fpg'
			]
		);
		DB::table('tbl_insurance_company')->insert(
			[
				'label' => 'Peoples',
				'value' => 'peoples'
			]
		);
		DB::table('tbl_insurance_company')->insert(			
			[
				'label' => 'Standard',
				'value' => 'standard'
			]
		);
		DB::table('tbl_insurance_company')->insert(			
			[
				'label' => 'Compreline',
				'value' => 'compreline'
			]
		);
	}
	
	
	/*
		
		C:\xampp\htdocs\Compreline\backend>php artisan db:seed
	
	*/
}
