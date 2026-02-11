<x-layouts::auth>
    <div class="flex flex-col gap-6">
        <!-- Header with Logo -->
        <div class="flex flex-col items-center gap-2 text-center">
            <a href="{{ route('home') }}" class="flex items-center gap-2 mb-2" wire:navigate>
                <x-app-logo-icon class="size-8 fill-primary" />
                <span
                    class="text-xl font-bold bg-gradient-to-r from-primary to-primary/60 bg-clip-text text-transparent">FlyonUI</span>
            </a>
            <h1 class="text-2xl font-bold">{{ __('Reset password') }}</h1>
            <p class="text-base-content/70">{{ __('Please enter your new password below') }}</p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('password.update') }}" class="flex flex-col gap-6">
            @csrf
            <!-- Token -->
            <input type="hidden" name="token" value="{{ request()->route('token') }}">

            <!-- Email Address -->
            <div class="form-control w-full">
                <label class="label">
                    <span class="label-text font-semibold">{{ __('Email') }}<span class="text-error">*</span></span>
                </label>
                <input name="email" value="{{ request('email') }}" type="email" required autocomplete="email"
                    class="input input-bordered w-full" />
            </div>

            <!-- Password -->
            <div class="form-control w-full relative" x-data="{ show: false }">
                <label class="label">
                    <span class="label-text font-semibold">{{ __('Password') }}<span class="text-error">*</span></span>
                </label>
                <div class="relative">
                    <input name="password" :type="show ? 'text' : 'password'" required autocomplete="new-password"
                        placeholder="············" class="input input-bordered w-full pr-10" />
                    <button type="button" @click="show = !show"
                        class="absolute inset-y-0 right-0 pr-3 flex items-center text-base-content/70 hover:text-base-content">
                        <span class="icon-[tabler--eye] size-5" x-show="show" style="display: none;"></span>
                        <span class="icon-[tabler--eye-off] size-5" x-show="!show"></span>
                    </button>
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="form-control w-full relative" x-data="{ show: false }">
                <label class="label">
                    <span class="label-text font-semibold">{{ __('Confirm password') }}<span
                            class="text-error">*</span></span>
                </label>
                <div class="relative">
                    <input name="password_confirmation" :type="show ? 'text' : 'password'" required
                        autocomplete="new-password" placeholder="············"
                        class="input input-bordered w-full pr-10" />
                    <button type="button" @click="show = !show"
                        class="absolute inset-y-0 right-0 pr-3 flex items-center text-base-content/70 hover:text-base-content">
                        <span class="icon-[tabler--eye] size-5" x-show="show" style="display: none;"></span>
                        <span class="icon-[tabler--eye-off] size-5" x-show="!show"></span>
                    </button>
                </div>
            </div>

            <div class="flex items-center justify-end">
                <button type="submit" class="btn btn-primary w-full" data-test="reset-password-button">
                    {{ __('Reset password') }}
                </button>
            </div>
        </form>
    </div>
</x-layouts::auth>