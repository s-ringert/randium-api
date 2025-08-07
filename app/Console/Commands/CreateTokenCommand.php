<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateTokenCommand extends Command
{
    /** @var int */
    protected $signature = 'create:token {user}';

    protected $description = 'Command description';

    public function handle(): void
    {
        $user = User::find($this->argument('user'));
        $token = $user->createToken('bearer');
        $this->info($token->plainTextToken);
    }
}
