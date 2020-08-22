<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Log;

class DatabaseBackupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup {database?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Database backup';

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
        
        // 1. backup filename
        // 2. command to make backup
        // 3. execute this command from php
        // 4. Logging that we made database backup
        $path = base_path("/database".DIRECTORY_SEPARATOR."backups".DIRECTORY_SEPARATOR);
        $filename = "backup-".env("DB_DATABASE")."-".date("Y-m-d", time()).".sql"; // config('database.connection.mysql.database')
        $command = "mysqldump --user=".env("DB_USERNAME")." --password=".env("DB_PASSWORD")." --host=127.0.0.1 ".env("DB_DATABASE")." > ".$path.$filename;
        exec($command, $output, $returnvar);
        Log::info("Database backup was created succesfully");
 
    }
}
