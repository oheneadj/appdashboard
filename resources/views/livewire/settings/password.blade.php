<section class="w-full">
    @include('partials.settings-heading')

    <h2 class="sr-only">{{ __('Password Settings') }}</h2>

    <x-settings.layout :heading="__('Update password')" :subheading="__('Ensure your account is using a long, random password to stay secure')">
        <form method="POST" wire:submit="updatePassword" class="mt-6 space-y-5">
            <div class="form-control w-full">
                <label class="mb-2">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-200">{{ __('Current password') }}</span>
                </label>
                <div class="relative">
                    <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400">
                        <span class="icon-[tabler--lock] size-[18px]"></span>
                    </span>
                    <input wire:model="current_password" type="password" required autocomplete="current-password"
                        class="input input-bordered w-full pl-10 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" />
                </div>
            </div>

            <div class="form-control w-full">
                <label class="mb-2">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-200">{{ __('New password') }}</span>
                </label>
                <div class="relative">
                    <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400">
                        <span class="icon-[tabler--key] size-[18px]"></span>
                    </span>
                    <input wire:model="password" type="password" required autocomplete="new-password"
                        class="input input-bordered w-full pl-10 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" />
                </div>
            </div>

            <div class="form-control w-full">
                <label class="mb-2">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-200">{{ __('Confirm Password') }}</span>
                </label>
                <div class="relative">
                    <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400">
                        <span class="icon-[tabler--shield-check] size-[18px]"></span>
                    </span>
                    <input wire:model="password_confirmation" type="password" required autocomplete="new-password"
                        class="input input-bordered w-full pl-10 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" />
                </div>
            </div>

            <div class="flex items-center gap-4 pt-2">
                <button type="submit" class="btn btn-primary shadow-lg shadow-primary/20">
                    <span class="icon-[tabler--device-floppy] size-[18px]"></span>
                    {{ __('Update Password') }}
                </button>

                <x-action-message class="me-3 text-sm font-medium text-success" on="password-updated">
                    <span class="flex items-center gap-1">
                        <span class="icon-[tabler--circle-check] size-4"></span>
                        {{ __('Saved successfully!') }}
                    </span>
                </x-action-message>
            </div>
        </form>
    </x-settings.layout>
</section>