@extends('admin.layout')
@section('title', 'About Details - Admin')
@section('page-title', 'About Details')
@section('content')
<div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase">ID</h3>
            <p class="mt-1 text-lg text-gray-900 dark:text-white">{{ $about->id }}</p>
        </div>
        <div>
            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase">Title</h3>
            <p class="mt-1 text-lg text-gray-900 dark:text-white">{{ $about->title }}</p>
        </div>
        <div>
            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase">Description 1</h3>
            <p class="mt-1 text-lg text-gray-900 dark:text-white">{{ $about->description1 }}</p>
        </div>
        <div>
            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase">Description 2</h3>
            <p class="mt-1 text-lg text-gray-900 dark:text-white">{{ $about->description2 }}</p>
        </div>
        <div>
            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase">Description 3</h3>
            <p class="mt-1 text-lg text-gray-900 dark:text-white">{{ $about->description3 }}</p>
        </div>
    </div>
    <div class="mt-6 flex gap-4">
        <a href="{{ route('admin.abouts.edit', $about->id) }}" class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700">Edit</a>
        <a href="{{ route('admin.abouts') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Back to List</a>
    </div>
</div>
@endsection