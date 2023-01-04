<?php

namespace Blabs\SmLaravel\Commands;

use Illuminate\Console\Command;

class SmLaravelCommand extends Command
{
    public $signature = 'salesmanago-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
