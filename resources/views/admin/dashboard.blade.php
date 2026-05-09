@extends('admin.layout')
@section('title', 'Admin Dashboard')
@section('page-title', 'Dashboard Summary')
@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
    <a href="/admin/projects" class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition">
        <p class="text-gray-500 dark:text-gray-400 text-sm">Projects</p>
        <p class="text-3xl font-bold text-blue-600 dark:text-blue-400">{{ $stats['projects'] }}</p>
    </a>
    <a href="/admin/heroes" class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition">
        <p class="text-gray-500 dark:text-gray-400 text-sm">Heroes</p>
        <p class="text-3xl font-bold text-green-600 dark:text-green-400">{{ $stats['heroes'] }}</p>
    </a>
    <a href="/admin/abouts" class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition">
        <p class="text-gray-500 dark:text-gray-400 text-sm">Abouts</p>
        <p class="text-3xl font-bold text-purple-600 dark:text-purple-400">{{ $stats['abouts'] }}</p>
    </a>
    <a href="/admin/skills" class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition">
        <p class="text-gray-500 dark:text-gray-400 text-sm">Skills</p>
        <p class="text-3xl font-bold text-red-600 dark:text-red-400">{{ $stats['skills'] }}</p>
    </a>
    <a href="/admin/education" class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition">
        <p class="text-gray-500 dark:text-gray-400 text-sm">Education</p>
        <p class="text-3xl font-bold text-yellow-600 dark:text-yellow-400">{{ $stats['education'] }}</p>
    </a>
    <a href="/admin/experiences" class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition">
        <p class="text-gray-500 dark:text-gray-400 text-sm">Experiences</p>
        <p class="text-3xl font-bold text-indigo-600 dark:text-indigo-400">{{ $stats['experiences'] }}</p>
    </a>
    <a href="/admin/contacts" class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition">
        <p class="text-gray-500 dark:text-gray-400 text-sm">Contacts</p>
        <p class="text-3xl font-bold text-pink-600 dark:text-pink-400">{{ $stats['contacts'] }}</p>
    </a>
    <a href="/admin/project-items" class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition">
        <p class="text-gray-500 dark:text-gray-400 text-sm">Project Items</p>
        <p class="text-3xl font-bold text-teal-600 dark:text-teal-400">{{ $stats['projectItems'] }}</p>
    </a>
</div>
@endsection