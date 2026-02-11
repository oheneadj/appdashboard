<section class="">
    @include('partials.settings-heading')

    <h2 class="sr-only">{{ __('Profile Settings') }}</h2>

    <x-settings.layout :heading="__('Profile')" :subheading="__('Update your name and email address')">
        <form wire:submit="updateProfileInformation" class="my-6 space-y-5">
            <div class="form-control w-full">
                <label class="mb-2">
                    <span class="text-sm font-medium text-slate-700">{{ __('Name') }}</span>
                </label>
                <div class="relative">
                    <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400">
                        <span class="icon-[tabler--user] size-[18px]"></span>
                    </span>
                    <input wire:model="name" type="text" required autofocus autocomplete="name"
                        class="input input-bordered w-full pl-10 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" />
                </div>
            </div>

            <div class="form-control w-full">
                <label class="mb-2">
                    <span class="text-sm font-medium text-slate-700">{{ __('Email') }}</span>
                </label>
                <div class="relative">
                    <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400">
                        <span class="icon-[tabler--mail] size-[18px]"></span>
                    </span>
                    <input wire:model="email" type="email" required autocomplete="email"
                        class="input input-bordered w-full pl-10 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" />
                </div>

                @if ($this->hasUnverifiedEmail)
                    <div class="mt-3 p-3 bg-amber-50 border border-amber-100 rounded-xl">
                        <p class="text-sm text-amber-700 flex items-center gap-2">
                            <span class="icon-[tabler--alert-triangle] size-4"></span>
                            {{ __('Your email address is unverified.') }}
                            <button type="button" class="link link-primary text-sm cursor-pointer font-medium"
                                wire:click.prevent="resendVerificationNotification">
                                {{ __('Resend verification email') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 text-sm font-medium text-success flex items-center gap-2">
                                <span class="icon-[tabler--circle-check] size-4"></span>
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>

            <div class="flex items-center gap-4 pt-2">
                <button type="submit" class="btn btn-primary shadow-lg shadow-primary/20">
                    <span class="icon-[tabler--device-floppy] size-[18px]"></span>
                    {{ __('Save Changes') }}
                </button>

                <x-action-message class="me-3 text-sm font-medium text-success" on="profile-updated">
                    <span class="flex items-center gap-1">
                        <span class="icon-[tabler--circle-check] size-4"></span>
                        {{ __('Saved successfully!') }}
                    </span>
                </x-action-message>
            </div>
        </form>

        @if ($this->showDeleteUser)
            <livewire:settings.delete-user-form />
        @endif
    </x-settings.layout>
</section>