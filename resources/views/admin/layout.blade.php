<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin - Mangena')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        if (localStorage.getItem('darkMode') === 'true' || (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        }
    </script>
</head>
<body class="bg-gray-100 dark:bg-gray-900 min-h-screen">
    <!-- Mobile Header -->
    <header class="lg:hidden bg-blue-600 text-white p-4 flex justify-between items-center sticky top-0 z-20">
        <button id="mobileMenuBtn" class="p-2 rounded hover:bg-blue-700">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
        <span class="font-bold">Admin Panel</span>
        <button id="darkModeToggleMobile" class="p-2 rounded hover:bg-blue-700">
            <svg class="w-5 h-5 dark:hidden" fill="currentColor" viewBox="0 0 20 20">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"/>
            </svg>
            <svg class="w-5 h-5 hidden dark:block" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4.657 2.757a1 1 0 010 1.414l-.707.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zm-6.707 3.293a1 1 0 00-1.414 1.414l.707.707a1 1 0 001.414-1.414l-.707-.707zM10 17a1 1 0 01-1-1v-1a1 1 0 112 0v1a1 1 0 01-1 1zM7.05 16.05a1 1 0 011.414 0l.707.707a1 1 0 11-1.414 1.414l-.707-.707a1 1 0 010-1.414zM4 10a1 1 0 001 1h1a1 1 0 100-2H5a1 1 0 00-1 1zm11-4a1 1 0 001 1h1a1 1 0 100-2h-1a1 1 0 00-1 1z"/>
            </svg>
        </button>
    </header>

    <!-- Sidebar Overlay -->
    <div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden lg:hidden"></div>

    <!-- Sidebar -->
    <aside id="sidebar" class="fixed lg:static inset-y-0 left-0 w-64 bg-blue-600 text-white transform -translate-x-full lg:translate-x-0 transition-transform duration-300 z-40 h-full overflow-y-auto">
        <div class="p-4 bg-blue-700 lg:bg-blue-600 flex justify-between items-center">
            <h1 class="text-xl font-bold">Admin Panel</h1>
            <button id="closeSidebarBtn" class="lg:hidden p-2 rounded hover:bg-blue-800">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <nav class="p-4 space-y-1">
            <a href="{{ route('admin.mangena') }}" class="block px-4 py-2 rounded hover:bg-blue-700 {{ request()->is('admin/mangena') ? 'bg-blue-800' : '' }}">Dashboard</a>
            <a href="/admin/projects" class="block px-4 py-2 rounded hover:bg-blue-700 {{ request()->is('admin/projects*') ? 'bg-blue-800' : '' }}">Projects</a>
            <a href="/admin/heroes" class="block px-4 py-2 rounded hover:bg-blue-700 {{ request()->is('admin/heroes*') ? 'bg-blue-800' : '' }}">Heroes</a>
            <a href="/admin/abouts" class="block px-4 py-2 rounded hover:bg-blue-700 {{ request()->is('admin/abouts*') ? 'bg-blue-800' : '' }}">Abouts</a>
            <a href="/admin/skills" class="block px-4 py-2 rounded hover:bg-blue-700 {{ request()->is('admin/skills*') ? 'bg-blue-800' : '' }}">Skills</a>
            <a href="/admin/education" class="block px-4 py-2 rounded hover:bg-blue-700 {{ request()->is('admin/education*') ? 'bg-blue-800' : '' }}">Education</a>
            <a href="/admin/experiences" class="block px-4 py-2 rounded hover:bg-blue-700 {{ request()->is('admin/experiences*') ? 'bg-blue-800' : '' }}">Experiences</a>
            <a href="/admin/contacts" class="block px-4 py-2 rounded hover:bg-blue-700 {{ request()->is('admin/contacts*') ? 'bg-blue-800' : '' }}">Contacts</a>
            <a href="/admin/project-items" class="block px-4 py-2 rounded hover:bg-blue-700 {{ request()->is('admin/project-items*') ? 'bg-blue-800' : '' }}">Project Items</a>
            <a href="/admin/project-details" class="block px-4 py-2 rounded hover:bg-blue-700 {{ request()->is('admin/project-details*') ? 'bg-blue-800' : '' }}">Project Details</a>
        </nav>
        <div class="p-4 border-t border-blue-700">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full bg-red-600 px-4 py-2 rounded hover:bg-red-700">Logout</button>
            </form>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1">
        <!-- Desktop Top Bar -->
        <header class="hidden lg:flex bg-white dark:bg-gray-800 shadow p-4 justify-between items-center sticky top-0 z-10">
            <div class="text-xl font-bold text-gray-800 dark:text-white">
                @yield('page-title', 'Dashboard')
            </div>
            <button id="darkModeToggle" class="p-2 rounded bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white hover:bg-gray-300 dark:hover:bg-gray-600">
                <svg id="sunIcon" class="w-5 h-5 hidden dark:block" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4.657 2.757a1 1 0 010 1.414l-.707.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zm-6.707 3.293a1 1 0 00-1.414 1.414l.707.707a1 1 0 001.414-1.414l-.707-.707zM10 17a1 1 0 01-1-1v-1a1 1 0 112 0v1a1 1 0 01-1 1zM7.05 16.05a1 1 0 011.414 0l.707.707a1 1 0 11-1.414 1.414l-.707-.707a1 1 0 010-1.414zM4 10a1 1 0 001 1h1a1 1 0 100-2H5a1 1 0 00-1 1zm11-4a1 1 0 001 1h1a1 1 0 100-2h-1a1 1 0 00-1 1z"/>
                </svg>
                <svg id="moonIcon" class="w-5 h-5 dark:hidden" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"/>
                </svg>
            </button>
        </header>

        <!-- Content -->
        <div class="p-6">
            @if(session('success'))
                <div class="bg-green-100 dark:bg-green-900 border border-green-400 text-green-700 dark:text-green-300 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
            @yield('content')
        </div>
    </main>

    <script>
        // Sidebar toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const closeSidebarBtn = document.getElementById('closeSidebarBtn');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            sidebarOverlay.classList.remove('hidden');
        }

        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            sidebarOverlay.classList.add('hidden');
        }

        if (mobileMenuBtn) mobileMenuBtn.addEventListener('click', openSidebar);
        if (closeSidebarBtn) closeSidebarBtn.addEventListener('click', closeSidebar);
        if (sidebarOverlay) sidebarOverlay.addEventListener('click', closeSidebar);

        // Dark mode toggle
        const toggleBtn = document.getElementById('darkModeToggle');
        const toggleBtnMobile = document.getElementById('darkModeToggleMobile');

        function toggleDarkMode() {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('darkMode', document.documentElement.classList.contains('dark'));
        }

        if (toggleBtn) toggleBtn.addEventListener('click', toggleDarkMode);
        if (toggleBtnMobile) toggleBtnMobile.addEventListener('click', toggleDarkMode);
    </script>
</body>
</html>