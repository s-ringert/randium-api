<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateTokenCommand extends Command
{
    /** @var string */
    protected $signature = 'create:token {userId}';

    protected $description = 'Command description';

    public function handle(): void
    {
        /** @var User */
        $user = User::find((int) $this->argument('userId'));
        $token = $user->createToken('bearer');
        $this->info($token->plainTextToken);
    }
}
