<div class="flex flex-col lg:flex-row gap-8">
    <!-- Settings Navigation -->
    <div class="w-full lg:w-56 shrink-0">
        <nav class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
            <div class="p-2">
                <a href="{{ route('profile.edit') }}" wire:navigate
                    class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('profile.edit') ? 'bg-primary/10 text-primary' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-800' }}">
                    <span class="icon-[tabler--user] size-[18px]"></span>
                    {{ __('Profile') }}
                </a>
                <a href="{{ route('user-password.edit') }}" wire:navigate
                    class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('user-password.edit') ? 'bg-primary/10 text-primary' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-800' }}">
                    <span class="icon-[tabler--lock] size-[18px]"></span>
                    {{ __('Password') }}
                </a>
                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    <a href="{{ route('two-factor.show') }}" wire:navigate
                        class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('two-factor.show') ? 'bg-primary/10 text-primary' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-800' }}">
                        <span class="icon-[tabler--shield-check] size-[18px]"></span>
                        {{ __('Two-Factor Auth') }}
                    </a>
                @endif
                <a href="{{ route('appearance.edit') }}" wire:navigate
                    class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('appearance.edit') ? 'bg-primary/10 text-primary' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-800' }}">
                    <span class="icon-[tabler--palette] size-[18px]"></span>
                    {{ __('Appearance') }}
                </a>
            </div>
        </nav>
    </div>

    <!-- Settings Content -->
    <div class="flex min-w-0">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 lg:p-8">
            <div class="mb-6">
                <h2 class="text-lg font-bold text-slate-800">{{ $heading ?? '' }}</h2>
                <p class="text-slate-500 text-sm mt-1">{{ $subheading ?? '' }}</p>
            </div>
            <div class="divider mt-0 mb-6"></div>
            <div class="w-full max-w-lg">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>