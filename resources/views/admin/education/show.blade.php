<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Details - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center gap-4">
                <a href="{{ route('admin.education') }}" class="hover:underline">← Back</a>
                <h1 class="text-xl font-bold">Education Details</h1>
            </div>
            <form method="POST" action="{{ route('logout') }}">@csrf<button type="submit" class="bg-blue-700 px-4 py-2 rounded hover:bg-blue-800">Logout</button></form>
        </div>
    </nav>
    <div class="container mx-auto p-6">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase">ID</h3>
                    <p class="mt-1 text-lg text-gray-900">{{ $education->id }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase">Year From</h3>
                    <p class="mt-1 text-lg text-gray-900">{{ $education->year_from }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase">Year To</h3>
                    <p class="mt-1 text-lg text-gray-900">{{ $education->year_to }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase">Program</h3>
                    <p class="mt-1 text-lg text-gray-900">{{ $education->program }}</p>
                </div>
                <div class="md:col-span-2">
                    <h3 class="text-sm font-medium text-gray-500 uppercase">Institution Name</h3>
                    <p class="mt-1 text-lg text-gray-900">{{ $education->institution_name }}</p>
                </div>
            </div>
            <div class="mt-6 flex gap-4">
                <a href="{{ route('admin.education.edit', $education->id) }}" class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700">Edit</a>
                <a href="{{ route('admin.education') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Back to List</a>
            </div>
        </div>
    </div>
</body>
</html>