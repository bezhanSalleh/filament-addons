<?php

namespace BezhanSalleh\FilamentAddons\Forms\Components;

use Closure;
use Filament\Forms\Components\Component;
use Filament\Support\Concerns\HasExtraAlpineAttributes;

class Pills extends Component
{
    use HasExtraAlpineAttributes;

    protected string $view = 'filament-addons::forms.components.pills';

    public int | Closure $activePill = 1;

    final public function __construct(string $label)
    {
        $this->label($label);
    }

    public static function make(string $label): static
    {
        $static = app(static::class, ['label' => $label]);
        $static->configure();

        return $static;
    }

    public function pills(array $pills): static
    {
        $this->childComponents($pills);

        return $this;
    }

    public function activePill(int | Closure $activePill): static
    {
        $this->activePill = $activePill;

        return $this;
    }

    public function getActivePill(): int
    {
        return $this->evaluate($this->activePill);
    }
}
