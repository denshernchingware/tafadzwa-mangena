<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Project - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center gap-4">
                <a href="{{ route('admin.projects') }}" class="hover:underline">← Back</a>
                <h1 class="text-xl font-bold">View Project</h1>
            </div>
        </div>
    </nav>
    <div class="container mx-auto p-6">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-bold mb-4">{{ $project->title }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div><p class="text-gray-500 text-sm">ID</p><p class="text-gray-900">{{ $project->id }}</p></div>
                <div><p class="text-gray-500 text-sm">Title</p><p class="text-gray-900">{{ $project->title }}</p></div>
                <div><p class="text-gray-500 text-sm">Subtitle</p><p class="text-gray-900">{{ $project->subtitle }}</p></div>
                <div><p class="text-gray-500 text-sm">Image</p><p class="text-gray-900">{{ $project->image }}</p></div>
                <div class="md:col-span-2"><p class="text-gray-500 text-sm">Description</p><p class="text-gray-900">{{ $project->description }}</p></div>
            </div>
            <div class="flex gap-4 mt-6">
                <a href="{{ route('admin.projects.edit', $project->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</a>
                <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Delete</button>
            </div>
        </div>
    </div>
</body>
</html>