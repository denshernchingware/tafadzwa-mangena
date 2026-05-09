<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiences - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center gap-4">
                <a href="{{ route('admin.mangena') }}" class="hover:underline">← Back</a>
                <h1 class="text-xl font-bold">Experiences</h1>
            </div>
            <form method="POST" action="{{ route('logout') }}">@csrf<button type="submit" class="bg-blue-700 px-4 py-2 rounded hover:bg-blue-800">Logout</button></form>
        </div>
    </nav>
    <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">All Experiences</h2>
            <a href="{{ route('admin.experiences.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Add New</a>
        </div>
        <div class="overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="w-full min-w-[700px]">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Year From</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Year To</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Company Name</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Role</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($experiences as $experience)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 text-sm text-gray-900">{{ $experience->id }}</td>
                        <td class="px-4 py-3 text-sm text-gray-600">{{ $experience->year_from }}</td>
                        <td class="px-4 py-3 text-sm text-gray-600">{{ $experience->year_to }}</td>
                        <td class="px-4 py-3 text-sm text-gray-600">{{ $experience->company_name }}</td>
                        <td class="px-4 py-3 text-sm text-gray-600">{{ $experience->role }}</td>
                        <td class="px-4 py-3">
                            <div class="flex gap-2">
                                <a href="/admin/experiences/{{ $experience->id }}" class="text-blue-600 hover:text-blue-800">View</a>
                                <a href="/admin/experiences/{{ $experience->id }}/edit" class="text-yellow-600 hover:text-yellow-800">Edit</a>
                                <form method="POST" action="/admin/experiences/{{ $experience->id }}" class="inline">
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