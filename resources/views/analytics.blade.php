<x-layouts::app :title="__('Analytics')">
    <div class="flex flex-col gap-6">
        
        <!-- Header -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h1 class="text-2xl font-bold text-slate-800 dark:text-slate-100">{{ __('Analytics Overview') }}</h1>
                <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">{{ __('Monitor your website traffic and performance') }}</p>
            </div>
            <div class="flex items-center gap-2">
                <div class="relative">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">
                        <span class="icon-[tabler--calendar] size-4"></span>
                    </span>
                    <input type="text" class="input input-sm input-bordered pl-9 bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 text-slate-600 dark:text-slate-300 w-48" value="Last 30 Days" readonly>
                </div>
                <button class="btn btn-primary bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white gap-2">
                    <span class="icon-[tabler--download] size-5"></span> {{ __('Export') }}
                </button>
            </div>
        </div>

        <!-- Metric Cards -->
        <div class="card bg-white dark:bg-slate-800 shadow-sm border border-slate-100 dark:border-slate-700">
            <div class="card-body p-0">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 divide-y lg:divide-y-0 lg:divide-x divide-slate-100">
                    
                    <!-- Total Users -->
                    <div class="p-6">
                        <div class="flex items-center gap-3 mb-2">
                             <div class="bg-indigo-50 text-indigo-600 rounded p-1.5">
                                <span class="icon-[tabler--users] size-5"></span>
                            </div>
                            <h3 class="font-semibold text-slate-700 dark:text-slate-200 text-sm">{{ __('Total Users') }}</h3>
                        </div>
                        <p class="text-3xl font-bold text-slate-800 dark:text-slate-100 mb-2">24.5k</p>
                        <div class="flex items-center gap-2 text-xs">
                             <span class="text-emerald-500 font-bold flex items-center gap-0.5">
                                <span class="icon-[tabler--arrow-up] size-3"></span> 25.6%
                            </span>
                            <span class="text-slate-400">EPC: 308.20</span>
                        </div>
                    </div>

                    <!-- Sessions -->
                    <div class="p-6">
                         <div class="flex items-center gap-3 mb-2">
                            <div class="bg-blue-50 text-blue-600 rounded p-1.5">
                                <span class="icon-[tabler--click] size-5"></span>
                            </div>
                            <h3 class="font-semibold text-slate-700 dark:text-slate-200 text-sm">{{ __('Sessions') }}</h3>
                        </div>
                        <p class="text-3xl font-bold text-slate-800 dark:text-slate-100 mb-2">48.2k</p>
                         <div class="flex items-center gap-2 text-xs">
                             <span class="text-red-500 font-bold flex items-center gap-0.5">
                                <span class="icon-[tabler--arrow-down] size-3"></span> 12.5%
                            </span>
                            <span class="text-slate-400">Related Value: 77,359</span>
                        </div>
                    </div>

                    <!-- Avg. Duration -->
                    <div class="p-6">
                         <div class="flex items-center gap-3 mb-2">
                            <div class="bg-emerald-50 text-emerald-600 rounded p-1.5">
                                <span class="icon-[tabler--clock] size-5"></span>
                            </div>
                            <h3 class="font-semibold text-slate-700 dark:text-slate-200 text-sm">{{ __('Avg. Duration') }}</h3>
                        </div>
                        <p class="text-3xl font-bold text-slate-800 dark:text-slate-100 mb-2">4m 32s</p>
                         <div class="flex items-center gap-2 text-xs">
                             <span class="text-emerald-500 font-bold flex items-center gap-0.5">
                                <span class="icon-[tabler--arrow-up] size-3"></span> 5.1%
                            </span>
                            <span class="text-slate-400">Related Value: 77,359</span>
                        </div>
                    </div>

                    <!-- Bounce Rate -->
                    <div class="p-6">
                         <div class="flex items-center gap-3 mb-2">
                            <div class="bg-orange-50 text-orange-600 rounded p-1.5">
                                <span class="icon-[tabler--bounce-right] size-5"></span>
                            </div>
                            <h3 class="font-semibold text-slate-700 dark:text-slate-200 text-sm">{{ __('Bounce Rate') }}</h3>
                        </div>
                        <p class="text-3xl font-bold text-slate-800 dark:text-slate-100 mb-2">42.8%</p>
                         <div class="flex items-center gap-2 text-xs">
                             <span class="text-red-500 font-bold flex items-center gap-0.5">
                                <span class="icon-[tabler--arrow-down] size-3"></span> 2.4%
                            </span>
                            <span class="text-slate-400">Related Value: 13.85</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Traffic Chart Section -->
        <div class="card bg-white dark:bg-slate-800 shadow-sm border border-slate-100 dark:border-slate-700">
            <div class="card-body p-6">
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h3 class="font-bold text-lg text-slate-800 dark:text-slate-100">{{ __('Traffic Overview') }}</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Daily visitors for the last 30 days</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="flex items-center gap-2 text-xs font-medium text-slate-500 dark:text-slate-400">
                            <span class="w-2.5 h-2.5 rounded-full bg-indigo-500"></span> Organic
                        </div>
                        <div class="flex items-center gap-2 text-xs font-medium text-slate-500 dark:text-slate-400">
                            <span class="w-2.5 h-2.5 rounded-full bg-blue-400"></span> Social
                        </div>
                    </div>
                </div>

                <!-- CSS Bar Chart -->
                <div class="h-64 w-full flex items-end justify-between gap-1 sm:gap-2 px-2">
                    @foreach(range(1, 30) as $day)
                        <div class="w-full h-full flex flex-col justify-end gap-1 group relative">
                             <!-- Tooltip -->
                            <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-max px-2 py-1 bg-slate-800 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10">
                                Day {{ $day }}: {{ rand(100, 500) }} visits
                                <div class="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-slate-800"></div>
                            </div>
                            
                            <div class="w-full flex flex-col justify-end gap-0.5 h-[85%] rounded-sm overflow-hidden">
                                <div class="w-full bg-indigo-500 transition-all hover:bg-indigo-600" style="height: {{ rand(20, 50) }}%"></div>
                                <div class="w-full bg-blue-400 transition-all hover:bg-blue-500" style="height: {{ rand(10, 40) }}%"></div>
                            </div>
                            <!-- Show label for every 5th day on mobile, every 2nd on desktop -->
                            <span class="text-center text-[10px] text-slate-400 {{ $day % 5 !== 0 ? 'hidden sm:block' : 'block' }}">
                                {{ $day }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Bottom Section: Top Pages, Devices, Referrals -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            
            <!-- Top Pages Table -->
            <div class="card bg-white dark:bg-slate-800 shadow-sm border border-slate-100 dark:border-slate-700 lg:col-span-2">
                 <div class="card-body p-0">
                    <div class="p-6 border-b border-slate-100 dark:border-slate-700 flex justify-between items-center">
                        <h3 class="font-bold text-lg text-slate-800 dark:text-slate-100">{{ __('Top Pages') }}</h3>
                        <a href="#" class="text-sm text-indigo-600 font-medium hover:underline">View All</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="table w-full">
                            <thead class="bg-slate-50/50 text-slate-500 dark:text-slate-400 font-bold uppercase text-[11px] tracking-wider border-b border-slate-100 dark:border-slate-700">
                                <tr>
                                    <th class="py-3 px-6 text-left">Page URL</th>
                                    <th class="py-3 px-6 text-right">Views</th>
                                    <th class="py-3 px-6 text-right">Unique</th>
                                    <th class="py-3 px-6 text-right">Bounce Rate</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm">
                                @foreach([
                                    ['/home', '12,453', '8,234', '32.4%'],
                                    ['/products', '8,234', '5,123', '45.2%'],
                                    ['/blog/new-features', '6,123', '4,890', '28.7%'],
                                    ['/about-us', '4,567', '3,456', '56.1%'],
                                    ['/contact', '2,345', '1,987', '41.3%'],
                                ] as $page)
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-700 border-b border-slate-50 last:border-none transition-colors">
                                    <td class="px-6 py-3 font-medium text-slate-700 dark:text-slate-200">{{ $page[0] }}</td>
                                    <td class="px-6 py-3 text-right text-slate-600 dark:text-slate-300">{{ $page[1] }}</td>
                                    <td class="px-6 py-3 text-right text-slate-500 dark:text-slate-400">{{ $page[2] }}</td>
                                    <td class="px-6 py-3 text-right">
                                        <span class="px-2 py-0.5 rounded text-xs font-semibold
                                            {{ floatval($page[3]) < 40 ? 'bg-emerald-50 text-emerald-600' : 'bg-amber-50 text-amber-600' }}">
                                            {{ $page[3] }}
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Device & Referrals Column -->
            <div class="flex flex-col gap-6">
                <!-- Device Category -->
                <div class="card bg-white dark:bg-slate-800 shadow-sm border border-slate-100 dark:border-slate-700">
                    <div class="card-body p-6">
                        <h3 class="font-bold text-lg text-slate-800 dark:text-slate-100 mb-6">{{ __('Device Category') }}</h3>
                        
                        <!-- Radial Charts Row -->
                        <div class="flex justify-center gap-6 mb-6">
                             <div class="flex flex-col items-center gap-2">
                                <div class="radial-progress text-indigo-500" style="--value:58; --size:4rem; --thickness: 4px;" role="progressbar">
                                    <span class="text-xs font-bold text-slate-700 dark:text-slate-200">58%</span>
                                </div>
                                <span class="text-xs font-medium text-slate-500 dark:text-slate-400">Mobile</span>
                             </div>
                             <div class="flex flex-col items-center gap-2">
                                <div class="radial-progress text-emerald-500" style="--value:32; --size:4rem; --thickness: 4px;" role="progressbar">
                                    <span class="text-xs font-bold text-slate-700 dark:text-slate-200">32%</span>
                                </div>
                                <span class="text-xs font-medium text-slate-500 dark:text-slate-400">Desktop</span>
                             </div>
                             <div class="flex flex-col items-center gap-2">
                                <div class="radial-progress text-amber-500" style="--value:10; --size:4rem; --thickness: 4px;" role="progressbar">
                                    <span class="text-xs font-bold text-slate-700 dark:text-slate-200">10%</span>
                                </div>
                                <span class="text-xs font-medium text-slate-500 dark:text-slate-400">Tablet</span>
                             </div>
                        </div>
                    </div>
                </div>

                <!-- Referrals -->
                <div class="card bg-white dark:bg-slate-800 shadow-sm border border-slate-100 dark:border-slate-700 flex-1">
                    <div class="card-body p-6">
                        <h3 class="font-bold text-lg text-slate-800 dark:text-slate-100 mb-4">{{ __('Top Referrals') }}</h3>
                        <div class="space-y-4">
                            @foreach([
                                ['Google', 'bg-blue-100 text-blue-600', 'icon-[tabler--brand-google]', '65%'],
                                ['Facebook', 'bg-indigo-100 text-indigo-600', 'icon-[tabler--brand-facebook]', '20%'],
                                ['Twitter', 'bg-sky-100 text-sky-600', 'icon-[tabler--brand-twitter]', '10%'],
                                ['Direct', 'bg-slate-100 text-slate-600 dark:text-slate-300', 'icon-[tabler--link]', '5%'],
                            ] as $ref)
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded {{ $ref[1] }} flex items-center justify-center">
                                    <span class="{{ $ref[2] }} size-4"></span>
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between items-center mb-1">
                                        <span class="font-medium text-slate-700 dark:text-slate-200 text-sm">{{ $ref[0] }}</span>
                                        <span class="text-xs font-bold text-slate-600 dark:text-slate-300">{{ $ref[3] }}</span>
                                    </div>
                                    <div class="w-full bg-slate-100 rounded-full h-1.5">
                                        <div class="h-1.5 rounded-full {{ str_replace('bg-', 'bg-', explode(' ', $ref[1])[0]) }} opacity-80" style="width: {{ $ref[3] }}"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-layouts::app>
