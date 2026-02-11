<x-layouts::app :title="__('Dashboard')">
    <div class="flex flex-col gap-6">

        <!-- Stats Cards Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Profit -->
            <div
                class="card bg-white shadow-sm border border-slate-100 hover:shadow-md hover:border-emerald-100 transition-all duration-300 group overflow-hidden relative">
                <div
                    class="absolute -right-6 -top-6 w-24 h-24 bg-gradient-to-br from-emerald-50 to-emerald-100/50 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <div class="card-body p-5 relative">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="w-11 h-11 rounded-xl bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center shadow-lg shadow-emerald-200/50">
                            <span class="icon-[tabler--chart-line] size-5 text-white"></span>
                        </div>
                        <span
                            class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-600 border border-emerald-100">
                            <span class="icon-[tabler--trending-up] size-3.5"></span>
                            +12.5%
                        </span>
                    </div>
                    <p class="text-slate-500 text-xs font-medium uppercase tracking-wider">{{ __('Profit') }}</p>
                    <h3 class="text-3xl font-bold text-slate-800 mt-1">$652K</h3>
                    <!-- Mini Sparkline -->
                    <div class="h-8 mt-3 flex items-end gap-[3px]">
                        <div class="flex-1 bg-emerald-100 rounded-sm transition-all duration-300 group-hover:bg-emerald-200"
                            style="height: 35%"></div>
                        <div class="flex-1 bg-emerald-200 rounded-sm transition-all duration-300 group-hover:bg-emerald-300"
                            style="height: 55%"></div>
                        <div class="flex-1 bg-emerald-100 rounded-sm transition-all duration-300 group-hover:bg-emerald-200"
                            style="height: 40%"></div>
                        <div class="flex-1 bg-emerald-300 rounded-sm transition-all duration-300 group-hover:bg-emerald-400"
                            style="height: 70%"></div>
                        <div class="flex-1 bg-emerald-400 rounded-sm transition-all duration-300 group-hover:bg-emerald-500"
                            style="height: 90%"></div>
                        <div class="flex-1 bg-emerald-200 rounded-sm transition-all duration-300 group-hover:bg-emerald-300"
                            style="height: 55%"></div>
                        <div class="flex-1 bg-emerald-300 rounded-sm transition-all duration-300 group-hover:bg-emerald-400"
                            style="height: 65%"></div>
                        <div class="flex-1 bg-emerald-400 rounded-sm transition-all duration-300 group-hover:bg-emerald-500"
                            style="height: 80%"></div>
                        <div class="flex-1 bg-emerald-200 rounded-sm transition-all duration-300 group-hover:bg-emerald-300"
                            style="height: 50%"></div>
                        <div class="flex-1 bg-emerald-500 rounded-sm transition-all duration-300 group-hover:bg-emerald-600"
                            style="height: 100%"></div>
                    </div>
                </div>
            </div>

            <!-- Sales -->
            <div
                class="card bg-white shadow-sm border border-slate-100 hover:shadow-md hover:border-blue-100 transition-all duration-300 group overflow-hidden relative">
                <div
                    class="absolute -right-6 -top-6 w-24 h-24 bg-gradient-to-br from-blue-50 to-blue-100/50 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <div class="card-body p-5 relative">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="w-11 h-11 rounded-xl bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center shadow-lg shadow-blue-200/50">
                            <span class="icon-[tabler--shopping-cart] size-5 text-white"></span>
                        </div>
                        <span
                            class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-600 border border-blue-100">
                            <span class="icon-[tabler--trending-up] size-3.5"></span>
                            +8.2%
                        </span>
                    </div>
                    <p class="text-slate-500 text-xs font-medium uppercase tracking-wider">{{ __('Sales') }}</p>
                    <h3 class="text-3xl font-bold text-slate-800 mt-1">482K</h3>
                    <div class="flex items-center gap-3 mt-3">
                        <div class="flex-1">
                            <div class="flex justify-between text-xs mb-1.5">
                                <span class="text-slate-400 font-medium">Target</span>
                                <span class="font-semibold text-blue-600">86%</span>
                            </div>
                            <div class="w-full bg-slate-100 rounded-full h-1.5">
                                <div class="bg-gradient-to-r from-blue-400 to-blue-600 h-1.5 rounded-full transition-all duration-700"
                                    style="width: 86%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Transactions -->
            <div
                class="card bg-white shadow-sm border border-slate-100 hover:shadow-md hover:border-violet-100 transition-all duration-300 group overflow-hidden relative">
                <div
                    class="absolute -right-6 -top-6 w-24 h-24 bg-gradient-to-br from-violet-50 to-violet-100/50 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <div class="card-body p-5 relative">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="w-11 h-11 rounded-xl bg-gradient-to-br from-violet-400 to-violet-600 flex items-center justify-center shadow-lg shadow-violet-200/50">
                            <span class="icon-[tabler--credit-card] size-5 text-white"></span>
                        </div>
                        <span
                            class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-600 border border-emerald-100">
                            <span class="icon-[tabler--trending-up] size-3.5"></span>
                            +62%
                        </span>
                    </div>
                    <p class="text-slate-500 text-xs font-medium uppercase tracking-wider">{{ __('Transactions') }}</p>
                    <h3 class="text-3xl font-bold text-slate-800 mt-1">$14,854</h3>
                    <div class="flex items-center gap-2 mt-3">
                        <div class="flex -space-x-1.5">
                            <div
                                class="w-6 h-6 rounded-full bg-violet-100 border-2 border-white flex items-center justify-center text-[9px] font-bold text-violet-600">
                                P</div>
                            <div
                                class="w-6 h-6 rounded-full bg-blue-100 border-2 border-white flex items-center justify-center text-[9px] font-bold text-blue-600">
                                S</div>
                            <div
                                class="w-6 h-6 rounded-full bg-emerald-100 border-2 border-white flex items-center justify-center text-[9px] font-bold text-emerald-600">
                                C</div>
                        </div>
                        <span class="text-xs text-slate-400 font-medium">3 payment methods</span>
                    </div>
                </div>
            </div>

            <!-- Orders -->
            <div
                class="card bg-white shadow-sm border border-slate-100 hover:shadow-md hover:border-amber-100 transition-all duration-300 group overflow-hidden relative">
                <div
                    class="absolute -right-6 -top-6 w-24 h-24 bg-gradient-to-br from-amber-50 to-amber-100/50 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <div class="card-body p-5 relative">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="w-11 h-11 rounded-xl bg-gradient-to-br from-amber-400 to-orange-500 flex items-center justify-center shadow-lg shadow-amber-200/50">
                            <span class="icon-[tabler--box] size-5 text-white"></span>
                        </div>
                        <span
                            class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-red-50 text-red-500 border border-red-100">
                            <span class="icon-[tabler--trending-down] size-3.5"></span>
                            -13.2%
                        </span>
                    </div>
                    <p class="text-slate-500 text-xs font-medium uppercase tracking-wider">{{ __('Orders') }}</p>
                    <h3 class="text-3xl font-bold text-slate-800 mt-1">$1,286</h3>
                    <div class="flex items-center gap-2 mt-3">
                        <div class="flex items-center gap-1">
                            <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                            <span class="text-xs text-slate-500">156 pending</span>
                        </div>
                        <span class="text-slate-200">|</span>
                        <div class="flex items-center gap-1">
                            <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                            <span class="text-xs text-slate-500">89 shipped</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Total Earning -->
            <div class="card bg-white shadow-sm border border-slate-100 col-span-1">
                <div class="card-body p-6">
                    <div class="flex justify-between items-center mb-1">
                        <h3 class="font-bold text-lg text-slate-800">{{ __('Total Earning') }}</h3>
                        <button class="btn btn-primary btn-sm btn-circle text-white"><span
                                class="icon-[tabler--dots-vertical] size-5"></span></button>
                    </div>

                    <div class="mb-6">
                        <div class="flex items-center gap-2">
                            <h2 class="text-3xl font-bold text-slate-800">$24,650</h2>
                            <span class="text-success text-sm font-bold">^ 10%</span>
                        </div>
                        <p class="text-sm text-slate-500">{{ __('Compared to $84.325 last year') }}</p>
                    </div>

                    <div class="space-y-6">
                        <div class="flex items-center gap-4">
                            <div class="bg-white border rounded-lg p-2"><img
                                    src="https://img.logo.dev/zipcar.com?token=pk_test_123&size=32"
                                    class="size-6 object-contain" alt="Zipcar" /></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-slate-800">{{ __('Zipcar') }}</h4>
                                <p class="text-xs text-slate-500">Vuejs, React & HTML</p>
                            </div>
                            <span class="font-bold text-slate-700 text-primary">$24,820.35</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="bg-white border rounded-lg p-2"><img
                                    src="https://img.logo.dev/bitbank.cc?token=pk_test_123&size=32"
                                    class="size-6 object-contain" alt="Bitbank" /></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-slate-800">{{ __('Bitbank') }}</h4>
                                <p class="text-xs text-slate-500">Sketch, Figma & XD</p>
                            </div>
                            <span class="font-bold text-blue-500">$86,350.10</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="bg-white border rounded-lg p-2"><img
                                    src="https://img.logo.dev/aviato.com?token=pk_test_123&size=32"
                                    class="size-6 object-contain" alt="Aviato" /></div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-slate-800">{{ __('Aviato') }}</h4>
                                <p class="text-xs text-slate-500">HTML & Angular</p>
                            </div>
                            <span class="font-bold text-slate-500">$55,699.60</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Revenue -->
            <div class="card bg-white shadow-sm border border-slate-100 col-span-1 lg:col-span-2">
                <div class="card-body p-6">
                    <div class="flex justify-between items-center mb-8">
                        <h3 class="font-bold text-lg text-slate-800">{{ __('Total Revenue') }}</h3>
                        <div class="flex items-center gap-4">
                            <div class="flex items-center gap-1.5 text-xs font-medium text-slate-500"><span
                                    class="w-2.5 h-2.5 rounded-full bg-primary/80"></span> 2024</div>
                            <div class="flex items-center gap-1.5 text-xs font-medium text-slate-500"><span
                                    class="w-2.5 h-2.5 rounded-full bg-info/80"></span> 2023</div>
                            <button class="btn btn-primary btn-sm btn-circle text-white"><span
                                    class="icon-[tabler--dots-vertical] size-5"></span></button>
                        </div>
                    </div>

                    <!-- CSS Chart Placeholder -->
                    <div class="h-64 w-full flex items-end justify-between gap-4 px-4">
                        @foreach(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'] as $month)
                            <div class="w-full h-full flex flex-col justify-end gap-1 group">
                                <div class="w-full flex justify-center gap-1.5 h-[85%] items-end">
                                    <div class="w-3 bg-primary rounded-t-sm transition-all hover:bg-primary/80"
                                        style="height: {{ rand(30, 80) }}%"></div>
                                    <div class="w-3 bg-info rounded-t-sm transition-all hover:bg-info/80"
                                        style="height: {{ rand(20, 60) }}%"></div>
                                </div>
                                <span class="text-center text-xs text-slate-400 mt-2">{{ $month }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Stats Row (Earning Report, Transactions & Order Stats) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- Earning Report -->
            <div class="card bg-white shadow-sm border border-slate-100">
                <div class="card-body p-6">
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h3 class="font-bold text-lg text-slate-800">{{ __('Earning Report') }}</h3>
                            <p class="text-xs text-slate-500 font-medium mt-1">Weekly Earning Overview</p>
                        </div>
                        <button class="btn btn-primary btn-sm btn-circle text-white">
                            <span class="icon-[tabler--dots-vertical] size-5"></span>
                        </button>
                    </div>

                    <div class="space-y-6 mb-8">
                        <!-- Net Profit -->
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded bg-emerald-50 text-emerald-500 flex items-center justify-center">
                                <span class="icon-[tabler--arrow-up-right] size-5"></span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-slate-700 text-sm">{{ __('Net Profit') }}</h4>
                                <p class="text-[11px] text-slate-400 font-medium">12.4k Sales</p>
                            </div>
                            <div class="text-right">
                                <p class="text-sm font-semibold text-slate-600">-$1,619</p>
                                <p class="text-xs text-emerald-500 font-bold flex items-center justify-end gap-1">
                                    <span class="icon-[tabler--chevron-up] size-3"></span> 18.6%
                                </p>
                            </div>
                        </div>

                        <!-- Total Income -->
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded bg-indigo-50 text-indigo-500 flex items-center justify-center">
                                <span class="icon-[tabler--currency-dollar] size-5"></span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-slate-700 text-sm">{{ __('Total Income') }}</h4>
                                <p class="text-[11px] text-slate-400 font-medium">Sales, Affiliation</p>
                            </div>
                            <div class="text-right">
                                <p class="text-sm font-semibold text-slate-600">+$1,260</p>
                                <p class="text-xs text-emerald-500 font-bold flex items-center justify-end gap-1">
                                    <span class="icon-[tabler--chevron-up] size-3"></span> 39.6%
                                </p>
                            </div>
                        </div>

                        <!-- Total Expenses -->
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded bg-amber-50 text-amber-500 flex items-center justify-center">
                                <span class="icon-[tabler--credit-card] size-5"></span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-slate-700 text-sm">{{ __('Total Expenses') }}</h4>
                                <p class="text-[11px] text-slate-400 font-medium">ADVT, Marketing</p>
                            </div>
                            <div class="text-right">
                                <p class="text-sm font-semibold text-slate-600">-$149</p>
                                <p class="text-xs text-emerald-500 font-bold flex items-center justify-end gap-1">
                                    <span class="icon-[tabler--chevron-up] size-3"></span> 52.8%
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Weekly Bar Chart -->
                    <div class="h-24 flex items-end justify-between gap-2 px-1">
                        @foreach(['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'] as $day)
                            <div class="flex flex-col items-center gap-2 w-full group">
                                <div
                                    class="w-full bg-indigo-100 rounded-sm relative h-16 flex items-end justify-center group-hover:bg-indigo-200 transition-colors">
                                    @if($day === 'Fr')
                                        <div class="w-full bg-indigo-500 rounded-sm h-full shadow-lg shadow-indigo-200"></div>
                                    @else
                                        <div class="w-full bg-indigo-100 rounded-sm" style="height: {{ rand(40, 80) }}%"></div>
                                    @endif
                                </div>
                                <span class="text-[10px] uppercase font-bold text-slate-400">{{ $day }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Transactions -->
            <div class="card bg-white shadow-sm border border-slate-100">
                <div class="card-body p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="font-bold text-lg text-slate-800">{{ __('Transactions') }}</h3>
                        <button class="btn btn-primary btn-sm btn-circle text-white">
                            <span class="icon-[tabler--dots-vertical] size-5"></span>
                        </button>
                    </div>

                    <div class="space-y-6">
                        <!-- Credit Card -->
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded bg-emerald-50 text-emerald-500 flex items-center justify-center">
                                <span class="icon-[tabler--credit-card] size-5"></span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-slate-700 text-sm">{{ __('Credit Card') }}</h4>
                                <p class="text-[11px] text-slate-400 font-medium">Digital Ocean</p>
                            </div>
                            <span class="font-bold text-slate-700 text-sm">-$2,820</span>
                        </div>

                        <!-- Paypal -->
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded bg-indigo-50 text-indigo-500 flex items-center justify-center">
                                <span class="icon-[tabler--brand-paypal] size-5"></span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-slate-700 text-sm">{{ __('Paypal') }}</h4>
                                <p class="text-[11px] text-slate-400 font-medium">Received Money</p>
                            </div>
                            <span class="font-bold text-slate-700 text-sm">+$1,260</span>
                        </div>

                        <!-- Mastercard -->
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded bg-rose-50 text-rose-500 flex items-center justify-center">
                                <span class="icon-[tabler--credit-card] size-5"></span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-slate-700 text-sm">{{ __('Mastercard') }}</h4>
                                <p class="text-[11px] text-slate-400 font-medium">Netflix</p>
                            </div>
                            <span class="font-bold text-slate-700 text-sm">-$149</span>
                        </div>

                        <!-- Wallet -->
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded bg-blue-50 text-blue-500 flex items-center justify-center">
                                <span class="icon-[tabler--wallet] size-5"></span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-slate-700 text-sm">{{ __('Wallet') }}</h4>
                                <p class="text-[11px] text-slate-400 font-medium">Mac'D</p>
                            </div>
                            <span class="font-bold text-slate-700 text-sm">-$49</span>
                        </div>

                        <!-- Paypal Refund -->
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded bg-indigo-50 text-indigo-500 flex items-center justify-center">
                                <span class="icon-[tabler--brand-paypal] size-5"></span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-slate-700 text-sm">{{ __('Paypal') }}</h4>
                                <p class="text-[11px] text-slate-400 font-medium">Refund</p>
                            </div>
                            <span class="font-bold text-slate-700 text-sm">-$12,820</span>
                        </div>

                        <!-- Stripe -->
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded bg-amber-50 text-amber-500 flex items-center justify-center">
                                <span class="icon-[tabler--brand-stripe] size-5"></span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-slate-700 text-sm">{{ __('Stripe') }}</h4>
                                <p class="text-[11px] text-slate-400 font-medium">Buy Apple Watch</p>
                            </div>
                            <span class="font-bold text-slate-700 text-sm">-$299</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Statistics -->
            <div class="card bg-white shadow-sm border border-slate-100">
                <div class="card-body p-6">
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h3 class="font-bold text-lg text-slate-800">{{ __('Order Statistics') }}</h3>
                            <p class="text-xs text-slate-500 font-medium mt-1">42.82k Total Sales</p>
                        </div>
                        <button class="btn btn-primary btn-sm btn-circle text-white">
                            <span class="icon-[tabler--dots-vertical] size-5"></span>
                        </button>
                    </div>

                    <div class="flex justify-between items-center mb-8">
                        <div>
                            <h2 class="text-4xl font-bold text-slate-800">8,258</h2>
                            <p class="text-sm text-slate-500 mt-1">Total Orders</p>
                        </div>
                        <!-- Radial Chart -->
                        <div class="radial-progress text-primary font-bold text-sm"
                            style="--value:38; --size:5.5rem; --thickness: 6px;" role="progressbar">
                            <div class="flex flex-col items-center leading-none">
                                <span class="text-lg font-bold text-slate-800">38%</span>
                                <span class="text-[10px] text-slate-400 font-normal uppercase mt-0.5">Weekly</span>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded bg-primary/10 text-primary flex items-center justify-center">
                                <span class="icon-[tabler--device-mobile] size-5"></span>
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between mb-0.5">
                                    <h4 class="font-semibold text-slate-700 text-sm">{{ __('Electronic') }}</h4>
                                    <span class="text-slate-700 font-semibold text-sm">82.5k</span>
                                </div>
                                <p class="text-[11px] text-slate-400 font-medium">Mobile, Earbuds, TV</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded bg-indigo-50 text-indigo-500 flex items-center justify-center">
                                <span class="icon-[tabler--shirt] size-5"></span>
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between mb-0.5">
                                    <h4 class="font-semibold text-slate-700 text-sm">{{ __('Fashion') }}</h4>
                                    <span class="text-slate-700 font-semibold text-sm">23.8k</span>
                                </div>
                                <p class="text-[11px] text-slate-400 font-medium">Shirts, Jeans, Shoes</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded bg-cyan-50 text-cyan-500 flex items-center justify-center">
                                <span class="icon-[tabler--home] size-5"></span>
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between mb-0.5">
                                    <h4 class="font-semibold text-slate-700 text-sm">{{ __('Total Expenses') }}</h4>
                                    <span class="text-slate-700 font-semibold text-sm">849k</span>
                                </div>
                                <p class="text-[11px] text-slate-400 font-medium">ADVT, Marketing</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded bg-slate-100 text-slate-500 flex items-center justify-center">
                                <span class="icon-[tabler--ball-football] size-5"></span>
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between mb-0.5">
                                    <h4 class="font-semibold text-slate-700 text-sm">{{ __('Sports') }}</h4>
                                    <span class="text-slate-700 font-semibold text-sm">10.9k</span>
                                </div>
                                <p class="text-[11px] text-slate-400 font-medium">Football, Cricket Kit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Table Section -->
        <div class="card bg-white shadow-sm border border-slate-100">
            <div class="card-body p-0">
                <!-- Table Header Controls -->
                <div
                    class="p-5 flex flex-col sm:flex-row gap-4 justify-between items-center bg-white rounded-t-xl border-b border-slate-100">
                    <div class="flex items-center gap-2">
                        <span class="text-slate-500 text-sm font-medium">{{ __('Show') }}</span>
                        <select
                            class="select select-bordered select-sm bg-white border-slate-200 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 text-slate-600 w-20">
                            <option>5</option>
                            <option>10</option>
                            <option>20</option>
                        </select>
                        <button
                            class="btn btn-primary btn-sm gap-2 text-white bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 ml-2">
                            <span class="icon-[tabler--plus] size-4"></span> {{ __('Create Invoice') }}
                        </button>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">
                                <span class="icon-[tabler--search] size-4"></span>
                            </span>
                            <input type="text" placeholder="{{ __('Search User') }}"
                                class="input input-sm input-bordered bg-white border-slate-200 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 text-slate-600 pl-9 w-64" />
                        </div>
                        <select
                            class="select select-bordered select-sm bg-white border-slate-200 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 text-slate-600">
                            <option>{{ __('Invoice Status') }}</option>
                            <option>{{ __('Paid') }}</option>
                            <option>{{ __('Pending') }}</option>
                            <option>{{ __('Overdue') }}</option>
                        </select>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <!-- head -->
                        <thead
                            class="bg-gray-50/50 text-slate-500 font-bold uppercase text-[11px] tracking-wider border-b border-slate-100">
                            <tr>
                                <th class="py-4 px-4 w-12 text-center">
                                    <label class="flex items-center justify-center">
                                        <input type="checkbox"
                                            class="checkbox checkbox-sm rounded border-slate-300 checked:border-indigo-600 checked:bg-indigo-600" />
                                    </label>
                                </th>
                                <th class="py-4 px-4">
                                    <div class="flex items-center gap-4 text-slate-600">
                                        <span>#</span>
                                        <span class="h-4 w-px bg-slate-200"></span>
                                    </div>
                                </th>
                                <th class="py-4 px-4 text-slate-600">
                                    <div class="flex items-center gap-4">
                                        <span>{{ __('Status') }}</span>
                                        <span class="h-4 w-px bg-slate-200"></span>
                                    </div>
                                </th>
                                <th class="py-4 px-4 text-slate-600">
                                    <div class="flex items-center gap-4">
                                        {{ __('Client') }}
                                        <span class="h-4 w-px bg-slate-200"></span>
                                    </div>
                                </th>
                                <th class="py-4 px-4 text-slate-600">
                                    <div class="flex items-center gap-4">
                                        {{ __('Total') }}
                                        <span class="h-4 w-px bg-slate-200"></span>
                                    </div>
                                </th>
                                <th class="py-4 px-4 text-slate-600">
                                    <div class="flex items-center gap-4">
                                        {{ __('Issued Date') }}
                                        <span class="h-4 w-px bg-slate-200"></span>
                                    </div>
                                </th>
                                <th class="py-4 px-4 text-slate-600">
                                    <div class="flex items-center gap-4">
                                        {{ __('Balance') }}
                                        <span class="h-4 w-px bg-slate-200"></span>
                                    </div>
                                </th>
                                <th class="py-4 px-4 text-slate-600 text-center">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody class="text-[13px]">
                            <!-- row 1 -->
                            <tr class="hover:bg-slate-50 border-b border-slate-100 group transition-colors">
                                <td class="px-4 text-center">
                                    <label class="flex items-center justify-center">
                                        <input type="checkbox"
                                            class="checkbox checkbox-sm rounded border-slate-300 checked:border-indigo-600 checked:bg-indigo-600" />
                                    </label>
                                </td>
                                <td class="px-4 text-indigo-600 font-medium whitespace-nowrap"><a href="#"
                                        class="hover:underline">#6542</a></td>
                                <td class="px-4">
                                    <div
                                        class="bg-emerald-100/60 text-emerald-600 rounded-full w-7 h-7 flex items-center justify-center">
                                        <span class="icon-[tabler--check] size-4"></span>
                                    </div>
                                </td>
                                <td class="px-4">
                                    <div class="flex items-center gap-3">
                                        <div class="avatar">
                                            <div class="w-8 h-8 rounded-full ring-1 ring-slate-100">
                                                <img src="https://img.daisyui.com/images/profile/demo/2@94.webp"
                                                    alt="Avatar" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="font-semibold text-slate-700 leading-tight">Jordan
                                                Stevenson</span>
                                            <span class="text-[11px] text-slate-400">jordanstevenson10@yahoo.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 text-slate-600 font-medium text-base">$4520</td>
                                <td class="px-4 text-slate-500">22 Jan 2025</td>
                                <td class="px-4">
                                    <span
                                        class="bg-emerald-100/60 text-emerald-600 px-2 py-0.5 rounded text-[11px] font-bold tracking-wide uppercase">Paid</span>
                                </td>
                                <td class="px-4">
                                    <div class="flex items-center justify-center gap-3 text-slate-400">
                                        <button class="hover:text-slate-600 transition-colors" title="Delete"><span
                                                class="icon-[tabler--trash] size-[18px]"></span></button>
                                        <button class="hover:text-indigo-600 transition-colors" title="View"><span
                                                class="icon-[tabler--eye] size-[18px]"></span></button>
                                        <button class="hover:text-slate-600 transition-colors" title="More"><span
                                                class="icon-[tabler--dots-vertical] size-[18px]"></span></button>
                                    </div>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr class="hover:bg-slate-50 border-b border-slate-100 group transition-colors">
                                <td class="px-4 text-center">
                                    <label class="flex items-center justify-center">
                                        <input type="checkbox"
                                            class="checkbox checkbox-sm rounded border-slate-300 checked:border-indigo-600 checked:bg-indigo-600" />
                                    </label>
                                </td>
                                <td class="px-4 text-indigo-600 font-medium whitespace-nowrap"><a href="#"
                                        class="hover:underline">#9473</a></td>
                                <td class="px-4">
                                    <div
                                        class="bg-violet-100/60 text-violet-600 rounded-full w-7 h-7 flex items-center justify-center">
                                        <span class="icon-[tabler--folder] size-4"></span>
                                    </div>
                                </td>
                                <td class="px-4">
                                    <div class="flex items-center gap-3">
                                        <div class="avatar">
                                            <div class="w-8 h-8 rounded-full ring-1 ring-slate-100">
                                                <img src="https://img.daisyui.com/images/profile/demo/3@94.webp"
                                                    alt="Avatar" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="font-semibold text-slate-700 leading-tight">Olivia
                                                Peterson</span>
                                            <span class="text-[11px] text-slate-400">olivia.peterson@example.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 text-slate-600 font-medium text-base">$120</td>
                                <td class="px-4 text-slate-500">25 Jan 2025</td>
                                <td class="px-4 text-slate-500 font-medium">-$205</td>
                                <td class="px-4">
                                    <div class="flex items-center justify-center gap-3 text-slate-400">
                                        <button class="hover:text-slate-600 transition-colors" title="Delete"><span
                                                class="icon-[tabler--trash] size-[18px]"></span></button>
                                        <button class="hover:text-indigo-600 transition-colors" title="View"><span
                                                class="icon-[tabler--eye] size-[18px]"></span></button>
                                        <button class="hover:text-slate-600 transition-colors" title="More"><span
                                                class="icon-[tabler--dots-vertical] size-[18px]"></span></button>
                                    </div>
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr class="hover:bg-slate-50 border-b border-slate-100 group transition-colors">
                                <td class="px-4 text-center">
                                    <label class="flex items-center justify-center">
                                        <input type="checkbox"
                                            class="checkbox checkbox-sm rounded border-slate-300 checked:border-indigo-600 checked:bg-indigo-600" />
                                    </label>
                                </td>
                                <td class="px-4 text-indigo-600 font-medium whitespace-nowrap"><a href="#"
                                        class="hover:underline">#5631</a></td>
                                <td class="px-4">
                                    <div
                                        class="bg-red-100/60 text-red-500 rounded-full w-7 h-7 flex items-center justify-center">
                                        <span class="icon-[tabler--alert-triangle] size-4"></span>
                                    </div>
                                </td>
                                <td class="px-4">
                                    <div class="flex items-center gap-3">
                                        <div class="avatar">
                                            <div class="w-8 h-8 rounded-full ring-1 ring-slate-100">
                                                <img src="https://img.daisyui.com/images/profile/demo/5@94.webp"
                                                    alt="Avatar" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="font-semibold text-slate-700 leading-tight">Liam Johnson</span>
                                            <span class="text-[11px] text-slate-400">liam.johnson@mail.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 text-slate-600 font-medium text-base">$1850</td>
                                <td class="px-4 text-slate-500">01 Feb 2025</td>
                                <td class="px-4">
                                    <span class="text-slate-500 font-medium">-$205</span>
                                </td>
                                <td class="px-4">
                                    <div class="flex items-center justify-center gap-3 text-slate-400">
                                        <button class="hover:text-slate-600 transition-colors" title="Delete"><span
                                                class="icon-[tabler--trash] size-[18px]"></span></button>
                                        <button class="hover:text-indigo-600 transition-colors" title="View"><span
                                                class="icon-[tabler--eye] size-[18px]"></span></button>
                                        <button class="hover:text-slate-600 transition-colors" title="More"><span
                                                class="icon-[tabler--dots-vertical] size-[18px]"></span></button>
                                    </div>
                                </td>
                            </tr>
                            <!-- row 4 -->
                            <tr class="hover:bg-slate-50 border-b border-slate-100 group transition-colors">
                                <td class="px-4 text-center">
                                    <label class="flex items-center justify-center">
                                        <input type="checkbox"
                                            class="checkbox checkbox-sm rounded border-slate-300 checked:border-indigo-600 checked:bg-indigo-600" />
                                    </label>
                                </td>
                                <td class="px-4 text-indigo-600 font-medium whitespace-nowrap"><a href="#"
                                        class="hover:underline">#2571</a></td>
                                <td class="px-4">
                                    <div
                                        class="bg-emerald-100/60 text-emerald-600 rounded-full w-7 h-7 flex items-center justify-center">
                                        <span class="icon-[tabler--check] size-4"></span>
                                    </div>
                                </td>
                                <td class="px-4">
                                    <div class="flex items-center gap-3">
                                        <div class="avatar">
                                            <div class="w-8 h-8 rounded-full ring-1 ring-slate-100">
                                                <img src="https://img.daisyui.com/images/profile/demo/4@94.webp"
                                                    alt="Avatar" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="font-semibold text-slate-700 leading-tight">Sophia Lee</span>
                                            <span class="text-[11px] text-slate-400">sophia.lee@example.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 text-slate-600 font-medium text-base">$755</td>
                                <td class="px-4 text-slate-500">26 Jan 2025</td>
                                <td class="px-4">
                                    <span
                                        class="bg-emerald-100/60 text-emerald-600 px-2 py-0.5 rounded text-[11px] font-bold tracking-wide uppercase">Paid</span>
                                </td>
                                <td class="px-4">
                                    <div class="flex items-center justify-center gap-3 text-slate-400">
                                        <button class="hover:text-slate-600 transition-colors" title="Delete"><span
                                                class="icon-[tabler--trash] size-[18px]"></span></button>
                                        <button class="hover:text-indigo-600 transition-colors" title="View"><span
                                                class="icon-[tabler--eye] size-[18px]"></span></button>
                                        <button class="hover:text-slate-600 transition-colors" title="More"><span
                                                class="icon-[tabler--dots-vertical] size-[18px]"></span></button>
                                    </div>
                                </td>
                            </tr>
                            <!-- row 5 -->
                            <tr class="hover:bg-slate-50 border-b border-slate-100 group transition-colors">
                                <td class="px-4 text-center">
                                    <label class="flex items-center justify-center">
                                        <input type="checkbox"
                                            class="checkbox checkbox-sm rounded border-slate-300 checked:border-indigo-600 checked:bg-indigo-600" />
                                    </label>
                                </td>
                                <td class="px-4 text-indigo-600 font-medium whitespace-nowrap"><a href="#"
                                        class="hover:underline">#9921</a></td>
                                <td class="px-4">
                                    <div
                                        class="bg-amber-100/60 text-amber-500 rounded-full w-7 h-7 flex items-center justify-center">
                                        <span class="icon-[tabler--clock] size-4"></span>
                                    </div>
                                </td>
                                <td class="px-4">
                                    <div class="flex items-center gap-3">
                                        <div class="avatar">
                                            <div class="w-8 h-8 rounded-full ring-1 ring-slate-100">
                                                <img src="https://img.daisyui.com/images/profile/demo/1@94.webp"
                                                    alt="Avatar" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="font-semibold text-slate-700 leading-tight">Ethan Harris</span>
                                            <span class="text-[11px] text-slate-400">ethan.harris@example.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 text-slate-600 font-medium text-base">$430</td>
                                <td class="px-4 text-slate-500">30 Jan 2025</td>
                                <td class="px-4 text-slate-500 font-medium">$666</td>
                                <td class="px-4">
                                    <div class="flex items-center justify-center gap-3 text-slate-400">
                                        <button class="hover:text-slate-600 transition-colors" title="Delete"><span
                                                class="icon-[tabler--trash] size-[18px]"></span></button>
                                        <button class="hover:text-indigo-600 transition-colors" title="View"><span
                                                class="icon-[tabler--eye] size-[18px]"></span></button>
                                        <button class="hover:text-slate-600 transition-colors" title="More"><span
                                                class="icon-[tabler--dots-vertical] size-[18px]"></span></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Footer / Pagination -->
                <div class="p-5 flex flex-col sm:flex-row gap-4 justify-between items-center border-t border-slate-100">
                    <p class="text-slate-400 text-sm">Showing 1 to 5 of 17 entries</p>

                    <div class="join">
                        <button
                            class="join-item btn btn-sm bg-slate-100 border-none text-slate-500 hover:bg-slate-200"><span
                                class="icon-[tabler--chevron-left] size-3"></span></button>
                        <button
                            class="join-item btn btn-sm btn-primary bg-indigo-100 border-none text-indigo-600 hover:bg-indigo-200">1</button>
                        <button
                            class="join-item btn btn-sm bg-slate-50 border-none text-slate-500 hover:bg-slate-200">2</button>
                        <button
                            class="join-item btn btn-sm bg-slate-50 border-none text-slate-500 hover:bg-slate-200">3</button>
                        <button
                            class="join-item btn btn-sm bg-slate-50 border-none text-slate-500 hover:bg-slate-200">4</button>
                        <button
                            class="join-item btn btn-sm bg-slate-50 border-none text-slate-500 hover:bg-slate-200">5</button>
                        <button
                            class="join-item btn btn-sm bg-slate-100 border-none text-slate-500 hover:bg-slate-200"><span
                                class="icon-[tabler--chevron-right] size-3"></span></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-layouts::app>