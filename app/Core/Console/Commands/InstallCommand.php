<?php namespace App\Core\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

/**
 * Class InstallCommand
 *
 * @package App\Core\Console\Commands
 */
abstract class InstallCommand extends Command {

	/**
	 * @var string
	 */
	protected $domainName;

	/**
	 * @var \App\Core\Database\Contracts\Installer
	 */
	protected $installer;

	/**
	 * @var \App\Core\Database\Contracts\Seeder
	 */
	protected $seeder;


	/**
	 * Fire console command
	 *
	 * @return void
	 */
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
		if($this->installer->up())
		{
			$this->info($this->domainName . ' domain installed');

			$this->seed();

			return;
		}

		$this->info($this->domainName . ' domain already exists');
	}

	/**
	 * Call installer down
	 *
	 * @return void
	 */
	protected function down()
	{
		$this->installer->down();

		$this->info($this->domainName . ' domain uninstalled');
	}

	/**
	 *  Run seeder
	 *
	 * @return void
	 */
	protected function seed()
	{
		if( $this->option('seed') != true || $this->seeder == null) return false;

		$this->seeder->run();

		$this->info($this->domainName . ' domain data seeded');
	}

	protected function wrong()
	{
		$this->info('Wrong argument. Argument must be "up" or "down"');
	}


	/**
	 * Get command options
	 *
	 * @return array
	 */
	public function getOptions()
	{
		return [
			['seed', 's', InputOption::VALUE_NONE, $this->domainName . 'Seeder "seed" flag'],
		];
	}

	/**
	 * Get command arguments
	 *
	 * @return array
	 */
	public function getArguments()
	{
		return [
			['key', InputOption::VALUE_NONE, $this->domainName . 'Installer command: up | down',],
		];
	}

}