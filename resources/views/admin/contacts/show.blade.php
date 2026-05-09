@extends('admin.layout')
@section('title', 'Contact Details - Admin')
@section('page-title', 'Contact Details')
@section('content')
<div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase">ID</h3>
            <p class="mt-1 text-lg text-gray-900 dark:text-white">{{ $contact->id }}</p>
        </div>
        <div>
            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase">Email</h3>
            <p class="mt-1 text-lg text-gray-900 dark:text-white">{{ $contact->email }}</p>
        </div>
        <div>
            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase">GitHub Link</h3>
            <p class="mt-1 text-lg text-gray-900 dark:text-white">{{ $contact->github_link }}</p>
        </div>
        <div>
            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase">LinkedIn Link</h3>
            <p class="mt-1 text-lg text-gray-900 dark:text-white">{{ $contact->linkedin_link }}</p>
        </div>
        <div>
            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase">Facebook Link</h3>
            <p class="mt-1 text-lg text-gray-900 dark:text-white">{{ $contact->facebook_link }}</p>
        </div>
        <div>
            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase">Phone One</h3>
            <p class="mt-1 text-lg text-gray-900 dark:text-white">{{ $contact->phone_one }}</p>
        </div>
    </div>
    <div class="mt-6 flex gap-4">
        <a href="{{ route('admin.contacts.edit', $contact->id) }}" class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700">Edit</a>
        <a href="{{ route('admin.contacts') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Back to List</a>
    </div>
</div>
@endsection