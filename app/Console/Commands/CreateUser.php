<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:createUser {name} {username} {password} {api_key?} {secret_key?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command create user';

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
    public function handle(User $userModel)
    {
        try {
            $user = $userModel::create(
                [
                    'name' => $this->argument('name'),
                    'username' => $this->argument('username'),
                    'password' => $this->argument('password'),
                    'exchange_api_key' => $this->argument('api_key'),
                    'exchange_secret_key' => $this->argument('secret_key'),
                    ]
            );
            $this->info('ok');
        } catch (\Exception $e) {
            $this->error($e->getMessage());
        }
        return 0;
    }
}
