<?php

namespace BezhanSalleh\FilamentAddons\Forms\Components\Pills;

use Closure;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\Contracts\CanConcealComponents;
use Illuminate\Support\Str;

class Pill extends Component implements CanConcealComponents
{
    protected string | Closure | null $icon = null;

    protected string | Closure | null $badge = null;

    protected string $view = 'filament-addons::forms.components.pills.pill';

    final public function __construct(string $label)
    {
        $this->label($label);
        $this->id(Str::slug($label));
    }

    public static function make(string $label): static
    {
        $static = app(static::class, ['label' => $label]);
        $static->configure();

        return $static;
    }

    public function icon(string | Closure | null $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function badge(string | Closure | null $badge): static
    {
        $this->badge = $badge;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->evaluate($this->icon);
    }

    public function getBadge(): ?string
    {
        return $this->evaluate($this->badge);
    }

    public function getId(): string
    {
        return $this->getContainer()->getParentComponent()->getId() . '-' . parent::getId() . '-pill';
    }

    public function getColumnsConfig(): array
    {
        return $this->columns ?? $this->getContainer()->getColumnsConfig();
    }

    public function canConcealComponents(): bool
    {
        return true;
    }
}
