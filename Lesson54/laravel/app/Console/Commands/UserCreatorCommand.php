<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Hash;
use App\User;

class UserCreatorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:user-create {user? : Desired username} {password? : Desired password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rapidly create user in database';

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
     * @return int
     */
    public function handle()
    {
        $this->info('Starting to create user');

        $user = $this->argument('user');
        $password = $this->argument('password');

        $user = new User();

        $user->username =  $this->argument('user');
        $user->password =  Hash::make($this->argument('password'));

        // $user->save();

        $this->info('User is created');

    }
}
