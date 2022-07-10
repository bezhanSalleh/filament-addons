<?php

namespace BezhanSalleh\FilamentAddons\Forms\Components;

use Filament\Forms\Components\Component;
use Filament\Support\Concerns\HasExtraAlpineAttributes;

class Pills extends Component
{
    use HasExtraAlpineAttributes;

    protected string $view = 'filament-pills-component::components.pills';

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
}
