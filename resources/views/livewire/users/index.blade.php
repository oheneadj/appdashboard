<div class="flex flex-col gap-6">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <div>
            <h1 class="text-2xl font-bold text-slate-800 dark:text-slate-100">{{ __('Users') }}</h1>
            <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">
                {{ __('Manage your team members and their roles.') }}
            </p>
        </div>
        <!-- Removed "Add User" button from here to move it to the table controls for consistency -->
    </div>

    <!-- Table Section -->
    <div class="card bg-white dark:bg-slate-800 shadow-sm border border-slate-100 dark:border-slate-700">
        <div class="card-body p-0">
            <!-- Table Header Controls -->
            <div
                class="p-5 flex flex-col sm:flex-row gap-4 justify-between items-center bg-white dark:bg-slate-800 rounded-t-xl border-b border-slate-100 dark:border-slate-700">
                <div class="flex items-center gap-2">
                    <span class="text-slate-500 dark:text-slate-400 text-sm font-medium">{{ __('Show') }}</span>
                    <select
                        class="select select-bordered select-sm bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 text-slate-600 dark:text-slate-300 w-20">
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                    </select>
                    <a href="{{ route('users.create') }}" class="btn btn-primary gap-2 ml-2" wire:navigate>
                        <span class="icon-[tabler--user-plus] size-5"></span> {{ __('Add User') }}
                    </a>
                </div>
                <div class="flex items-center gap-3">
                    <div class="relative">
                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">
                            <span class="icon-[tabler--search] size-4"></span>
                        </span>
                        <input wire:model.live="search" type="text" placeholder="{{ __('Search User') }}"
                            class="input input-sm input-bordered bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 text-slate-600 dark:text-slate-300 pl-9 w-64" />
                    </div>
                    <select
                        class="select select-bordered select-sm bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 text-slate-600 dark:text-slate-300">
                        <option>{{ __('Any Role') }}</option>
                        <option>{{ __('Admin') }}</option>
                        <option>{{ __('Member') }}</option>
                    </select>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="table w-full">
                    <!-- head -->
                    <thead
                        class="bg-gray-50/50 text-slate-500 dark:text-slate-400 font-bold uppercase text-[11px] tracking-wider border-b border-slate-100 dark:border-slate-700">
                        <tr>
                            <th class="py-4 px-4 w-12 text-center">
                                <label class="flex items-center justify-center">
                                    <input type="checkbox"
                                        class="checkbox checkbox-sm rounded border-slate-300 dark:border-slate-600 checked:border-indigo-600 checked:bg-indigo-600" />
                                </label>
                            </th>
                            <th class="py-4 px-4 text-left">
                                <div class="flex items-center gap-4 text-slate-600 dark:text-slate-300">
                                    <span>{{ __('User') }}</span>
                                    <span class="h-4 w-px bg-slate-200"></span>
                                </div>
                            </th>
                            <th class="py-4 px-4 text-left">
                                <div class="flex items-center gap-4 text-slate-600 dark:text-slate-300">
                                    <span>{{ __('Role') }}</span>
                                    <span class="h-4 w-px bg-slate-200"></span>
                                </div>
                            </th>
                            <th class="py-4 px-4 text-left">
                                <div class="flex items-center gap-4 text-slate-600 dark:text-slate-300">
                                    <span>{{ __('Status') }}</span>
                                    <span class="h-4 w-px bg-slate-200"></span>
                                </div>
                            </th>
                            <th class="py-4 px-4 text-left">
                                <div class="flex items-center gap-4 text-slate-600 dark:text-slate-300">
                                    <span>{{ __('Joined') }}</span>
                                    <span class="h-4 w-px bg-slate-200"></span>
                                </div>
                            </th>
                            <th class="py-4 px-4 text-center text-slate-600 dark:text-slate-300">{{ __('Actions') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-[13px]">
                        @forelse($users as $user)
                            <tr
                                class="hover:bg-slate-50 dark:hover:bg-slate-700 border-b border-slate-100 dark:border-slate-700 group transition-colors">
                                <td class="px-4 text-center">
                                    <label class="flex items-center justify-center">
                                        <input type="checkbox"
                                            class="checkbox checkbox-sm rounded border-slate-300 dark:border-slate-600 checked:border-indigo-600 checked:bg-indigo-600" />
                                    </label>
                                </td>
                                <td class="px-4">
                                    <div class="flex items-center gap-3">
                                        <div class="avatar">
                                            <div
                                                class="w-8 h-8 rounded-full ring-1 ring-slate-100 dark:ring-slate-700 bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-500 dark:text-slate-400 font-bold text-xs">
                                                {{ $user->initials() }}
                                            </div>
                                        </div>
                                        <div class="flex flex-col">
                                            <span
                                                class="font-semibold text-slate-700 dark:text-slate-200 leading-tight">{{ $user->name }}</span>
                                            <span class="text-[11px] text-slate-400">{{ $user->email }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4">
                                    <span
                                        class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-indigo-50 dark:bg-indigo-500/10 text-indigo-700 dark:text-indigo-400 ring-1 ring-inset ring-indigo-700/10 dark:ring-indigo-400/20">
                                        Member
                                    </span>
                                </td>
                                <td class="px-4">
                                    @if($user->email_verified_at)
                                        <div
                                            class="bg-emerald-100/60 text-emerald-600 rounded-full w-7 h-7 flex items-center justify-center">
                                            <span class="icon-[tabler--check] size-4"></span>
                                        </div>
                                    @else
                                        <div
                                            class="bg-amber-100/60 text-amber-500 rounded-full w-7 h-7 flex items-center justify-center">
                                            <span class="icon-[tabler--clock] size-4"></span>
                                        </div>
                                    @endif
                                </td>
                                <td class="px-4 text-slate-500 dark:text-slate-400">
                                    {{ $user->created_at->format('M d, Y') }}
                                </td>
                                <td class="px-4">
                                    <div class="flex items-center justify-center gap-3 text-slate-400">
                                        <button class="hover:text-slate-600 dark:text-slate-300 transition-colors"
                                            title="Delete">
                                            <span class="icon-[tabler--trash] size-[18px]"></span>
                                        </button>
                                        <a href="{{ route('users.show', $user) }}"
                                            class="hover:text-indigo-600 transition-colors" title="View" wire:navigate>
                                            <span class="icon-[tabler--eye] size-[18px]"></span>
                                        </a>
                                        <button class="hover:text-slate-600 dark:text-slate-300 transition-colors"
                                            title="More">
                                            <span class="icon-[tabler--dots-vertical] size-[18px]"></span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-4 py-8 text-center text-slate-500 dark:text-slate-400">
                                    <div class="flex flex-col items-center justify-center gap-2">
                                        <span
                                            class="icon-[tabler--search] size-8 text-slate-300 dark:text-slate-600"></span>
                                        <p>{{ __('No users found matching your search.') }}</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Footer / Pagination -->
            <div class="p-5 border-t border-slate-100 dark:border-slate-700">
                {{ $users->links() }}
            </div>
        </div>
    </div>

</div>