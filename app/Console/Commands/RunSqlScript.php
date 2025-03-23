<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RunSqlScript extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run an SQL script to populate the database with data';

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
        // Path to the SQL file
        $sqlFilePath = storage_path('import.sql');

        // Check if the file exists
        if (!File::exists($sqlFilePath)) {
            $this->error("The SQL file does not exist at the specified path: $sqlFilePath");
            return 1; // Return error code
        }

        // Read the SQL file content
        $sqlContent = File::get($sqlFilePath);

        // If the file reading was successful, execute the SQL
        if ($sqlContent) {
            try {
                // Execute the SQL queries from the file
                DB::unprepared($sqlContent);
                $this->info('SQL script executed successfully.');
            } catch (\Exception $e) {
                // Catch any errors that occur during execution
                $this->error('An error occurred while executing the SQL script: ' . $e->getMessage());
                return 1; // Return error code
            }
        } else {
            $this->error('Unable to read the SQL file.');
            return 1; // Return error code
        }

        return 0; // Success
    }
}
