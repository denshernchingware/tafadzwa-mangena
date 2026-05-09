@extends('admin.layout')
@section('title', 'Projects - Admin')
@section('page-title', 'All Projects')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white">All Projects</h2>
    <a href="{{ route('admin.projects.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Add New</a>
</div>
<div class="overflow-x-auto bg-white dark:bg-gray-800 rounded-lg shadow-md">
    <table class="w-full min-w-[600px]">
        <thead class="bg-gray-50 dark:bg-gray-700">
            <tr>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">ID</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Title</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Subtitle</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Description</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Image</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
            @foreach($projects as $project)
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                <td class="px-4 py-3 text-sm text-gray-900 dark:text-white">{{ $project->id }}</td>
                <td class="px-4 py-3 text-sm text-gray-600 dark:text-gray-300">{{ $project->title }}</td>
                <td class="px-4 py-3 text-sm text-gray-600 dark:text-gray-300">{{ $project->subtitle }}</td>
                <td class="px-4 py-3 text-sm text-gray-600 dark:text-gray-300 truncate max-w-xs">{{ $project->description }}</td>
                <td class="px-4 py-3 text-sm text-gray-600 dark:text-gray-300">{{ $project->image }}</td>
                <td class="px-4 py-3">
                    <div class="flex gap-2">
                        <a href="/admin/projects/{{ $project->id }}" class="text-blue-600 hover:text-blue-800 dark:text-blue-400">View</a>
                        <a href="/admin/projects/{{ $project->id }}/edit" class="text-yellow-600 hover:text-yellow-800 dark:text-yellow-400">Edit</a>
                        <form method="POST" action="/admin/projects/{{ $project->id }}" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800 dark:text-red-400" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection