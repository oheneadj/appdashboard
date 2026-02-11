<section class="">
    @include('partials.settings-heading')

    <h2 class="sr-only">{{ __('Two-Factor Authentication') }}</h2>

    <x-settings.layout :heading="__('Two-Factor Authentication')" :subheading="__('Add an extra layer of security to your account using two-factor authentication')">
    <section class="max-w-xl">
        <div class="flex flex-col w-full mx-auto space-y-6 text-sm" wire:cloak>
            @if ($twoFactorEnabled)
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="flex items-center gap-2 px-3 py-1.5 bg-emerald-50 text-emerald-700 rounded-lg text-sm font-medium">
                            <span class="icon-[tabler--shield-check] size-4"></span>
                            {{ __('Enabled') }}
                        </div>
                    </div>

                    <p class="text-slate-500 dark:text-slate-400 leading-relaxed">
                        {{ __('With two-factor authentication enabled, you will be prompted for a secure, random pin during login, which you can retrieve from the TOTP-supported application on your phone.') }}
                    </p>

                    <livewire:settings.two-factor.recovery-codes :$requiresConfirmation/>

                    <div class="flex justify-start pt-2">
                        <button class="btn btn-error btn-outline" wire:click="disable">
                            <span class="icon-[tabler--shield-off] size-[18px]"></span>
                            {{ __('Disable 2FA') }}
                        </button>
                    </div>
                </div>
            @else
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="flex items-center gap-2 px-3 py-1.5 bg-red-50 text-red-600 rounded-lg text-sm font-medium">
                            <span class="icon-[tabler--shield-x] size-4"></span>
                            {{ __('Disabled') }}
                        </div>
                    </div>

                    <p class="text-slate-500 dark:text-slate-400 leading-relaxed">
                        {{ __('When you enable two-factor authentication, you will be prompted for a secure pin during login. This pin can be retrieved from a TOTP-supported application on your phone.') }}
                    </p>

                    <button class="btn btn-primary shadow-lg shadow-primary/20" wire:click="enable">
                        <span class="icon-[tabler--shield-check] size-[18px]"></span>
                        {{ __('Enable 2FA') }}
                    </button>
                </div>
            @endif
        </div>
    </x-settings.layout>

    <!-- Modal -->
    <dialog class="modal" {{ $showModal ? 'open' : '' }}>
        <div class="modal-box rounded-2xl">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-3 top-3" wire:click="closeModal">
                    <span class="icon-[tabler--x] size-5 text-slate-400"></span>
                </button>
            </form>

            <div class="space-y-6">
                <div class="flex flex-col items-center space-y-4">
                    <!-- QR Code -->
                    <div class="p-4 bg-white dark:bg-slate-800 rounded-xl border border-slate-100 dark:border-slate-700">
                        {!! $qrCodeSvg ?? '' !!}
                    </div>

                    <div class="space-y-2 text-center">
                        <h3 class="text-lg font-bold text-slate-800 dark:text-slate-100">{{ $this->modalConfig['title'] }}</h3>
                        <p class="text-sm text-slate-500 dark:text-slate-400">{{ $this->modalConfig['description'] }}</p>
                    </div>
                </div>

                @if ($showVerificationStep)
                    <div class="space-y-6">
                        <div class="flex flex-col items-center space-y-3 justify-center">
                            <div class="form-control w-full max-w-xs mx-auto">
                                <label class="label sr-only">OTP Code</label>
                                <div class="relative">
                                    <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400">
                                        <span class="icon-[tabler--hash] size-[18px]"></span>
                                    </span>
                                    <input type="text" wire:model="code" name="code"
                                        class="input input-bordered w-full pl-10 text-center tracking-widest text-2xl focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
                                        maxlength="6" placeholder="000000" />
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3">
                            <button class="btn btn-outline flex-1" wire:click="resetVerification">
                                <span class="icon-[tabler--arrow-left] size-4"></span>
                                {{ __('Back') }}
                            </button>

                            <button class="btn btn-primary flex-1" wire:click="confirmTwoFactor"
                                @if (strlen($code) < 6) disabled @endif>
                                <span class="icon-[tabler--circle-check] size-4"></span>
                                {{ __('Confirm') }}
                            </button>
                        </div>
                    </div>
                @else
                    @error('setupData')
                        <div role="alert" class="alert alert-error rounded-xl">
                            <span class="icon-[tabler--circle-x] size-5"></span>
                            <span>{{ $message }}</span>
                        </div>
                    @enderror

                    <div>
                        <button @if ($errors->has('setupData')) disabled @endif
                            class="btn btn-primary w-full shadow-lg shadow-primary/20"
                            wire:click="showVerificationIfNecessary">
                            <span class="icon-[tabler--scan] size-[18px]"></span>
                            {{ $this->modalConfig['buttonText'] }}
                        </button>
                    </div>

                    <div class="space-y-4">
                        <div class="divider text-sm text-slate-400">{{ __('or, enter the code manually') }}</div>

                        <div class="flex items-center space-x-2">
                            <div class="join w-full">
                                <div class="relative flex-1">
                                    <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400">
                                        <span class="icon-[tabler--key] size-[18px]"></span>
                                    </span>
                                    <input type="text" readonly value="{{ $manualSetupKey }}"
                                        class="input input-bordered join-item w-full pl-10" />
                                </div>
                                <button class="btn join-item"
                                    onclick="navigator.clipboard.writeText('{{ $manualSetupKey }}')">
                                    <span class="icon-[tabler--copy] size-5"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button wire:click="closeModal">close</button>
        </form>
    </dialog>
</section>
