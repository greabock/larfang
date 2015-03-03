<?php namespace App\Core\Console\Commands;

use App\Core\Services\InstallerCollection;
use App\Core\Services\InstallManager;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

class CoreCommand extends Command {

	protected $name = 'larfang:core';

	protected $domainName = 'Core';

	protected $description = 'Larfang core db command';

	protected $installers;

	function __construct(InstallerCollection $installers)
	{
		$this->installers = $installers;

		parent:: __construct();
	}


	public function fire()
	{
		$key = $this->argument('key');

		switch ($key)
		{
			case 'up':
				$this->up();
				break;

			case 'down':
				$this->down();
				break;

			case 'refresh':
				$this->down();
				$this->up();
				break;
			default:
				$this->wrong();
				break;
		}
	}

	/**
	 * Call installer up
	 *
	 * @return void
	 */
	protected function up()
	{
		$arguments = ['key' => 'up'];

		if ($this->option('seed')) $arguments['--seed'] = true;

		foreach ($this->installers as $installer)
		{
			$this->call($installer, $arguments);
		}
	}

	/**
	 * Call installer down
	 *
	 * @return void
	 */
	protected function down()
	{
		$arguments = ['key' => 'down'];

		foreach ($this->installers as $installer)
		{
			$this->call($installer, $arguments);
		}
	}

	protected function wrong()
	{
		$this->info('Wrong argument. Argument must be "up", "down" or "refresh"');
	}

	public function getOptions()
	{
		return [
			['seed', 's', InputOption::VALUE_NONE, $this->domainName . 'Seeder "seed" flag',],
		];
	}

	public function getArguments()
	{
		return [
			['key', InputOption::VALUE_NONE, $this->domainName . 'Installer command: up | down | refresh',],
		];
	}

}