@php
$state = $getFormattedState();

$stateColor = match ($getStateColor()) {
    'primary' => \Illuminate\Support\Arr::toCssClasses([
        'bg-primary-600 text-white' => $getInverse(),
        'text-primary-600 bg-gray-500/10' => !$getInverse(),
        'dark:text-primary-500 dark:bg-primary-500/10' => !$getInverse() && config('tables.dark_mode'),
    ]),
    'success' => \Illuminate\Support\Arr::toCssClasses([
        'bg-success-600 text-white' => $getInverse(),
        'text-success-600 bg-gray-500/10' => !$getInverse(),
        'dark:text-success-500 dark:bg-success-500/10' => !$getInverse() && config('tables.dark_mode'),
    ]),
    'warning' => \Illuminate\Support\Arr::toCssClasses([
        'bg-warning-600 text-white' => $getInverse(),
        'text-warning-600 bg-gray-500/10' => !$getInverse(),
        'dark:text-warning-500 dark:bg-warning-500/10' => !$getInverse() && config('tables.dark_mode'),
    ]),
    'danger' => \Illuminate\Support\Arr::toCssClasses([
        'bg-danger-600 text-white' => $getInverse(),
        'text-danger-600 bg-gray-500/10' => !$getInverse(),
        'dark:text-danger-500 dark:bg-danger-500/10' => !$getInverse() && config('tables.dark_mode'),
    ]),
    null => \Illuminate\Support\Arr::toCssClasses(['text-gray-600 bg-gray-500/10', 'dark:text-gray-300 dark:bg-gray-500/20' => config('tables.dark_mode')]),
    default => $getStateColor()
};

$iconColor = match ($getStateColor()) {
    'primary' => \Illuminate\Support\Arr::toCssClasses([
        'text-white bg-primary-600 ' => !$getInverse(),
        'text-primary-600 bg-white' => $getInverse(),
        'dark:text-gray-100' => !$getInverse() && config('tables.dark_mode'),
    ]),
    'success' => \Illuminate\Support\Arr::toCssClasses([
        'text-white bg-success-600' => !$getInverse(),
        'text-success-600 bg-white' => $getInverse(),
        'dark:text-gray-100' => !$getInverse() && config('tables.dark_mode'),
    ]),
    'warning' => \Illuminate\Support\Arr::toCssClasses([
        'text-white bg-warning-600 ' => !$getInverse(),
        'text-warning-600 bg-white' => $getInverse(),
        'dark:text-gray-100' => !$getInverse() && config('tables.dark_mode'),
    ]),
    'danger' => \Illuminate\Support\Arr::toCssClasses([
        'text-white bg-danger-600' => !$getInverse(),
        'text-danger-600 bg-white' => $getInverse(),
        'dark:text-gray-100' => !$getInverse() && config('tables.dark_mode'),
    ]),
    null => \Illuminate\Support\Arr::toCssClasses(['text-white bg-gray-600', 'dark:text-gray-100 dark:bg-gray-800' => config('tables.dark_mode')]),
    default => $getStateColor()
};

$stateIcon = $getStateIcon();
$iconPosition = $getIconPosition();
$avatar = $getAvatar();

@endphp

<div
    {{ $attributes->merge($getExtraAttributes())->class([
            'px-4 py-3 flex filament-tables-chip-column',
            match ($getAlignment()) {
                'left' => 'justify-start',
                'center' => 'justify-center',
                'right' => 'justify-end',
                default => null
            },
        ])
    }}
>
    @if (filled($state))
        <div @class([
            'inline-flex items-center justify-center min-h-6 px-2 py-0.5 text-sm font-medium tracking-tight rounded-xl whitespace-normal',
            $stateColor => $stateColor,
        ])>
            @if ($avatar)
            <div class="inline-flex !-ml-[0.36rem] mr-1 rtl:!-mr-[0.36rem] rtl:!ml-1 rounded-full h-5 w-5 ">
                <img src="{{ $getAvatarPath() }}" class="object-cover object-center rounded-full" />
            </div>
            @endif

            @if ($stateIcon && $iconPosition === 'before' && !$avatar)
                <div
                    class="inline-flex items-center justify-center !-ml-[0.36rem] !mr-1 rtl:!-mr-[0.36rem] rtl:!ml-1 rounded-full h-5 w-5 text-center {{ $iconColor }}">
                    <x-dynamic-component :component="$stateIcon" class="h-3 w-3" />
                </div>
            @endif

            <span>
                {{ $state }}
            </span>

            @if ($stateIcon && $iconPosition === 'after' && !$avatar)
                <div
                    class="inline-flex items-center justify-center !-mr-[0.36rem] !ml-1 rtl:!mr-1 rtl:!-ml-[0.36rem] rounded-full h-5 w-5 text-center {{ $iconColor }}">
                    <x-dynamic-component :component="$stateIcon" class="h-3 w-3" />
                </div>
            @endif
        </div>
    @endif
</div>
