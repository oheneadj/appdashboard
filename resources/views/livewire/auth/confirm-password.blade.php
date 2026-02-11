<x-layouts::auth>
    <div class="flex flex-col gap-6">
        <!-- Header with Logo -->
        <div class="flex flex-col items-center gap-2 text-center">
            <a href="{{ route('home') }}" class="flex items-center gap-2 mb-2" wire:navigate>
                <x-app-logo-icon class="size-8 fill-primary" />
                <span
                    class="text-xl font-bold bg-gradient-to-r from-primary to-primary/60 bg-clip-text text-transparent">FlyonUI</span>
            </a>
            <h1 class="text-2xl font-bold">{{ __('Confirm password') }}</h1>
            <p class="text-base-content/70">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </p>
        </div>

        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('password.confirm.store') }}" class="flex flex-col gap-6">
            @csrf

            <div class="form-control w-full relative" x-data="{ show: false }">
                <label class="label">
                    <span class="label-text font-semibold">{{ __('Password') }}<span class="text-error">*</span></span>
                </label>
                <div class="relative">
                    <input name="password" :type="show ? 'text' : 'password'" required autocomplete="current-password"
                        placeholder="············" class="input input-bordered w-full pr-10" />
                    <button type="button" @click="show = !show"
                        class="absolute inset-y-0 right-0 pr-3 flex items-center text-base-content/70 hover:text-base-content">
                        <span class="icon-[tabler--eye] size-5" x-show="show" style="display: none;"></span>
                        <span class="icon-[tabler--eye-off] size-5" x-show="!show"></span>
                    </button>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-full" data-test="confirm-password-button">
                {{ __('Confirm') }}
            </button>
        </form>
    </div>
</x-layouts::auth>