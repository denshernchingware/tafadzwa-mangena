<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abouts - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center gap-4">
                <a href="{{ route('admin.mangena') }}" class="hover:underline">← Back</a>
                <h1 class="text-xl font-bold">Abouts</h1>
            </div>
            <form method="POST" action="{{ route('logout') }}">@csrf<button type="submit" class="bg-blue-700 px-4 py-2 rounded hover:bg-blue-800">Logout</button></form>
        </div>
    </nav>
    <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">All Abouts</h2>
            <a href="{{ route('admin.abouts.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Add New</a>
        </div>
        <div class="overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="w-full min-w-[800px]">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description 1</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description 2</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description 3</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($abouts as $about)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 text-sm text-gray-900">{{ $about->id }}</td>
                        <td class="px-4 py-3 text-sm text-gray-600">{{ $about->title }}</td>
                        <td class="px-4 py-3 text-sm text-gray-600 truncate max-w-xs">{{ $about->description1 }}</td>
                        <td class="px-4 py-3 text-sm text-gray-600 truncate max-w-xs">{{ $about->description2 }}</td>
                        <td class="px-4 py-3 text-sm text-gray-600 truncate max-w-xs">{{ $about->description3 }}</td>
                        <td class="px-4 py-3">
                            <div class="flex gap-2">
                                <a href="/admin/abouts/{{ $about->id }}" class="text-blue-600 hover:text-blue-800">View</a>
                                <a href="/admin/abouts/{{ $about->id }}/edit" class="text-yellow-600 hover:text-yellow-800">Edit</a>
                                <form method="POST" action="/admin/abouts/{{ $about->id }}" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
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