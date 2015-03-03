<?php namespace App\User\Database;

use App\Core\Database\Contracts\Installer as InstallerInterface;
use Illuminate\Database\Schema\Blueprint;
use Schema;

class Installer implements InstallerInterface {

	public function up()
	{
		if (Schema::hasTable('users')) return false;

		$this->installUsersTable();

		return true;
	}

	public function down()
	{
		Schema::dropIfExists('users');
	}

	protected function installUsersTable()
	{
		Schema::create('users', function (Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('email')->index();
			$table->string('password');
			$table->string('remember_token')->nullable();
			$table->timestamps();
		});
	}

}