<x-layouts::auth>
    <div class="flex flex-col gap-6">
        <!-- Header with Logo -->
        <div class="flex flex-col items-center gap-2 text-center">
            <a href="{{ route('home') }}" class="flex items-center gap-2 mb-2" wire:navigate>
                <x-app-logo-icon class="size-8 fill-primary" />
                <span
                    class="text-xl font-bold bg-gradient-to-r from-primary to-primary/60 bg-clip-text text-transparent">FlyonUI</span>
            </a>
            <h1 class="text-2xl font-bold">{{ __('Forgot password') }}</h1>
            <p class="text-base-content/70">{{ __('Enter your email to receive a password reset link') }}</p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-6">
            @csrf

            <!-- Email Address -->
            <div class="form-control w-full">
                <label class="label">
                    <span class="label-text font-semibold">{{ __('Email Address') }}<span
                            class="text-error">*</span></span>
                </label>
                <input name="email" value="{{ old('email') }}" type="email" required autofocus autocomplete="email"
                    placeholder="{{ __('Enter your email address') }}" class="input input-bordered w-full" />
            </div>

            <button type="submit" class="btn btn-primary w-full" data-test="email-password-reset-link-button">
                {{ __('Email password reset link') }}
            </button>
        </form>

        <div class="text-center text-sm">
            <span class="text-base-content/70">{{ __('Remember your password?') }}</span>
            <a href="{{ route('login') }}" class="link link-primary no-underline font-semibold"
                wire:navigate>{{ __('Sign in') }}</a>
        </div>
    </div>
</x-layouts::auth>