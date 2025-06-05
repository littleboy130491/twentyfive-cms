<?php

namespace Littleboy130491\TwentyfiveCms\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Littleboy130491\TwentyfiveCms\TwentyfiveCms
 */
class TwentyfiveCms extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Littleboy130491\TwentyfiveCms\TwentyfiveCms::class;
    }
}
