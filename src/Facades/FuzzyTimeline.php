<?php

namespace FTimeline\FuzzyTimeline\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \FTimeline\FuzzyTimeline\FuzzyTimeline
 */
class FuzzyTimeline extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \FTimeline\FuzzyTimeline\FuzzyTimeline::class;
    }
}
