<?php

namespace Rovshen\FilamentCountdown\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rovshen\FilamentCountdown\FilamentCountdown
 */
class FilamentCountdown extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rovshen\FilamentCountdown\FilamentCountdown::class;
    }
}
