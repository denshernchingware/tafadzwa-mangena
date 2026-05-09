<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Mangena Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Admin Dashboard</h1>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-blue-700 px-4 py-2 rounded hover:bg-blue-800">Logout</button>
            </form>
        </div>
    </nav>

    <div class="container mx-auto p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Welcome to Admin Panel</h2>
        
        <div class="bg-white rounded-lg shadow-md p-6">
            <p class="text-gray-600">You are now logged in as an authenticated user.</p>
        </div>
    </div>
</body>
</html>