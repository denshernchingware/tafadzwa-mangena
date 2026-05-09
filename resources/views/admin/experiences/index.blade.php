@extends('admin.layout')
@section('title', 'Experiences - Admin')
@section('page-title', 'All Experiences')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white">All Experiences</h2>
    <a href="{{ route('admin.experiences.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Add New</a>
</div>
<div class="overflow-x-auto bg-white dark:bg-gray-800 rounded-lg shadow-md">
    <table class="w-full min-w-[700px]">
        <thead class="bg-gray-50 dark:bg-gray-700">
            <tr>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">ID</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Year From</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Year To</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Company Name</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Role</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
            @foreach($experiences as $experience)
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                <td class="px-4 py-3 text-sm text-gray-900 dark:text-white">{{ $experience->id }}</td>
                <td class="px-4 py-3 text-sm text-gray-600 dark:text-gray-300">{{ $experience->year_from }}</td>
                <td class="px-4 py-3 text-sm text-gray-600 dark:text-gray-300">{{ $experience->year_to }}</td>
                <td class="px-4 py-3 text-sm text-gray-600 dark:text-gray-300">{{ $experience->company_name }}</td>
                <td class="px-4 py-3 text-sm text-gray-600 dark:text-gray-300">{{ $experience->role }}</td>
                <td class="px-4 py-3">
                    <div class="flex gap-2">
                        <a href="/admin/experiences/{{ $experience->id }}" class="text-blue-600 hover:text-blue-800 dark:text-blue-400">View</a>
                        <a href="/admin/experiences/{{ $experience->id }}/edit" class="text-yellow-600 hover:text-yellow-800 dark:text-yellow-400">Edit</a>
                        <form method="POST" action="/admin/experiences/{{ $experience->id }}" class="inline">
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