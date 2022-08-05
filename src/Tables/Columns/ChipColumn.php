<?php

namespace BezhanSalleh\FilamentAddons\Tables\Columns;

use Closure;
use Throwable;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Filesystem\Filesystem;
use Filament\Tables\Columns\Concerns;

class ChipColumn extends TextColumn
{
    use Concerns\CanFormatState;
    use Concerns\HasColors;
    use Concerns\HasIcons;

    protected string $view = 'filament-addons::tables.columns.chip-column';

    protected bool $inverse = false;

    protected bool $avatar = false;

    protected string | Closure | null $disk = null;

    protected string | Closure $visibility = 'public';

    protected function setUp(): void
    {
        parent::setUp();

        $this->disk(config('tables.default_filesystem_disk'));
    }

    public function disk(string | Closure | null $disk): static
    {
        $this->disk = $disk;

        return $this;
    }

    public function visibility(string | Closure $visibility): static
    {
        $this->visibility = $visibility;

        return $this;
    }

    public function inverse(bool $condition = true): static
    {
        $this->inverse = $condition;

        return $this;
    }

    public function avatar(bool $condition = true): static
    {
        $this->avatar = $condition;

        return $this;
    }

    public function getDisk(): Filesystem
    {
        return Storage::disk($this->getDiskName());
    }

    public function getDiskName(): string
    {
        return $this->evaluate($this->disk) ?? config('tables.default_filesystem_disk');
    }

    public function getVisibility(): string
    {
        return $this->evaluate($this->visibility);
    }

    public function getAvatarPath(): ?string
    {
        $state = $this->getState();

        if (! $state) {
            return null;
        }

        if (filter_var($state, FILTER_VALIDATE_URL) !== false) {
            return $state;
        }

        /** @var FilesystemAdapter $storage */
        $storage = $this->getDisk();

        if (! $storage->exists($state)) {
            return null;
        }

        if ($this->getVisibility() === 'private' || $storage->getVisibility($state) === 'private') {
            try {
                return $storage->temporaryUrl(
                    $state,
                    now()->addMinutes(5),
                );
            } catch (Throwable $exception) {
                // This driver does not support creating temporary URLs.
            }
        }

        return $storage->url($state);
    }

    public function getInverse(): bool
    {
        return $this->inverse;
    }

    public function getAvatar(): bool
    {
        return $this->avatar;
    }
}
