<aside class="bg-white dark:bg-slate-800 h-screen flex flex-col border-r border-slate-200 dark:border-slate-700">
    <!-- Sidebar Header -->
    <div class="h-16 flex items-center gap-3 px-6 border-b border-slate-100">
        <div class="bg-primary/10 text-slate-800 dark:text-slate-200 p-1.5 rounded-lg">
            <span class="icon-[tabler--box] size-6"></span>
        </div>
        <span class="font-bold text-lg text-slate-800 dark:text-slate-200">AppDash</span>
    </div>

    <!-- Sidebar Content -->
    <div class="flex-1 overflow-y-auto px-4 py-6 scrollbar-thin">
        <ul class="menu w-full gap-1 p-0 text-slate-500 font-medium">

            <!-- Dashboard -->
            <li>
                <a href="{{ route('dashboard') }}"
                    class="{{ request()->routeIs('dashboard') ? 'bg-primary/10 text-primary hover:text-primary/80 hover:bg-primary/15' : 'hover:bg-slate-50 dark:hover:bg-slate-700 hover:text-primary text-slate-800 dark:text-slate-300' }} rounded-lg"
                    wire:navigate>
                    <span class="icon-[tabler--layout-grid] size-5"></span>
                    {{ __('Dashboard') }}
                </a>
            </li>

            <!-- Analytics -->
            <li>
                <a href="{{ route('analytics') }}"
                    class="{{ request()->routeIs('analytics') ? 'bg-primary/10 text-primary hover:text-primary/80 hover:bg-primary/15' : 'hover:bg-slate-50 dark:hover:bg-slate-700 hover:text-primary text-slate-800 dark:text-slate-300' }} rounded-lg"
                    wire:navigate>
                    <span class="icon-[tabler--chart-bar] size-5"></span>
                    {{ __('Analytics') }}
                </a>
            </li>

            <li>
                <a href="{{ route('ecommerce') }}"
                    class="{{ request()->routeIs('ecommerce') ? 'bg-primary/10 text-primary hover:text-primary/80 hover:bg-primary/15' : 'hover:bg-slate-50 dark:hover:bg-slate-700 hover:text-primary text-slate-800 dark:text-slate-300' }} rounded-lg"
                    wire:navigate>
                    <span class="icon-[tabler--shopping-cart] size-5"></span>
                    {{ __('Ecommerce') }}
                </a>
            </li>

            <!-- Users -->
            <li>
                <a href="{{ route('users.index') }}"
                    class="{{ request()->routeIs('users.index') ? 'bg-primary/10 text-primary hover:text-primary/80 hover:bg-primary/15' : 'hover:bg-slate-50 dark:hover:bg-slate-700 hover:text-primary text-slate-800 dark:text-slate-300' }} rounded-lg"
                    wire:navigate>
                    <span class="icon-[tabler--users] size-5"></span>
                    {{ __('Users') }}
                </a>
            </li>

            <!-- PAGES Section -->
            <li class="menu-title mt-6 text-xs font-bold text-slate-400 uppercase tracking-wider px-2">{{ __('Pages') }}
            </li>

            <li>
                <a
                    class="hover:bg-slate-50 dark:hover:bg-slate-700 hover:text-primary rounded-lg text-slate-800 dark:text-slate-300">
                    <span class="icon-[tabler--settings] size-5"></span>
                    {{ __('Account Setting') }}
                </a>
            </li>
            <li>
                <a
                    class="hover:bg-slate-50 dark:hover:bg-slate-700 hover:text-primary rounded-lg text-slate-800 dark:text-slate-300">
                    <span class="icon-[tabler--help-circle] size-5"></span>
                    {{ __('FAQ') }}
                </a>
            </li>
            <li>
                <a
                    class="hover:bg-slate-50 dark:hover:bg-slate-700 hover:text-primary rounded-lg text-slate-800 dark:text-slate-300">
                    <span class="icon-[tabler--currency-dollar] size-5"></span>
                    {{ __('Pricing') }}
                </a>
            </li>
            <li>
                <a
                    class="hover:bg-slate-50 dark:hover:bg-slate-700 hover:text-primary rounded-lg text-slate-800 dark:text-slate-300">
                    <span class="icon-[tabler--box] size-5"></span>
                    {{ __('Misc') }}
                </a>
            </li>

            <!-- FORMS & TABLES Section -->
            <li class="menu-title mt-6 text-xs font-bold text-slate-400 uppercase tracking-wider px-2">
                {{ __('Forms & Tables') }}
            </li>

            <li>
                <a
                    class="hover:bg-slate-50 dark:hover:bg-slate-700 hover:text-primary rounded-lg text-slate-800 dark:text-slate-300">
                    <span class="icon-[tabler--layout-list] size-5"></span>
                    {{ __('Form Layouts') }}
                </a>
            </li>

            <li>
                <a
                    class="hover:bg-slate-50 dark:hover:bg-slate-700 hover:text-primary rounded-lg text-slate-800 dark:text-slate-300">
                    <span class="icon-[tabler--table] size-5"></span>
                    {{ __('DataTables') }}
                </a>
            </li>

            <!-- CHARTS & MAPS Section -->
            <li class="menu-title mt-6 text-xs font-bold text-slate-400 uppercase tracking-wider px-2">
                {{ __('Charts & Maps') }}
            </li>

            <li>
                <a
                    class="hover:bg-slate-50 dark:hover:bg-slate-700 hover:text-primary rounded-lg text-slate-800 dark:text-slate-300">
                    <span class="icon-[tabler--chart-pie] size-5"></span>
                    {{ __('Charts') }}
                </a>
            </li>

            <!-- APPLICATIONS Section -->
            <li class="menu-title mt-6 text-xs font-bold text-slate-400 uppercase tracking-wider px-2">
                {{ __('Applications') }}
            </li>


        </ul>
    </div>

    <!-- Sidebar Footer (Optional Upgrade Banner) -->

</aside>