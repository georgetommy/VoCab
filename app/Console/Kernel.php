<?php namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel {

	/**
	 * The Artisan commands provided by your application.
	 *
	 * @var array
	 */
	protected $commands = [
		'App\Console\Commands\Inspire',
		'App\Console\Commands\BackupCommand',
		'App\Console\Commands\WotdCommand',
		'App\Console\Commands\SaveoldmwCommand',
		'App\Console\Commands\RestoreoldmwCommand',
		'App\Console\Commands\SavenewmwCommand',
		'App\Console\Commands\ChangeWordDatesCommand',
		'App\Console\Commands\CreateUserCommand',
		'App\Console\Commands\CreateLanguageCommand',
	];

	/**
	 * Define the application's command schedule.
	 *
	 * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
	 * @return void
	 */
	protected function schedule(Schedule $schedule)
	{
		$schedule->command('inspire')
				 ->hourly();
	}

}
