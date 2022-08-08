<?php

namespace BezhanSalleh\FilamentAddons\Tables\Columns;

use Filament\Tables\Columns\BadgeColumn;

class ChipColumn extends BadgeColumn
{
    protected string $view = 'filament-addons::tables.columns.chip-column';

    protected bool $invert = false;

    public function invert(bool $condition = true): static
    {
        $this->invert = $condition;

        return $this;
    }

    public function getInvert(): bool
    {
        return $this->invert;
    }

}
