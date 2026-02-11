<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
    {{-- Alpine.js for dropdown interactions --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
</head>

<body
    class="h-screen overflow-hidden bg-slate-50 dark:bg-slate-900 font-sans antialiased text-slate-800 dark:text-slate-100">

    {{-- ===== DESKTOP SIDEBAR (Fixed left) ===== --}}
    <aside
        class="hidden lg:flex lg:flex-col lg:fixed lg:inset-y-0 lg:left-0 lg:w-72 lg:z-30 border-r border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 overflow-y-auto">
        @include('layouts.app.sidebar')
    </aside>

    {{-- ===== MAIN AREA (offset by sidebar width on desktop) ===== --}}
    <div class="flex flex-col h-screen lg:pl-72">
        {{-- Header (sticky at top of scrollable area) --}}
        <header
            class="sticky top-0 z-20 flex-shrink-0 h-16 bg-white dark:bg-slate-800 border-b border-slate-200 dark:border-slate-700">
            @include('layouts.app.header')
        </header>

        {{-- Scrollable content --}}
        <main class="flex-1 overflow-y-auto p-4 lg:px-48 lg:py-12 bg-slate-100 dark:bg-slate-900">
            {{ $slot }}
        </main>
    </div>

    {{-- ===== MOBILE SIDEBAR ===== --}}
    {{-- Overlay --}}
    <div id="mobile-sidebar-overlay"
        class="fixed inset-0 bg-black/50 z-40 hidden transition-opacity duration-300 opacity-0 lg:hidden"
        onclick="toggleSidebar()"></div>

    {{-- Sidebar drawer --}}
    <aside id="mobile-sidebar"
        class="fixed inset-y-0 left-0 w-72 bg-white dark:bg-slate-800 z-50 transform -translate-x-full transition-transform duration-300 ease-in-out lg:hidden flex flex-col overflow-y-auto">
        @include('layouts.app.sidebar')
    </aside>

    {{-- ===== SCRIPTS ===== --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileSidebar = document.getElementById('mobile-sidebar');
            const mobileSidebarOverlay = document.getElementById('mobile-sidebar-overlay');

            window.toggleSidebar = function () {
                const isOpen = !mobileSidebar.classList.contains('-translate-x-full');

                if (isOpen) {
                    // Close
                    mobileSidebar.classList.add('-translate-x-full');
                    mobileSidebarOverlay.classList.add('opacity-0');
                    setTimeout(() => mobileSidebarOverlay.classList.add('hidden'), 300);
                } else {
                    // Open
                    mobileSidebar.classList.remove('-translate-x-full');
                    mobileSidebarOverlay.classList.remove('hidden');
                    requestAnimationFrame(() => {
                        mobileSidebarOverlay.classList.remove('opacity-0');
                    });
                }
            };

            if (mobileMenuButton) {
                mobileMenuButton.addEventListener('click', function (e) {
                    e.stopPropagation();
                    toggleSidebar();
                });
            }
        });
    </script>
</body>

</html>