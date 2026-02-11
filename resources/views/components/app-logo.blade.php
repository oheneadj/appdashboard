@props([
    'sidebar' => false,
])

@if($sidebar)
    <a {{ $attributes->merge(['class' => 'flex items-center gap-2 font-semibold text-lg']) }}>
        <div class="flex aspect-square size-8 items-center justify-center rounded-md bg-primary text-primary-content">
            <x-app-logo-icon class="size-5 fill-current" />
        </div>
        <span>Laravel Starter Kit</span>
    </a>
@else
    <a {{ $attributes->merge(['class' => 'flex items-center gap-2 font-semibold text-lg']) }}>
        <div class="flex aspect-square size-8 items-center justify-center rounded-md bg-primary text-primary-content">
            <x-app-logo-icon class="size-5 fill-current" />
        </div>
        <span>Laravel Starter Kit</span>
    </a>
@endif
