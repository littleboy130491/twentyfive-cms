<?php

namespace Littleboy130491\TwentyfiveCms\Commands;

use Illuminate\Console\Command;

class TwentyfiveCmsCommand extends Command
{
    public $signature = 'twentyfive-cms';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
