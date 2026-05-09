@extends('admin.layout')
@section('title', 'Abouts - Admin')
@section('page-title', 'All Abouts')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white">All Abouts</h2>
    <a href="{{ route('admin.abouts.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Add New</a>
</div>
<div class="overflow-x-auto bg-white dark:bg-gray-800 rounded-lg shadow-md">
    <table class="w-full min-w-[800px]">
        <thead class="bg-gray-50 dark:bg-gray-700">
            <tr>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">ID</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Title</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Description 1</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Description 2</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Description 3</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
            @foreach($abouts as $about)
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                <td class="px-4 py-3 text-sm text-gray-900 dark:text-white">{{ $about->id }}</td>
                <td class="px-4 py-3 text-sm text-gray-600 dark:text-gray-300">{{ $about->title }}</td>
                <td class="px-4 py-3 text-sm text-gray-600 dark:text-gray-300 truncate max-w-xs">{{ $about->description1 }}</td>
                <td class="px-4 py-3 text-sm text-gray-600 dark:text-gray-300 truncate max-w-xs">{{ $about->description2 }}</td>
                <td class="px-4 py-3 text-sm text-gray-600 dark:text-gray-300 truncate max-w-xs">{{ $about->description3 }}</td>
                <td class="px-4 py-3">
                    <div class="flex gap-2">
                        <a href="/admin/abouts/{{ $about->id }}" class="text-blue-600 hover:text-blue-800 dark:text-blue-400">View</a>
                        <a href="/admin/abouts/{{ $about->id }}/edit" class="text-yellow-600 hover:text-yellow-800 dark:text-yellow-400">Edit</a>
                        <form method="POST" action="/admin/abouts/{{ $about->id }}" class="inline">
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