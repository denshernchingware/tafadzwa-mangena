<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Details - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center gap-4">
                <a href="{{ route('admin.abouts') }}" class="hover:underline">← Back</a>
                <h1 class="text-xl font-bold">About Details</h1>
            </div>
            <form method="POST" action="{{ route('logout') }}">@csrf<button type="submit" class="bg-blue-700 px-4 py-2 rounded hover:bg-blue-800">Logout</button></form>
        </div>
    </nav>
    <div class="container mx-auto p-6">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase">ID</h3>
                    <p class="mt-1 text-lg text-gray-900">{{ $about->id }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase">Title</h3>
                    <p class="mt-1 text-lg text-gray-900">{{ $about->title }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase">Description 1</h3>
                    <p class="mt-1 text-lg text-gray-900">{{ $about->description1 }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase">Description 2</h3>
                    <p class="mt-1 text-lg text-gray-900">{{ $about->description2 }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase">Description 3</h3>
                    <p class="mt-1 text-lg text-gray-900">{{ $about->description3 }}</p>
                </div>
            </div>
            <div class="mt-6 flex gap-4">
                <a href="{{ route('admin.abouts.edit', $about->id) }}" class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700">Edit</a>
                <a href="{{ route('admin.abouts') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Back to List</a>
            </div>
        </div>
    </div>
</body>
</html>