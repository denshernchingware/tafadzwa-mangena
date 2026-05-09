@extends('admin.layout')
@section('title', 'Edit Project - Admin')
@section('page-title', 'Edit Project')
@section('content')
<form method="POST" action="{{ route('admin.projects.update', $project->id) }}" enctype="multipart/form-data" class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
    @csrf
    @method('PUT')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Title</label>
            <input type="text" name="title" value="{{ $project->title }}" class="w-full border rounded px-3 py-2 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Subtitle</label>
            <input type="text" name="subtitle" value="{{ $project->subtitle }}" class="w-full border rounded px-3 py-2 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Image</label>
            <input type="file" name="image" accept="image/*" class="w-full border rounded px-3 py-2 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
@if($project->image)
    <img src="{{ asset('storage/' . $project->image) }}" class="mt-2 w-32 h-32 object-cover">
@endif
        </div>
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Description</label>
            <textarea name="description" class="w-full border rounded px-3 py-2 dark:bg-gray-700 dark:border-gray-600 dark:text-white" rows="4">{{ $project->description }}</textarea>
        </div>
    </div>
    <div class="flex gap-4 mt-6">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save Changes</button>
        <a href="{{ route('admin.projects') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancel</a>
    </div>
</form>
@endsection