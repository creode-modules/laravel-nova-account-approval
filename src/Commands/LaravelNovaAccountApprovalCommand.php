<?php

namespace Creode\LaravelNovaAccountApproval\Commands;

use Illuminate\Console\Command;

class LaravelNovaAccountApprovalCommand extends Command
{
    public $signature = 'laravel-nova-account-approval';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
