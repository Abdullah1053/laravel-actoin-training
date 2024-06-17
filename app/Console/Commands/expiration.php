<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class expiration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:expired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'expire user every 5 minuets';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
         $users = User::all();
        foreach($users as  $user){
            $user->type = "expiried";
            $user->save();
        }
        return Command::SUCCESS;
    }
}
