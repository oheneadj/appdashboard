<div class="max-w-4xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-slate-800 dark:text-slate-100">{{ __('User Details') }}</h1>
        <a href="{{ route('users.index') }}" class="btn btn-ghost">
            <span class="icon-[tabler--arrow-left] size-5"></span>
            {{ __('Back to Users') }}
        </a>
    </div>

    <div class="card bg-white dark:bg-slate-800 shadow-sm border border-slate-100 dark:border-slate-700">
        <div class="card-body">
            <div class="flex items-center gap-6 mb-8">
                <div class="avatar placeholder">
                    <div class="bg-neutral text-neutral-content rounded-full w-24">
                        <span class="text-3xl">{{ $user->initials() }}</span>
                    </div>
                </div>
                <div>
                    <h2 class="text-2xl font-bold">{{ $user->name }}</h2>
                    <p class="text-slate-500">{{ $user->email }}</p>
                    <div class="flex gap-2 mt-2">
                        <span class="badge badge-primary badge-outline">Member</span>
                        @if($user->email_verified_at)
                            <span class="badge badge-success badge-outline">Verified</span>
                        @else
                            <span class="badge badge-warning badge-outline">Pending</span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="divider"></div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="font-bold text-lg mb-4">{{ __('Account Information') }}</h3>
                    <div class="space-y-4">
                        <div>
                            <span class="text-sm font-medium text-slate-500 block">{{ __('Joined Date') }}</span>
                            <span
                                class="text-slate-700 dark:text-slate-300">{{ $user->created_at->format('F j, Y') }}</span>
                        </div>
                        <div>
                            <span class="text-sm font-medium text-slate-500 block">{{ __('Last Updated') }}</span>
                            <span
                                class="text-slate-700 dark:text-slate-300">{{ $user->updated_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>

                <!-- Add more sections as needed (e.g., Activity log, Roles, Permissions) -->
            </div>
        </div>
    </div>
</div>