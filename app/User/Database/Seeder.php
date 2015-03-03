<?php namespace App\User\Database;

use App\Core\Database\Contracts\Seeder as BaseSeeder;
use App\User\Models\User;

class Seeder implements BaseSeeder {

	public function run()
	{
		User::create([
			'name'     => 'admin',
			'email'    => 'admin@admin.com',
			'password' => 'admin',
		]);
	}
}