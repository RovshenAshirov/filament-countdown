<?php

namespace Rovshen\FilamentCountdown\Concerns;

use Rovshen\FilamentCountdown\CountdownTheme;

trait HasThemes
{
    protected CountdownTheme $theme = CountdownTheme::Simple;

    public function theme(CountdownTheme $theme): static
    {
        $this->theme = $theme;

        return $this;
    }

    public function getTheme(): CountdownTheme
    {
        return $this->theme;
    }
}
