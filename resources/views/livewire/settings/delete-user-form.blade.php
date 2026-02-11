<section class="mt-8 pt-6 border-t border-slate-200 dark:border-slate-700 space-y-4">
    <div class="flex items-start gap-3">
        <div class="w-9 h-9 rounded-xl bg-red-50 flex items-center justify-center shrink-0 mt-0.5">
            <span class="icon-[tabler--alert-triangle] size-[18px] text-red-500"></span>
        </div>
        <div>
            <h3 class="text-base font-bold text-slate-800 dark:text-slate-100">{{ __('Delete account') }}</h3>
            <p class="text-sm text-slate-500 dark:text-slate-400 mt-0.5">
                {{ __('Permanently delete your account and all associated data. This action cannot be undone.') }}</p>
        </div>
    </div>

    <button class="btn btn-error btn-sm shadow-lg shadow-red-200/50" onclick="confirm_user_deletion.showModal()">
        <span class="icon-[tabler--trash] size-4"></span>
        {{ __('Delete account') }}
    </button>

    <dialog id="confirm_user_deletion" class="modal">
        <div class="modal-box rounded-2xl">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-3 top-3">
                    <span class="icon-[tabler--x] size-5 text-slate-400"></span>
                </button>
            </form>

            <form method="POST" wire:submit="deleteUser" class="space-y-5">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center">
                        <span class="icon-[tabler--alert-triangle] size-5 text-red-500"></span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-800 dark:text-slate-100">{{ __('Delete your account?') }}</h3>
                </div>

                <p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm.') }}
                </p>

                <div class="form-control w-full">
                    <label class="mb-2">
                        <span class="text-sm font-medium text-slate-700 dark:text-slate-200">{{ __('Password') }}</span>
                    </label>
                    <div class="relative">
                        <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400">
                            <span class="icon-[tabler--lock] size-[18px]"></span>
                        </span>
                        <input wire:model="password" type="password" placeholder="{{ __('Enter your password') }}"
                            class="input input-bordered w-full pl-10" />
                    </div>
                </div>

                <div class="modal-action">
                    <form method="dialog">
                        <button class="btn btn-ghost">{{ __('Cancel') }}</button>
                    </form>
                    <button type="submit" class="btn btn-error">
                        <span class="icon-[tabler--trash] size-4"></span>
                        {{ __('Delete account') }}
                    </button>
                </div>
            </form>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
</section>