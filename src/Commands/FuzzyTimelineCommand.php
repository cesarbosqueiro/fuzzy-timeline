<?php

namespace FTimeline\FuzzyTimeline\Commands;

use Illuminate\Console\Command;

class FuzzyTimelineCommand extends Command
{
    public $signature = 'fuzzy-timeline';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
