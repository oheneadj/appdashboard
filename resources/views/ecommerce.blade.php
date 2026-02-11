<x-layouts::topnav>

    <!-- Hero Section (Blue Background) -->
    <div class="bg-indigo-600 pb-32 pt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 text-white mb-8">
                <div class="flex items-center gap-4">
                    <div class="bg-white dark:bg-slate-800/20 p-3 rounded-xl backdrop-blur-sm">
                        <span class="icon-[tabler--chart-pie] size-8"></span>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold w-full">Dashboard</h1>
                        <p class="text-indigo-100 text-sm">Earning Reports</p>
                    </div>
                </div>

                <div class="flex gap-8 text-center justify-center md:justify-end w-full">
                    <div>
                        <div class="md:text-3xl text-2xl font-bold">$23k</div>
                        <div class="text-indigo-200 text-xs">Sales</div>
                    </div>
                    <div>
                        <div class="md:text-3xl text-2xl font-bold">8.51k</div>
                        <div class="text-indigo-200 text-xs">Customers</div>
                    </div>
                    <div>
                        <div class="md:text-3xl text-2xl font-bold">2.5k</div>
                        <div class="text-indigo-200 text-xs">Products</div>
                    </div>
                    <div>
                        <div class="md:text-3xl text-2xl font-bold">$1.2k</div>
                        <div class="text-indigo-200 text-xs">Revenue</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content (Overlapping Hero) -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-12 pb-12">

        <!-- Top Row Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

            <!-- Order -->
            <div class="card bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] border border-slate-100 dark:border-slate-700/50 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all duration-300 group relative overflow-hidden">
                <div class="absolute top-0 right-0 p-4 opacity-5 group-hover:opacity-10 transition-opacity">
                     <span class="icon-[tabler--shopping-cart] size-24 transform translate-x-4 -translate-y-4 text-slate-900"></span>
                </div>
                <div class="relative z-10">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <p class="text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-wider mb-1">Order</p>
                            <h3 class="text-3xl font-bold text-slate-800 dark:text-slate-100 tracking-tight">276k</h3>
                        </div>
                        <div class="bg-indigo-500 p-2.5 rounded-xl text-white group-hover:bg-indigo-600 group-hover:text-white transition-colors duration-300 shadow-sm group-hover:shadow-indigo-200">
                            <span class="icon-[tabler--shopping-cart] size-6"></span>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="badge-sm text-emerald-600 border-emerald-100 font-bold h-auto">
                            <span class="icon-[tabler--trend-up] text-sm"></span> +12%
                        </span>
                        <span class="text-xs text-slate-400 font-medium">vs last month</span>
                    </div>
                </div>
            </div>

            <!-- Sales -->
            <div class="card bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] border border-slate-100 dark:border-slate-700/50 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all duration-300 group">
                 <div class="flex justify-between items-start mb-4">
                    <div>
                        <p class="text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-wider mb-1">Sales</p>
                        <h3 class="text-3xl font-bold text-slate-800 dark:text-slate-100 tracking-tight">482k</h3>
                    </div>
                     <div class="bg-pink-500 p-2.5 rounded-xl text-white group-hover:bg-pink-600 group-hover:text-white transition-colors duration-300 shadow-sm group-hover:shadow-pink-200">
                        <span class="icon-[tabler--chart-pie] size-6"></span>
                    </div>
                </div>
                <div class="flex items-center">
                     <span class="badge-sm text-emerald-600 border-emerald-100 font-bold h-auto">
                        <span class="icon-[tabler--trend-up] text-sm"></span> +8%
                    </span>
                    <span class="text-xs text-slate-400 font-medium">vs last month</span>
                </div>
            </div>

            <!-- New Visitors -->
            <div class="card bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] border border-slate-100 dark:border-slate-700/50 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all duration-300 group">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <p class="text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-wider mb-1">New Visitors</p>
                         <h3 class="text-3xl font-bold text-slate-800 dark:text-slate-100 tracking-tight">$17,356</h3>
                    </div>
                     <div class="bg-emerald-500 p-2.5 rounded-xl text-white group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300 shadow-sm group-hover:shadow-emerald-200">
                        <span class="icon-[tabler--users] size-6"></span>
                    </div>
                </div>
                 <div class="flex items-center gap-2">
                     <span class="badge-sm text-emerald-600 border-emerald-100 font-bold h-auto">
                        <span class="icon-[tabler--trend-up] text-sm"></span> +8%
                    </span>
                    <span class="text-xs text-slate-400 font-medium">vs last month</span>
                </div>
            </div>

            <!-- Activity -->
            <div class="card bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] border border-slate-100 dark:border-slate-700/50 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all duration-300 group">
                 <div class="flex justify-between items-start mb-4">
                    <div>
                        <p class="text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-wider mb-1">Activity</p>
                        <h3 class="text-3xl font-bold text-slate-800 dark:text-slate-100 tracking-tight">$4,698</h3>
                    </div>
                    <div class="bg-orange-500 p-2.5 rounded-xl text-white group-hover:bg-orange-600 group-hover:text-white transition-colors duration-300 shadow-sm group-hover:shadow-orange-200">
                        <span class="icon-[tabler--activity] size-6"></span>
                    </div>
                </div>
                 <div class="flex items-center gap-2">
                    <span class="badge-sm text-red-600 border-red-100 font-bold h-auto">
                        <span class="icon-[tabler--trend-down] text-sm"></span> -12.4%
                    </span>
                    <span class="text-xs text-slate-400 font-medium">vs last month</span>
                </div>
            </div>

        </div>

        <!-- Middle Row -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
            
            <!-- Sale Country -->
            <div class="card bg-white dark:bg-slate-800 shadow-sm border border-slate-100 dark:border-slate-700 p-6">
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <h3 class="font-bold text-slate-800 dark:text-slate-100">{{ __('Sale Country') }}</h3>
                        <p class="text-xs text-slate-400 mt-1">until your daily purchase target</p>
                    </div>
                    <button class="btn btn-sm btn-circle btn-ghost text-slate-400"><span class="icon-[tabler--dots-vertical] size-4"></span></button>
                </div>
                
                <div class="space-y-4">
                    @foreach([
                        ['US', '$18,520', 'w-[80%]', 'bg-blue-200'],
                        ['IN', '$16,520', 'w-[70%]', 'bg-green-200'],
                        ['CA', '$13,900', 'w-[60%]', 'bg-teal-200'],
                        ['JA', '$10,200', 'w-[50%]', 'bg-slate-200'],
                        ['NZ', '$3,650', 'w-[30%]', 'bg-pink-200'],
                    ] as $country)
                    <div class="flex items-center gap-4">
                        <span class="text-xs font-bold text-slate-400 w-6">{{ $country[0] }}</span>
                        <div class="flex-1">
                            <div class="flex items-center">
                                <div class="{{ $country[3] }} h-6 rounded-r-full text-[10px] font-medium text-slate-600 dark:text-slate-300 flex items-center px-2 {{ $country[2] }}">
                                    {{ $country[1] }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- X-Axis Labels Mock -->
                <div class="flex justify-between text-[10px] text-slate-400 mt-4 pl-10 pr-4">
                    <span>0</span><span>4K</span><span>8K</span><span>12K</span><span>16K</span><span>20K</span>
                </div>
            </div>

            <!-- Payment History -->
            <div class="card bg-white dark:bg-slate-800 shadow-sm border border-slate-100 dark:border-slate-700 p-6">
                 <div class="flex justify-between items-start mb-6">
                    <h3 class="font-bold text-slate-800 dark:text-slate-100">{{ __('Payment History') }}</h3>
                    <button class="btn btn-sm btn-circle btn-ghost text-slate-400"><span class="icon-[tabler--dots-vertical] size-4"></span></button>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="table table-sm w-full">
                        <thead class="text-xs text-slate-400 font-medium border-b border-slate-100 dark:border-slate-700">
                            <tr>
                                <th class="pl-0 pb-2 font-normal">Card</th>
                                <th class="pb-2 font-normal">Date</th>
                                <th class="pr-0 pb-2 font-normal text-right">Spend</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            @foreach([
                                    ['brand-visa', '*4399', 'Credit Card', '05/Jan', '-$2,820', '$10,450'],
                                    ['brand-mastercard', '*9860', 'ATM Card', '24/Feb', '-$1,650', '$8,900'],
                                    ['brand-visa', '*4300', 'Credit Card', '08/Mar', '-$3,250', '$12,800'],
                                    ['brand-mastercard', '*5545', 'Debit Card', '15/Apr', '-$890', '$5,200'],
                                    ['brand-visa', '*4399', 'Credit Card', '28/Apr', '-$1,980', '$7,650'],
                                ] as $payment)
                                <tr class="border-b border-slate-50 last:border-none">
                                    <td class="pl-0 py-3">
                                        <div class="flex items-center gap-3">
                                            <div class="w-9 h-6 bg-slate-50 rounded border border-slate-200 dark:border-slate-700 flex items-center justify-center">
                                                 <span class="icon-[tabler--{{ $payment[0] }}] size-4 text-slate-600 dark:text-slate-300"></span>
                                            </div>
                                            <div>
                                                <div class="font-bold text-slate-700 dark:text-slate-200 text-xs">{{ $payment[1] }}</div>
                                                <div class="text-[10px] text-slate-400">{{ $payment[2] }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3 text-xs text-slate-500 dark:text-slate-400">{{ $payment[3] }}</td>
                                    <td class="pr-0 py-3 text-right">
                                        <div class="font-bold text-slate-700 dark:text-slate-200 text-xs">{{ $payment[4] }}</div>
                                        <div class="text-[10px] text-slate-400">{{ $payment[5] }}</div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Performance -->
            <div class="card bg-white dark:bg-slate-800 shadow-sm border border-slate-100 dark:border-slate-700 p-6">
                 <div class="flex justify-between items-start mb-6">
                    <h3 class="font-bold text-slate-800 dark:text-slate-100">{{ __('Performance') }}</h3>
                    <button class="btn btn-sm btn-circle btn-ghost text-slate-400"><span class="icon-[tabler--dots-vertical] size-4"></span></button>
                </div>
                
                <div class="flex border-b border-slate-100 dark:border-slate-700 mb-6">
                    <button class="pb-2 border-b-2 border-transparent text-slate-400 text-sm font-medium mr-4 hover:text-slate-600 dark:text-slate-300">New Users</button>
                    <button class="pb-2 border-b-2 border-indigo-600 text-indigo-600 text-sm font-medium mr-4">Online Sales</button>
                    <button class="pb-2 border-b-2 border-transparent text-slate-400 text-sm font-medium hover:text-slate-600 dark:text-slate-300">Daily Sales</button>
                </div>

                <div class="flex items-center justify-between mb-4">
                    <div>
                        <div class="text-xs text-slate-400">Digital Product</div>
                        <div class="text-lg font-bold text-slate-800 dark:text-slate-100 flex items-center gap-1">
                            <span class="icon-[tabler--arrow-down] size-3 text-amber-500"></span> 7,589
                        </div>
                    </div>
                    <div>
                        <div class="text-xs text-slate-400">Physical Product</div>
                        <div class="text-lg font-bold text-slate-800 dark:text-slate-100 flex items-center gap-1">
                            <span class="icon-[tabler--arrow-up] size-3 text-emerald-500"></span> 8,365
                        </div>
                    </div>
                </div>

                <div class="bg-slate-50 rounded-lg p-4 mb-4">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                             <div class="text-xs text-slate-400">Physical Product</div>
                             <div class="text-2xl font-bold text-slate-800 dark:text-slate-100">$78,263</div>
                        </div>
                        <span class="badge badge-sm bg-emerald-50 text-emerald-600 border border-emerald-100 gap-1">
                            <span class="icon-[tabler--arrow-up] size-3"></span> 5.6%
                        </span>
                    </div>
                    <!-- Curved Line Chart Mock -->
                    <div class="h-24 relative overflow-hidden">
                        <svg viewBox="0 0 100 40" class="w-full h-full stroke-blue-500 fill-blue-50/50 stroke-2" preserveAspectRatio="none">
                            <path d="M0,35 Q10,35 20,25 T40,30 T60,10 T80,25 T100,10 V40 H0 Z" />
                        </svg>
                    </div>
                     <div class="flex justify-between text-[10px] text-slate-400 mt-2">
                        <span>Jan</span><span>Feb</span><span>Mar</span><span>Apr</span><span>May</span><span>Jun</span><span>Jul</span>
                    </div>
                </div>
                
                <p class="text-center text-xs text-slate-400">18% until your target this month</p>
            </div>

        </div>

        <!-- Bottom Section -->
        <div class="space-y-6">
            <!-- Toolbar & Filters Combined -->
            <div class="bg-white dark:bg-slate-800 rounded-2xl p-5 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] border border-slate-100 dark:border-slate-700 flex flex-col lg:flex-row justify-between items-center gap-5">
                 <!-- Search -->
                 <div class="relative w-full lg:w-80 group">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400 group-focus-within:text-indigo-500 transition-colors">
                        <span class="icon-[tabler--search] size-5"></span>
                    </span>
                    <input type="text" class="input input-sm h-11 w-full pl-11 bg-slate-50/50 border-slate-200 dark:border-slate-700 focus:bg-white dark:bg-slate-800 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 rounded-xl transition-all font-medium text-slate-600 dark:text-slate-300 placeholder:text-slate-400" placeholder="Search products...">
                </div>

                <div class="flex flex-wrap items-center gap-3 w-full lg:w-auto">
                    <!-- Filters -->
                    <div class="join border border-slate-200 dark:border-slate-700 rounded-xl bg-slate-50/50 p-1 gap-1">
                        <select class="select select-sm h-9 border-none bg-transparent focus:bg-white dark:bg-slate-800 focus:shadow-sm focus:ring-0 text-slate-600 dark:text-slate-300 font-medium rounded-lg transition-all min-h-0 pl-3 pr-8 w-28 text-xs">
                            <option disabled selected>Status</option>
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                        <div class="w-px bg-slate-200 my-1"></div>
                         <select class="select select-sm h-9 border-none bg-transparent focus:bg-white dark:bg-slate-800 focus:shadow-sm focus:ring-0 text-slate-600 dark:text-slate-300 font-medium rounded-lg transition-all min-h-0 pl-3 pr-8 w-32 text-xs">
                            <option disabled selected>Category</option>
                            <option>Electronics</option>
                            <option>Household</option>
                             <option>Accessories</option>
                        </select>
                    </div>
                    
                     <!-- Actions -->
                    <div class="flex items-center gap-3 ml-auto lg:ml-4">
                        <button class="btn btn-sm h-11 bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700 hover:bg-indigo-50 hover:text-indigo-600 hover:border-indigo-200 gap-2 normal-case font-semibold rounded-xl shadow-sm hover:shadow transition-all px-5">
                            <span class="icon-[tabler--upload] size-4"></span> Export
                        </button>
                        <button class="btn btn-sm h-11 bg-gradient-to-r from-indigo-600 to-violet-600 text-white border-0 hover:from-indigo-700 hover:to-violet-700 gap-2 normal-case font-semibold rounded-xl shadow-lg shadow-indigo-500/20 hover:shadow-indigo-500/30 hover:scale-[1.02] transition-all px-6">
                             <span class="icon-[tabler--plus] size-4"></span> <span class="hidden sm:inline">Add Product</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Table -->
            <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] border border-slate-100 dark:border-slate-700/50 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="table w-full align-middle">
                        <thead class="bg-slate-50/50 border-b border-slate-100 dark:border-slate-700">
                            <tr>
                                <th class="w-12 text-center">
                                    <input type="checkbox" class="checkbox checkbox-xs rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                                </th>
                                <th class="text-xs font-bold text-slate-400 uppercase tracking-wider py-4">Product</th>
                                <th class="text-xs font-bold text-slate-400 uppercase tracking-wider py-4">Category</th>
                                <th class="text-xs font-bold text-slate-400 uppercase tracking-wider py-4">Status</th>
                                <th class="text-xs font-bold text-slate-400 uppercase tracking-wider py-4">SKU</th>
                                <th class="text-xs font-bold text-slate-400 uppercase tracking-wider py-4">Price</th>
                                <th class="text-xs font-bold text-slate-400 uppercase tracking-wider py-4">Qty</th>
                                <th class="text-xs font-bold text-slate-400 uppercase tracking-wider py-4">Availability</th>
                                <th class="text-right text-xs font-bold text-slate-400 uppercase tracking-wider py-4 pr-6">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                             <!-- Row 1 -->
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-700/80 transition-colors group">
                                <th class="text-center">
                                     <input type="checkbox" class="checkbox checkbox-xs rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                                </th>
                                <td class="py-3">
                                    <div class="flex items-center gap-4">
                                        <div class="avatar rounded-xl bg-slate-50 p-2 shadow-sm border border-slate-100 dark:border-slate-700">
                                            <div class="w-10 h-10">
                                                <img src="https://img.daisyui.com/images/profile/demo/2@94.webp" alt="iPhone 14 Pro" class="rounded-lg"/>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-bold text-slate-700 dark:text-slate-200 text-[15px] group-hover:text-indigo-600 transition-colors">iPhone 14 Pro</div>
                                            <div class="text-xs text-slate-400 max-w-[200px] truncate">Super Retina XDR display, Dynamic Island</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <div class="bg-red-50 text-red-500 p-1.5 rounded-full">
                                            <span class="icon-[tabler--device-mobile] size-3.5"></span>
                                        </div>
                                        <span class="text-slate-600 dark:text-slate-300 font-medium text-sm">Electronics</span>
                                    </div>
                                </td>
                                <td>
                                    <input type="checkbox" class="toggle toggle-sm toggle-primary" checked />
                                </td>
                                <td class="text-slate-500 dark:text-slate-400 font-mono text-xs">SKU-19472</td>
                                <td class="text-slate-700 dark:text-slate-200 font-bold">$999.00</td>
                                <td class="text-slate-600 dark:text-slate-300 font-medium">665</td>
                                <td>
                                    <span class="badge badge-sm bg-red-50 text-red-600 border-red-100 font-semibold px-2.5 py-0.5">Inactive</span>
                                </td>
                                <td class="text-right pr-6">
                                    <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button class="btn btn-sm btn-square bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 hover:text-indigo-600 hover:border-indigo-200 hover:bg-indigo-50 shadow-sm rounded-lg transition-all"><span class="icon-[tabler--pencil] size-4"></span></button>
                                        <button class="btn btn-sm btn-square bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 hover:text-red-600 hover:border-red-200 hover:bg-red-50 shadow-sm rounded-lg transition-all"><span class="icon-[tabler--trash] size-4"></span></button>
                                    </div>
                                </td>
                            </tr>
                            
                             <!-- Row 2 -->
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-700/80 transition-colors group">
                                <th class="text-center">
                                     <input type="checkbox" class="checkbox checkbox-xs rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                                </th>
                                <td class="py-3">
                                    <div class="flex items-center gap-4">
                                        <div class="avatar rounded-xl bg-slate-50 p-2 shadow-sm border border-slate-100 dark:border-slate-700">
                                            <div class="w-10 h-10 flex items-center justify-center">
                                                <span class="icon-[tabler--device-speaker] size-6 text-slate-500 dark:text-slate-400"></span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-bold text-slate-700 dark:text-slate-200 text-[15px] group-hover:text-indigo-600 transition-colors">Echo Dot (4th Gen)</div>
                                            <div class="text-xs text-slate-400 max-w-[200px] truncate">Smart speaker with Alexa</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <div class="bg-red-50 text-red-500 p-1.5 rounded-full">
                                            <span class="icon-[tabler--device-mobile] size-3.5"></span>
                                        </div>
                                        <span class="text-slate-600 dark:text-slate-300 font-medium text-sm">Electronics</span>
                                    </div>
                                </td>
                                <td>
                                    <input type="checkbox" class="toggle toggle-sm toggle-primary" />
                                </td>
                                <td class="text-slate-500 dark:text-slate-400 font-mono text-xs">SKU-72836</td>
                                <td class="text-slate-700 dark:text-slate-200 font-bold">$25.50</td>
                                <td class="text-slate-600 dark:text-slate-300 font-medium">827</td>
                                <td>
                                    <span class="badge badge-sm bg-emerald-50 text-emerald-600 border-emerald-100 font-semibold px-2.5 py-0.5">Published</span>
                                </td>
                                <td class="text-right pr-6">
                                    <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button class="btn btn-sm btn-square bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 hover:text-indigo-600 hover:border-indigo-200 hover:bg-indigo-50 shadow-sm rounded-lg transition-all"><span class="icon-[tabler--pencil] size-4"></span></button>
                                        <button class="btn btn-sm btn-square bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 hover:text-red-600 hover:border-red-200 hover:bg-red-50 shadow-sm rounded-lg transition-all"><span class="icon-[tabler--trash] size-4"></span></button>
                                    </div>
                                </td>
                            </tr>

                             <!-- Row 3 -->
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-700/80 transition-colors group">
                                <th class="text-center">
                                     <input type="checkbox" class="checkbox checkbox-xs rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                                </th>
                                <td class="py-3">
                                    <div class="flex items-center gap-4">
                                        <div class="avatar rounded-xl bg-slate-50 p-2 shadow-sm border border-slate-100 dark:border-slate-700">
                                            <div class="w-10 h-10 flex items-center justify-center">
                                                 <span class="icon-[tabler--clock] size-6 text-slate-500 dark:text-slate-400"></span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-bold text-slate-700 dark:text-slate-200 text-[15px] group-hover:text-indigo-600 transition-colors">Dohioue Wall Clock</div>
                                            <div class="text-xs text-slate-400 max-w-[200px] truncate">Modern 10 Inch Battery Operated</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <div class="bg-amber-50 text-amber-500 p-1.5 rounded-full">
                                            <span class="icon-[tabler--home] size-3.5"></span>
                                        </div>
                                        <span class="text-slate-600 dark:text-slate-300 font-medium text-sm">Household</span>
                                    </div>
                                </td>
                                <td>
                                    <input type="checkbox" class="toggle toggle-sm toggle-primary" checked />
                                </td>
                                <td class="text-slate-500 dark:text-slate-400 font-mono text-xs">SKU-29540</td>
                                <td class="text-slate-700 dark:text-slate-200 font-bold">$16.34</td>
                                <td class="text-slate-600 dark:text-slate-300 font-medium">804</td>
                                <td>
                                    <span class="badge badge-sm bg-emerald-50 text-emerald-600 border-emerald-100 font-semibold px-2.5 py-0.5">Published</span>
                                </td>
                                <td class="text-right pr-6">
                                    <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button class="btn btn-sm btn-square bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 hover:text-indigo-600 hover:border-indigo-200 hover:bg-indigo-50 shadow-sm rounded-lg transition-all"><span class="icon-[tabler--pencil] size-4"></span></button>
                                        <button class="btn btn-sm btn-square bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 hover:text-red-600 hover:border-red-200 hover:bg-red-50 shadow-sm rounded-lg transition-all"><span class="icon-[tabler--trash] size-4"></span></button>
                                    </div>
                                </td>
                            </tr>
                            
                             <!-- Row 4 -->
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-700/80 transition-colors group">
                                <th class="text-center">
                                     <input type="checkbox" class="checkbox checkbox-xs rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                                </th>
                                <td class="py-3">
                                    <div class="flex items-center gap-4">
                                        <div class="avatar rounded-xl bg-slate-50 p-2 shadow-sm border border-slate-100 dark:border-slate-700">
                                            <div class="w-10 h-10 flex items-center justify-center">
                                                <span class="icon-[tabler--shoe] size-6 text-slate-500 dark:text-slate-400"></span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-bold text-slate-700 dark:text-slate-200 text-[15px] group-hover:text-indigo-600 transition-colors">INZCOU Running Shoes</div>
                                            <div class="text-xs text-slate-400 max-w-[200px] truncate">Lightweight Tennis Shoes Non Slip</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <div class="bg-emerald-50 text-emerald-500 p-1.5 rounded-full">
                                            <span class="icon-[tabler--walk] size-3.5"></span>
                                        </div>
                                        <span class="text-slate-600 dark:text-slate-300 font-medium text-sm">Shoes</span>
                                    </div>
                                </td>
                                <td>
                                    <input type="checkbox" class="toggle toggle-sm toggle-primary" checked />
                                </td>
                                <td class="text-slate-500 dark:text-slate-400 font-mono text-xs">SKU-49402</td>
                                <td class="text-slate-700 dark:text-slate-200 font-bold">$36.98</td>
                                <td class="text-slate-600 dark:text-slate-300 font-medium">528</td>
                                <td>
                                    <span class="badge badge-sm bg-amber-50 text-amber-600 border-amber-100 font-semibold px-2.5 py-0.5">Scheduled</span>
                                </td>
                                <td class="text-right pr-6">
                                    <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button class="btn btn-sm btn-square bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 hover:text-indigo-600 hover:border-indigo-200 hover:bg-indigo-50 shadow-sm rounded-lg transition-all"><span class="icon-[tabler--pencil] size-4"></span></button>
                                        <button class="btn btn-sm btn-square bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 hover:text-red-600 hover:border-red-200 hover:bg-red-50 shadow-sm rounded-lg transition-all"><span class="icon-[tabler--trash] size-4"></span></button>
                                    </div>
                                </td>
                            </tr>
                             <!-- Row 5 -->
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-700/80 transition-colors group">
                                <th class="text-center">
                                     <input type="checkbox" class="checkbox checkbox-xs rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                                </th>
                                <td class="py-3">
                                    <div class="flex items-center gap-4">
                                        <div class="avatar rounded-xl bg-slate-50 p-2 shadow-sm border border-slate-100 dark:border-slate-700">
                                            <div class="w-10 h-10 flex items-center justify-center">
                                                 <span class="icon-[tabler--device-watch] size-6 text-slate-500 dark:text-slate-400"></span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-bold text-slate-700 dark:text-slate-200 text-[15px] group-hover:text-indigo-600 transition-colors">Apple Watch Series 7</div>
                                            <div class="text-xs text-slate-400 max-w-[200px] truncate">Starlight Aluminum Case with Sport Band</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <div class="bg-slate-100 text-slate-500 dark:text-slate-400 p-1.5 rounded-full">
                                            <span class="icon-[tabler--device-watch] size-3.5"></span>
                                        </div>
                                        <span class="text-slate-600 dark:text-slate-300 font-medium text-sm">Accessories</span>
                                    </div>
                                </td>
                                <td>
                                    <input type="checkbox" class="toggle toggle-sm toggle-primary" checked />
                                </td>
                                <td class="text-slate-500 dark:text-slate-400 font-mono text-xs">SKU-46658</td>
                                <td class="text-slate-700 dark:text-slate-200 font-bold">$799.00</td>
                                <td class="text-slate-600 dark:text-slate-300 font-medium">851</td>
                                <td>
                                    <span class="badge badge-sm bg-amber-50 text-amber-600 border-amber-100 font-semibold px-2.5 py-0.5">Scheduled</span>
                                </td>
                                <td class="text-right pr-6">
                                    <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button class="btn btn-sm btn-square bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 hover:text-indigo-600 hover:border-indigo-200 hover:bg-indigo-50 shadow-sm rounded-lg transition-all"><span class="icon-[tabler--pencil] size-4"></span></button>
                                        <button class="btn btn-sm btn-square bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 hover:text-red-600 hover:border-red-200 hover:bg-red-50 shadow-sm rounded-lg transition-all"><span class="icon-[tabler--trash] size-4"></span></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                 <div class="p-4 border-t border-slate-100 dark:border-slate-700 flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="text-xs text-slate-500 dark:text-slate-400 font-medium">Showing 1 to 5 of <span class="text-slate-800 dark:text-slate-100 font-bold">100</span> entries</div>
                    <div class="join shadow-sm border border-slate-200 dark:border-slate-700 rounded-lg overflow-hidden">
                        <button class="join-item btn btn-sm bg-white dark:bg-slate-800 border-none text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700 hover:text-slate-600 dark:text-slate-300"><span class="icon-[tabler--chevron-left] size-4"></span></button>
                        <button class="join-item btn btn-sm bg-indigo-50 border-none text-indigo-600 font-bold hover:bg-indigo-100">1</button>
                        <button class="join-item btn btn-sm bg-white dark:bg-slate-800 border-none text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700 hover:text-slate-700 dark:text-slate-200">2</button>
                         <button class="join-item btn btn-sm bg-white dark:bg-slate-800 border-none text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700 hover:text-slate-700 dark:text-slate-200">3</button>
                        <button class="join-item btn btn-sm bg-white dark:bg-slate-800 border-none text-slate-400 hover:bg-white dark:bg-slate-800 cursor-default">...</button>
                        <button class="join-item btn btn-sm bg-white dark:bg-slate-800 border-none text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700 hover:text-slate-700 dark:text-slate-200">20</button>
                        <button class="join-item btn btn-sm bg-white dark:bg-slate-800 border-none text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700 hover:text-slate-600 dark:text-slate-300"><span class="icon-[tabler--chevron-right] size-4"></span></button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</x-layouts::topnav>