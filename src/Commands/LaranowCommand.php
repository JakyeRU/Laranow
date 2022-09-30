<?php

namespace JakyeRU\Laranow\Commands;

use Illuminate\Console\Command;

class LaranowCommand extends Command
{
    public $signature = 'laranow';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
