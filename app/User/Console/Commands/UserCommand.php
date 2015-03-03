<?php namespace App\User\Console\Commands;

use App\Core\Console\Commands\InstallCommand;
use App\User\Database\Installer;
use App\User\Database\Seeder;

class UserCommand extends InstallCommand {

	/**
	 * @var string
	 */
	protected $name = 'larfang:user';

	/**
	 * @var string
	 */
	protected $description = 'larfang. User domain command';

	protected $domainName = 'User';


	public function __construct(Installer $installer, Seeder $seeder)
	{

		$this->installer = $installer;
		$this->seeder = $seeder;

		parent::__construct();
	}

}