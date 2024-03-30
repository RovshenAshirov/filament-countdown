<?php

namespace Rovshen\FilamentCountdown\Commands;

use Illuminate\Console\Command;

class FilamentCountdownCommand extends Command
{
    public $signature = 'filament-countdown';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
