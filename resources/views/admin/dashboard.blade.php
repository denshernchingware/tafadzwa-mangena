<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Mangena</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Admin Dashboard</h1>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-blue-700 px-4 py-2 rounded hover:bg-blue-800">Logout</button>
            </form>
        </div>
    </nav>
    <div class="container mx-auto p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Dashboard Summary</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <a href="{{ route('admin.projects') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <p class="text-gray-500 text-sm">Projects</p>
                <p class="text-3xl font-bold text-blue-600">{{ $stats['projects'] }}</p>
            </a>
            <a href="{{ route('admin.heroes') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <p class="text-gray-500 text-sm">Heroes</p>
                <p class="text-3xl font-bold text-green-600">{{ $stats['heroes'] }}</p>
            </a>
            <a href="{{ route('admin.abouts') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <p class="text-gray-500 text-sm">Abouts</p>
                <p class="text-3xl font-bold text-purple-600">{{ $stats['abouts'] }}</p>
            </a>
            <a href="{{ route('admin.skills') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <p class="text-gray-500 text-sm">Skills</p>
                <p class="text-3xl font-bold text-red-600">{{ $stats['skills'] }}</p>
            </a>
            <a href="{{ route('admin.education') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <p class="text-gray-500 text-sm">Education</p>
                <p class="text-3xl font-bold text-yellow-600">{{ $stats['education'] }}</p>
            </a>
            <a href="{{ route('admin.experiences') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <p class="text-gray-500 text-sm">Experiences</p>
                <p class="text-3xl font-bold text-indigo-600">{{ $stats['experiences'] }}</p>
            </a>
            <a href="{{ route('admin.contacts') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <p class="text-gray-500 text-sm">Contacts</p>
                <p class="text-3xl font-bold text-pink-600">{{ $stats['contacts'] }}</p>
            </a>
            <a href="{{ route('admin.project-items') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <p class="text-gray-500 text-sm">Project Items</p>
                <p class="text-3xl font-bold text-teal-600">{{ $stats['projectItems'] }}</p>
            </a>
        </div>
    </div>
</body>
</html>