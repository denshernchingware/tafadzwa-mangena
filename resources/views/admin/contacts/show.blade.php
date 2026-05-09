<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Details - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center gap-4">
                <a href="{{ route('admin.contacts') }}" class="hover:underline">← Back</a>
                <h1 class="text-xl font-bold">Contact Details</h1>
            </div>
            <form method="POST" action="{{ route('logout') }}">@csrf<button type="submit" class="bg-blue-700 px-4 py-2 rounded hover:bg-blue-800">Logout</button></form>
        </div>
    </nav>
    <div class="container mx-auto p-6">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase">ID</h3>
                    <p class="mt-1 text-lg text-gray-900">{{ $contact->id }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase">Email</h3>
                    <p class="mt-1 text-lg text-gray-900">{{ $contact->email }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase">GitHub Link</h3>
                    <p class="mt-1 text-lg text-gray-900">{{ $contact->github_link }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase">LinkedIn Link</h3>
                    <p class="mt-1 text-lg text-gray-900">{{ $contact->linkedin_link }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase">Facebook Link</h3>
                    <p class="mt-1 text-lg text-gray-900">{{ $contact->facebook_link }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase">Phone One</h3>
                    <p class="mt-1 text-lg text-gray-900">{{ $contact->phone_one }}</p>
                </div>
            </div>
            <div class="mt-6 flex gap-4">
                <a href="{{ route('admin.contacts.edit', $contact->id) }}" class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700">Edit</a>
                <a href="{{ route('admin.contacts') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Back to List</a>
            </div>
        </div>
    </div>
</body>
</html>