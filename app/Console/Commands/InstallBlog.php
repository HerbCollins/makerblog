<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InstallBlog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'makerblog:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Maker blog system';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('key:generate');
        $this->call('migrate');
        $this->call('db:seed');
        $this->info('The system has been installed , Now U can enjoin it!');
    }
}
