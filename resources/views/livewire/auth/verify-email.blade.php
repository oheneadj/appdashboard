<x-layouts::auth>
    <div class="flex flex-col gap-6">
        <!-- Header with Logo -->
        <div class="flex flex-col items-center gap-2 text-center">
            <a href="{{ route('home') }}" class="flex items-center gap-2 mb-2" wire:navigate>
                <x-app-logo-icon class="size-8 fill-primary" />
                <span
                    class="text-xl font-bold bg-gradient-to-r from-primary to-primary/60 bg-clip-text text-transparent">FlyonUI</span>
            </a>
            <h1 class="text-2xl font-bold">{{ __('Verify Email') }}</h1>
            <p class="text-base-content/70 text-sm">
                {{ __('Please verify your email address by clicking on the link we just emailed to you.') }}
            </p>
        </div>

        @if (session('status') == 'verification-link-sent')
            <div role="alert" class="alert alert-success text-sm py-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ __('A new verification link has been sent to the email address you provided during registration.') }}</span>
            </div>
        @endif

        <div class="flex flex-col items-center justify-between space-y-3">
            <form method="POST" action="{{ route('verification.send') }}" class="w-full">
                @csrf
                <button type="submit" class="btn btn-primary w-full">
                    {{ __('Resend verification email') }}
                </button>
            </form>

            <form method="POST" action="{{ route('logout') }}" class="w-full">
                @csrf
                <button type="submit" class="btn btn-ghost w-full" data-test="logout-button">
                    {{ __('Log out') }}
                </button>
            </form>
        </div>
    </div>
</x-layouts::auth>