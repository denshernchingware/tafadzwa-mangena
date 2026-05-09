<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center gap-4">
                <a href="{{ route('admin.projects') }}" class="hover:underline">← Back</a>
                <h1 class="text-xl font-bold">Create Project</h1>
            </div>
            <form method="POST" action="{{ route('logout') }}">@csrf<button type="submit" class="bg-blue-700 px-4 py-2 rounded hover:bg-blue-800">Logout</button></form>
        </div>
    </nav>
    <div class="container mx-auto p-6">
        <form method="POST" action="{{ route('admin.projects.store') }}" enctype="multipart/form-data" class="bg-white rounded-lg shadow-md p-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div><label class="block text-sm font-medium text-gray-700 mb-1">Title</label><input type="text" name="title" value="" class="w-full border rounded px-3 py-2"></div>
                <div><label class="block text-sm font-medium text-gray-700 mb-1">Subtitle</label><input type="text" name="subtitle" value="" class="w-full border rounded px-3 py-2"></div>
                <div><label class="block text-sm font-medium text-gray-700 mb-1">Image</label><input type="file" name="image" accept="image/*" class="w-full border rounded px-3 py-2"></div>
                <div class="md:col-span-2"><label class="block text-sm font-medium text-gray-700 mb-1">Description</label><textarea name="description" class="w-full border rounded px-3 py-2" rows="4"></textarea></div>
            </div>
            <div class="flex gap-4 mt-6">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Create</button>
                <a href="{{ route('admin.projects') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
