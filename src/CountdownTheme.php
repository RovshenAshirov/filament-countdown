<?php

namespace Rovshen\FilamentCountdown;

enum CountdownTheme
{
    case Simple;

    public function getView(): string
    {
        return match ($this) {
            self::Simple => 'filament-countdown::simple'
        };
    }
}
