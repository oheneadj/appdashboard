<div class="py-5 space-y-5 border border-slate-100 dark:border-slate-700 shadow-sm rounded-2xl bg-white dark:bg-slate-800"
    wire:cloak x-data="{ showRecoveryCodes: false }">
    <div class="px-6 space-y-2">
        <div class="flex items-center gap-2">
            <span class="icon-[tabler--lock] size-4 text-slate-500 dark:text-slate-400"></span>
            <h3 class="text-base font-bold text-slate-800 dark:text-slate-100">{{ __('2FA Recovery Codes') }}</h3>
        </div>
        <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">
            {{ __('Recovery codes let you regain access if you lose your 2FA device. Store them in a secure password manager.') }}
        </p>
    </div>

    <div class="px-6">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <button x-show="!showRecoveryCodes" class="btn btn-primary" @click="showRecoveryCodes = true;"
                aria-expanded="false" aria-controls="recovery-codes-section">
                <span class="icon-[tabler--eye] size-4"></span>
                {{ __('View Recovery Codes') }}
            </button>

            <button x-show="showRecoveryCodes" class="btn btn-primary" @click="showRecoveryCodes = false"
                aria-expanded="true" aria-controls="recovery-codes-section">
                <span class="icon-[tabler--eye-off] size-4"></span>
                {{ __('Hide Recovery Codes') }}
            </button>

            @if (filled($recoveryCodes))
                <button x-show="showRecoveryCodes" class="btn btn-outline btn-sm" wire:click="regenerateRecoveryCodes">
                    <span class="icon-[tabler--refresh] size-4"></span>
                    {{ __('Regenerate Codes') }}
                </button>
            @endif
        </div>

        <div x-show="showRecoveryCodes" x-transition id="recovery-codes-section" class="relative overflow-hidden"
            x-bind:aria-hidden="!showRecoveryCodes">
            <div class="mt-3 space-y-3">
                @error('recoveryCodes')
                    <div role="alert" class="alert alert-error rounded-xl">
                        <span class="icon-[tabler--circle-x] size-5"></span>
                        <span>{{ $message }}</span>
                    </div>
                @enderror

                @if (filled($recoveryCodes))
                    <div class="grid gap-1 p-4 font-mono text-sm rounded-xl bg-slate-50 border border-slate-100 dark:border-slate-700"
                        role="list" aria-label="{{ __('Recovery codes') }}">
                        @foreach($recoveryCodes as $code)
                            <div role="listitem" class="select-text text-slate-700 dark:text-slate-200"
                                wire:loading.class="opacity-50 animate-pulse">
                                {{ $code }}
                            </div>
                        @endforeach
                    </div>
                    <p class="text-xs text-slate-400">
                        {{ __('Each recovery code can be used once to access your account and will be removed after use. If you need more, click Regenerate Codes above.') }}
                    </p>
                @endif
            </div>
        </div>
    </div>
</div>