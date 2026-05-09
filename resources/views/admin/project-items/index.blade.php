<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Items - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center gap-4">
                <a href="{{ route('admin.mangena') }}" class="hover:underline">← Back</a>
                <h1 class="text-xl font-bold">Project Items</h1>
            </div>
            <form method="POST" action="{{ route('logout') }}">@csrf<button type="submit" class="bg-blue-700 px-4 py-2 rounded hover:bg-blue-800">Logout</button></form>
        </div>
    </nav>
    <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">All Project Items</h2>
            <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Add New</button>
        </div>
        <div class="overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="w-full min-w-[700px]">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Image</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Link</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($projectItems as $item)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 text-sm text-gray-900">{{ $item->id }}</td>
                        <td class="px-4 py-3 text-sm text-gray-600">{{ $item->title }}</td>
                        <td class="px-4 py-3 text-sm text-gray-600 truncate max-w-xs">{{ $item->description }}</td>
                        <td class="px-4 py-3 text-sm text-gray-600">{{ $item->image }}</td>
                        <td class="px-4 py-3 text-sm text-gray-600 truncate max-w-xs">{{ $item->link }}</td>
                        <td class="px-4 py-3">
                            <div class="flex gap-2">
                                <a href="{{ route('admin.project-items.show', $item->id) }}" class="text-blue-600 hover:text-blue-800">View</a>
                                <a href="{{ route('admin.project-items.edit', $item->id) }}" class="text-yellow-600 hover:text-yellow-800">Edit</a>
                                <button class="text-red-600 hover:text-red-800">Delete</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>