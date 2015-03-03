<?php namespace App\Core\Database\Contracts;

interface Installer {

	public function up();

	public function down();

}