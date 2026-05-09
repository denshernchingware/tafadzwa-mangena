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
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white dark:bg-gray-800 text-white fixed h-full shadow-lg z-10">
            <div class="p-4 bg-blue-600">
                <h1 class="text-xl font-bold">Admin Panel</h1>
            </div>
            <nav class="p-4 space-y-2">
                <a href="{{ route('admin.mangena') }}" class="block px-4 py-2 rounded hover:bg-blue-600 {{ request()->is('admin/mangena') ? 'bg-blue-700' : '' }}">Dashboard</a>
                <a href="/admin/projects" class="block px-4 py-2 rounded hover:bg-blue-600 {{ request()->is('admin/projects*') ? 'bg-blue-700' : '' }}">Projects</a>
                <a href="/admin/heroes" class="block px-4 py-2 rounded hover:bg-blue-600 {{ request()->is('admin/heroes*') ? 'bg-blue-700' : '' }}">Heroes</a>
                <a href="/admin/abouts" class="block px-4 py-2 rounded hover:bg-blue-600 {{ request()->is('admin/abouts*') ? 'bg-blue-700' : '' }}">Abouts</a>
                <a href="/admin/skills" class="block px-4 py-2 rounded hover:bg-blue-600 {{ request()->is('admin/skills*') ? 'bg-blue-700' : '' }}">Skills</a>
                <a href="/admin/education" class="block px-4 py-2 rounded hover:bg-blue-600 {{ request()->is('admin/education*') ? 'bg-blue-700' : '' }}">Education</a>
                <a href="/admin/experiences" class="block px-4 py-2 rounded hover:bg-blue-600 {{ request()->is('admin/experiences*') ? 'bg-blue-700' : '' }}">Experiences</a>
                <a href="/admin/contacts" class="block px-4 py-2 rounded hover:bg-blue-600 {{ request()->is('admin/contacts*') ? 'bg-blue-700' : '' }}">Contacts</a>
                <a href="/admin/project-items" class="block px-4 py-2 rounded hover:bg-blue-600 {{ request()->is('admin/project-items*') ? 'bg-blue-700' : '' }}">Project Items</a>
                <a href="/admin/project-details" class="block px-4 py-2 rounded hover:bg-blue-600 {{ request()->is('admin/project-details*') ? 'bg-blue-700' : '' }}">Project Details</a>
            </nav>
            <div class="p-4 border-t border-gray-700">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full bg-red-600 px-4 py-2 rounded hover:bg-red-700">Logout</button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 ml-64">
            <!-- Top Bar -->
            <header class="bg-white dark:bg-gray-800 shadow p-4 flex justify-between items-center sticky top-0 z-10">
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
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                @yield('content')
            </div>
        </main>
    </div>

    <script>
        const toggleBtn = document.getElementById('darkModeToggle');
        toggleBtn.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('darkMode', document.documentElement.classList.contains('dark'));
        });
    </script>
</body>
</html>