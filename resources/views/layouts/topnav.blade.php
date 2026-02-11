<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
    {{-- Alpine.js for dropdown interactions --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
</head>

<body class="bg-slate-50 font-sans antialiased">

    {{-- Top Navigation Bar --}}
    <nav class="bg-white border-b border-slate-200 sticky top-0 z-30">
        <div class="w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 justify-between items-center">
                <div class="flex items-center gap-8">
                    <!-- Logo -->
                    <div class="flex items-center gap-2 text-indigo-600">
                        <div class="bg-indigo-600 text-white p-1 rounded-lg">
                            <span class="icon-[tabler--triangle-square-circle] size-6"></span>
                        </div>
                        <span class="font-bold text-lg text-slate-800">eCommerce</span>
                    </div>

                    <!-- Desktop Menu -->
                    <div class="hidden md:flex items-center gap-1">
                        <a href="{{ route('dashboard') }}"
                            class="px-3 py-2 text-sm font-medium text-slate-500 hover:text-slate-700 hover:bg-slate-50 rounded-md flex items-center gap-1.5">
                            <span class="icon-[tabler--layout-dashboard] size-4"></span>
                            Dashboard
                        </a>
                        <!-- Add wire:navigate or proper link to eCommerce dashboard if needed -->
                        <a href="{{ route('ecommerce') }}"
                            class="px-3 py-2 text-sm font-medium text-indigo-600 bg-indigo-50 rounded-md flex items-center gap-1.5">
                            <span class="icon-[tabler--chart-pie] size-4"></span>
                            eCommerce
                        </a>
                        <a href="{{ route('analytics') }}"
                            class="{{ request()->routeIs('analytics') ? 'px-3 py-2 text-sm font-medium text-indigo-600 bg-indigo-50 rounded-md flex items-center gap-1.5' : 'px-3 py-2 text-sm font-medium text-slate-500 hover:text-slate-700 hover:bg-slate-50 rounded-md flex items-center gap-1.5' }}"
                            wire:navigate>
                            <span class="icon-[tabler--chart-bar] size-4"></span>
                            Analytics
                        </a>
                        <a href="#"
                            class="px-3 py-2 text-sm font-medium text-slate-500 hover:text-slate-700 hover:bg-slate-50 rounded-md flex items-center gap-1.5">
                            <span class="icon-[tabler--box] size-4"></span>
                            Products
                            <span class="icon-[tabler--chevron-down] size-3 opacity-50"></span>
                        </a>
                        <a href="#"
                            class="px-3 py-2 text-sm font-medium text-slate-500 hover:text-slate-700 hover:bg-slate-50 rounded-md flex items-center gap-1.5">
                            <span class="icon-[tabler--file-description] size-4"></span>
                            Order
                            <span class="icon-[tabler--chevron-down] size-3 opacity-50"></span>
                        </a>
                        <a href="#"
                            class="px-3 py-2 text-sm font-medium text-slate-500 hover:text-slate-700 hover:bg-slate-50 rounded-md flex items-center gap-1.5">
                            <span class="icon-[tabler--users] size-4"></span>
                            Customer
                            <span class="icon-[tabler--chevron-down] size-3 opacity-50"></span>
                        </a>
                        <a href="#"
                            class="px-3 py-2 text-sm font-medium text-slate-500 hover:text-slate-700 hover:bg-slate-50 rounded-md flex items-center gap-1.5">
                            <span class="icon-[tabler--building-store] size-4"></span>
                            Vendors
                            <span class="icon-[tabler--chevron-down] size-3 opacity-50"></span>
                        </a>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <!-- Search (Icon only on mobile) -->
                    <button class="text-slate-400 hover:text-slate-600">
                        <span class="icon-[tabler--search] size-5"></span>
                    </button>

                    <!-- Notifications -->
                    <button class="text-slate-400 hover:text-slate-600 relative">
                        <span class="icon-[tabler--bell] size-5"></span>
                        <span class="absolute top-0 right-0 size-2 bg-red-500 rounded-full border border-white"></span>
                    </button>

                    <!-- Cart -->
                    <button class="text-slate-400 hover:text-slate-600">
                        <span class="icon-[tabler--shopping-cart] size-5"></span>
                    </button>

                    <!-- Profile -->
                    <div class="flex items-center gap-3 pl-4 border-l border-slate-200">
                        <img src="https://img.daisyui.com/images/profile/demo/1@94.webp" alt="Avatar"
                            class="h-8 w-8 rounded-full ring-2 ring-slate-100" />
                    </div>
                </div>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main>
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="bg-white border-t border-slate-200 mt-auto">
        <div
            class="px-4 sm:px-6 lg:px-8 py-6 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs text-slate-500">
            <p>&copy; 2025 FlyonUI</p>
            <div class="flex gap-6">
                <a href="#" class="hover:text-slate-700">More Templates</a>
                <a href="#" class="hover:text-slate-700">Documentation</a>
                <a href="#" class="hover:text-slate-700">Support</a>
                <a href="#" class="hover:text-slate-700">License</a>
            </div>
        </div>
    </footer>

</body>

</html>