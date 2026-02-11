<div
    class="navbar bg-slate-100 dark:bg-slate-800 border-b border-slate-100 dark:border-slate-700 px-6 h-16 w-full z-10 sticky top-0">
    <!-- Mobile Toggle -->
    <div class="flex-none lg:hidden mr-2">
        <button id="mobile-menu-button" aria-label="open sidebar"
            class="btn btn-square btn-ghost btn-sm text-slate-500 dark:text-slate-400">
            <span class="icon-[tabler--menu-2] size-6"></span>
        </button>
    </div>

    <!-- Search Bar -->
    <div class="flex-1 ">
        <div
            class="relative bg-white dark:bg-slate-800 border-b shadow-sm rounded-lg border-slate-100 dark:border-slate-700 w-full max-w-md hidden md:block">
            <span
                class="icon-[tabler--search] absolute left-3 top-1/2 -translate-y-1/2 size-5 text-slate-400 dark:text-slate-500"></span>
            <input type="text" placeholder="Search [CTRL + K]"
                class="input input-sm h-10 w-full pl-10 bg-slate-50 dark:bg-slate-900 border-transparent focus:bg-white dark:focus:bg-slate-800 focus:border-primary/20 focus:ring-4 focus:ring-primary/5 transition-all rounded-lg placeholder-slate-400 dark:placeholder-slate-500 text-sm dark:text-slate-200" />
        </div>
        <button class="btn btn-ghost btn-circle btn-sm md:hidden text-slate-500">
            <span class="icon-[tabler--search] size-5"></span>
        </button>
    </div>

    <!-- Right Actions -->
    <div class="flex items-center gap-1 sm:gap-2">
        <!-- Theme Toggle -->
        <button
            class="btn bg-primary btn-circle btn-sm text-white hover:bg-slate-100 dark:hover:bg-slate-700 hover:text-primary transition-all duration-200">
            <span class="icon-[tabler--moon] size-5"></span>
        </button>

        <!-- Shortcuts (Hidden on mobile) -->
        <button
            class="btn bg-primary btn-circle btn-sm text-white hover:bg-slate-100 dark:hover:bg-slate-700 hover:text-primary transition-all duration-200 hidden sm:flex">
            <span class="icon-[tabler--layout-grid] size-5"></span>
        </button>

        <!-- Notifications -->
        <div x-data="{ open: false }">
            <button @click="open = !open"
                :class="open ? 'bg-primary/10 text-primary' : 'text-white hover:bg-slate-100 dark:hover:bg-slate-700 hover:text-slate-700 dark:hover:text-slate-200'"
                class="btn bg-primary btn-circle btn-sm transition-all duration-200 relative">
                <div class="indicator">
                    <span class="icon-[tabler--bell] size-5"></span>
                    <span class="badge badge-xs badge-error indicator-item border-2 border-white shadow-sm"></span>
                </div>
            </button>

            <!-- Slide-over Backdrop -->
            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" @click="open = false"
                class="fixed inset-0 bg-black/30 backdrop-blur-sm z-40" style="display: none;">
            </div>

            <!-- Slide-over Panel -->
            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in duration-200" x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full"
                class="fixed top-0 right-0 h-full w-96 max-w-[calc(100vw-3rem)] bg-white dark:bg-slate-800 shadow-2xl z-50 flex flex-col border-l border-slate-100 dark:border-slate-700"
                style="display: none;">

                <!-- Panel Header -->
                <div
                    class="flex items-center justify-between p-5 border-b border-slate-100 dark:border-slate-700 bg-slate-50/50 dark:bg-slate-900/50 flex-shrink-0">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center">
                            <span class="icon-[tabler--bell] size-4 text-primary"></span>
                        </div>
                        <div>
                            <h2 class="font-bold text-slate-800 text-base">Notifications</h2>
                            <p class="text-[11px] text-slate-400">3 unread</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <button
                            class="text-xs text-primary font-semibold hover:text-primary/70 transition-colors px-2 py-1 rounded-lg hover:bg-primary/5">Mark
                            all read</button>
                        <button @click="open = false"
                            class="btn btn-primary btn-circle btn-sm text-white hover:text-primary hover:bg-primary/10">
                            <span class="icon-[tabler--x] size-5"></span>
                        </button>
                    </div>
                </div>

                <!-- Notification List (Scrollable) -->
                <div class="flex-1 overflow-y-auto">
                    <!-- Today -->
                    <div class="px-4 pt-4 pb-1">
                        <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">Today</p>
                    </div>

                    <div class="px-3">
                        <!-- Unread notification -->
                        <div
                            class="flex items-start gap-3 p-3 bg-primary/[0.03] hover:bg-primary/[0.06] cursor-pointer transition-colors group border-l-2 border-primary">
                            <div class="avatar placeholder flex-shrink-0">
                                <div
                                    class="bg-primary/10 flex items-center justify-center text-primary rounded-full group-hover:bg-primary group-hover:text-white transition-colors w-10 h-10 rounded flex items-center justify-center">
                                    <span class="text-xs mx-auto inline-block font-bold">JD</span>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p
                                    class="font-semibold text-slate-800 text-sm group-hover:text-primary transition-colors">
                                    New message from Jane</p>
                                <p class="text-slate-500 text-xs mt-1 line-clamp-2 leading-relaxed">Hey, are we still
                                    expecting the update today? I need to know before the meeting.</p>
                                <p class="text-[10px] text-primary/70 mt-1.5 font-semibold">2 mins ago</p>
                            </div>
                            <div class="w-2 h-2 rounded-full bg-primary mt-2 flex-shrink-0"></div>
                        </div>

                        <!-- Unread notification -->
                        <div
                            class="flex items-start gap-3 p-3 bg-primary/[0.03] hover:bg-primary/[0.06] cursor-pointer transition-colors group border-l-2 border-primary">
                            <div class="avatar placeholder flex-shrink-0">
                                <div
                                    class="bg-success/10 text-success group-hover:bg-success group-hover:text-white transition-colors w-10 h-10 rounded-full flex items-center justify-center">
                                    <span class="icon-[tabler--circle-check] size-5"></span>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p
                                    class="font-semibold text-slate-800 text-sm group-hover:text-primary transition-colors">
                                    Deployment successful</p>
                                <p class="text-slate-500 text-xs mt-1 line-clamp-2 leading-relaxed">Your latest changes
                                    have been deployed to production.</p>
                                <p class="text-[10px] text-primary/70 mt-1.5 font-semibold">15 mins ago</p>
                            </div>
                            <div class="w-2 h-2 rounded-full bg-primary mt-2 flex-shrink-0"></div>
                        </div>

                        <!-- Unread notification -->
                        <div
                            class="flex items-start gap-3 p-3 bg-primary/[0.03] hover:bg-primary/[0.06] cursor-pointer transition-colors group border-l-2 border-primary">
                            <div class="avatar placeholder flex-shrink-0">
                                <div
                                    class="bg-warning/10 text-warning group-hover:bg-warning group-hover:text-white transition-colors w-10 h-10 rounded-full grid place-items-center">
                                    <span class="icon-[tabler--alert-triangle] size-5"></span>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p
                                    class="font-semibold text-slate-800 text-sm group-hover:text-primary transition-colors">
                                    Server load warning</p>
                                <p class="text-slate-500 text-xs mt-1 line-clamp-2 leading-relaxed">CPU usage exceeded
                                    85% on the primary server.</p>
                                <p class="text-[10px] text-primary/70 mt-1.5 font-semibold">1 hour ago</p>
                            </div>
                            <div class="w-2 h-2 rounded-full bg-primary mt-2 flex-shrink-0"></div>
                        </div>
                    </div>

                    <!-- Yesterday -->
                    <div class="px-4 pt-5 pb-1">
                        <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">Yesterday</p>
                    </div>

                    <div class="px-3 space-y-1 pb-4">
                        <!-- Read notification -->
                        <div
                            class="flex items-start gap-3 p-3 hover:bg-slate-50 cursor-pointer transition-colors group">
                            <div class="avatar placeholder flex-shrink-0">
                                <div
                                    class="bg-slate-100 text-slate-500 w-10 h-10 rounded-full flex items-center justify-center">
                                    <span class="text-xs font-bold">TM</span>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p
                                    class="font-medium text-slate-600 text-sm group-hover:text-slate-800 transition-colors">
                                    Team meeting notes shared</p>
                                <p class="text-slate-400 text-xs mt-1 line-clamp-2 leading-relaxed">Sarah shared the
                                    meeting notes from yesterday's standup.</p>
                                <p class="text-[10px] text-slate-400 mt-1.5 font-medium">Yesterday, 4:30 PM</p>
                            </div>
                        </div>

                        <!-- Read notification -->
                        <div
                            class="flex items-start gap-3 p-3 hover:bg-slate-50 cursor-pointer transition-colors group">
                            <div class="avatar placeholder flex-shrink-0">
                                <div
                                    class="bg-slate-100 text-slate-500 w-10 h-10 rounded-full flex items-center justify-center">
                                    <span class="icon-[tabler--file-text] size-5"></span>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p
                                    class="font-medium text-slate-600 text-sm group-hover:text-slate-800 transition-colors">
                                    Invoice #1284 generated</p>
                                <p class="text-slate-400 text-xs mt-1 line-clamp-2 leading-relaxed">A new invoice has
                                    been generated for client Acme Corp.</p>
                                <p class="text-[10px] text-slate-400 mt-1.5 font-medium">Yesterday, 2:15 PM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Panel Footer -->
                <div
                    class="p-4 border-t border-slate-100 dark:border-slate-700 bg-white dark:bg-slate-800 flex-shrink-0">
                    <a href="#"
                        class="block w-full py-2.5 text-center text-sm font-semibold text-primary hover:bg-primary/5 rounded-xl transition-all">
                        View all notifications
                    </a>
                </div>
            </div>
        </div>

        <!-- User Menu -->
        <div class="relative ml-3" x-data="{ open: false }" @click.outside="open = false">
            <button @click="open = !open"
                class="btn btn-ghost btn-circle avatar online transition-all duration-200 hover:scale-105 active:scale-95">
                <div class="w-10 rounded-full ring-2 ring-slate-100 ring-offset-2 transition-all duration-200"
                    :class="open ? 'ring-primary ring-offset-4' : 'hover:ring-slate-300'">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" alt="User" />
                </div>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 translate-y-2 scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                x-transition:leave-end="opacity-0 translate-y-2 scale-95"
                class="absolute right-0 top-full mt-3 w-64 bg-white dark:bg-slate-800 rounded-2xl shadow-2xl shadow-slate-200/50 dark:shadow-slate-900/50 border border-slate-100 dark:border-slate-700 z-50 origin-top-right overflow-hidden transform"
                style="display: none;">
                <!-- Arrow -->
                <div
                    class="absolute top-0 right-4 -mt-2 w-4 h-4 bg-white dark:bg-slate-800 transform rotate-45 border-l border-t border-slate-100 dark:border-slate-700 z-0">
                </div>

                <div class="relative z-10 bg-white dark:bg-slate-800">
                    <div class="p-5 border-b border-slate-50 dark:border-slate-700 bg-slate-50/50 dark:bg-slate-900/50">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-slate-200 overflow-hidden">
                                <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                                    alt="User" class="w-full h-full object-cover" />
                            </div>
                            <div class="overflow-hidden">
                                <p class="font-bold text-slate-800 dark:text-slate-200 text-sm truncate">
                                    {{ auth()->user()->name }}</p>
                                <p class="text-xs text-slate-500 dark:text-slate-400 truncate">
                                    {{ auth()->user()->email }}</p>
                            </div>
                        </div>
                    </div>
                    <ul class="p-2 text-sm font-medium text-slate-600 dark:text-slate-300">
                        <li>
                            <a href="{{ route('profile.edit') }}" wire:navigate
                                class="flex items-center gap-3 px-3 py-2.5 hover:bg-primary/5 hover:text-primary rounded-xl transition-all group">
                                <span
                                    class="icon-[tabler--user] size-4 text-slate-400 dark:text-slate-500 group-hover:text-primary transition-colors"></span>
                                {{ __('My Profile') }}
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center gap-3 px-3 py-2.5 hover:bg-primary/5 hover:text-primary rounded-xl transition-all group">
                                <span
                                    class="icon-[tabler--settings] size-4 text-slate-400 group-hover:text-primary transition-colors"></span>
                                {{ __('Account Settings') }}
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center gap-3 px-3 py-2.5 hover:bg-primary/5 hover:text-primary rounded-xl transition-all group">
                                <span
                                    class="icon-[tabler--credit-card] size-4 text-slate-400 group-hover:text-primary transition-colors"></span>
                                <div class="flex-1 flex justify-between items-center">
                                    <span>{{ __('Billing') }}</span>
                                    <span
                                        class="text-[10px] bg-slate-100 text-slate-500 px-1.5 py-0.5 rounded border border-slate-200">Pro</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="p-2 border-t border-slate-50 bg-slate-50/30">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full flex items-center gap-2 px-3 py-2.5 text-error hover:bg-error/5 hover:text-error rounded-xl transition-colors font-medium">
                                <span class="icon-[tabler--logout] size-4"></span>
                                {{ __('Sign Out') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>