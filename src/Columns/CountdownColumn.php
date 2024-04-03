<?php

namespace Rovshen\FilamentCountdown\Columns;

use Filament\Tables\Columns\TextColumn;
use Rovshen\FilamentCountdown\Concerns\HasThemes;

class CountdownColumn extends TextColumn
{
    use HasThemes;

    public function getView(): string
    {
        return $this->getTheme()->getView() . '.column';
    }
}
