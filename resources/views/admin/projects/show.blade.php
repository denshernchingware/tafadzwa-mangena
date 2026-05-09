@extends('admin.layout')
@section('title', 'View Project - Admin')
@section('page-title', 'Project Details')
@section('content')
<div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
    <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">{{ $project->title }}</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <p class="text-gray-500 dark:text-gray-400 text-sm">ID</p>
            <p class="text-gray-900 dark:text-white">{{ $project->id }}</p>
        </div>
        <div>
            <p class="text-gray-500 dark:text-gray-400 text-sm">Title</p>
            <p class="text-gray-900 dark:text-white">{{ $project->title }}</p>
        </div>
        <div>
            <p class="text-gray-500 dark:text-gray-400 text-sm">Subtitle</p>
            <p class="text-gray-900 dark:text-white">{{ $project->subtitle }}</p>
        </div>
        <div>
            <p class="text-gray-500 dark:text-gray-400 text-sm">Image</p>
            <p class="text-gray-900 dark:text-white">{{ $project->image }}</p>
        </div>
        <div class="md:col-span-2">
            <p class="text-gray-500 dark:text-gray-400 text-sm">Description</p>
            <p class="text-gray-900 dark:text-white">{{ $project->description }}</p>
        </div>
    </div>
    <div class="flex gap-4 mt-6">
        <a href="{{ route('admin.projects.edit', $project->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</a>
        <a href="{{ route('admin.projects') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Back to List</a>
    </div>
</div>
@endsection