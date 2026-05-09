@extends('admin.layout')
@section('title', 'Skill Details - Admin')
@section('page-title', 'Skill Details')
@section('content')
<div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase">ID</h3>
            <p class="mt-1 text-lg text-gray-900 dark:text-white">{{ $skill->id }}</p>
        </div>
        <div>
            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase">Skill</h3>
            <p class="mt-1 text-lg text-gray-900 dark:text-white">{{ $skill->skill }}</p>
        </div>
        <div class="md:col-span-2">
            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase">Description</h3>
            <p class="mt-1 text-lg text-gray-900 dark:text-white">{{ $skill->description }}</p>
        </div>
    </div>
    <div class="mt-6 flex gap-4">
        <a href="{{ route('admin.skills.edit', $skill->id) }}" class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700">Edit</a>
        <a href="{{ route('admin.skills') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Back to List</a>
    </div>
</div>
@endsection