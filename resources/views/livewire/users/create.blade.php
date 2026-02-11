<div class="max-w-2xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-slate-800 dark:text-slate-100">{{ __('Create User') }}</h1>
        <a href="{{ route('users.index') }}" class="btn btn-ghost">
            <span class="icon-[tabler--arrow-left] size-5"></span>
            {{ __('Back to Users') }}
        </a>
    </div>

    <div class="card bg-white dark:bg-slate-800 shadow-sm border border-slate-100 dark:border-slate-700">
        <div class="card-body">
            <form wire:submit="save" class="space-y-4">
                <!-- Name -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">{{ __('Name') }}</span>
                    </label>
                    <input wire:model="name" type="text" placeholder="John Doe"
                        class="input input-bordered @error('name') input-error @enderror" />
                    @error('name') <span class="text-error text-sm mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- Email -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">{{ __('Email') }}</span>
                    </label>
                    <input wire:model="email" type="email" placeholder="john@example.com"
                        class="input input-bordered @error('email') input-error @enderror" />
                    @error('email') <span class="text-error text-sm mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- Password -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">{{ __('Password') }}</span>
                    </label>
                    <input wire:model="password" type="password" placeholder="********"
                        class="input input-bordered @error('password') input-error @enderror" />
                    @error('password') <span class="text-error text-sm mt-1">{{ $message }}</span> @enderror
                </div>

                <!-- Confirm Password -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">{{ __('Confirm Password') }}</span>
                    </label>
                    <input wire:model="password_confirmation" type="password" placeholder="********"
                        class="input input-bordered" />
                </div>

                <div class="card-actions justify-end mt-6">
                    <button type="submit" class="btn btn-primary">
                        <span class="icon-[tabler--check] size-5"></span>
                        {{ __('Create User') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>