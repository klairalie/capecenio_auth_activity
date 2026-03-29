<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md text-center">
        <h2 class="text-2xl font-bold mb-4 text-gray-800">Admin Dashboard</h2>
        <p class="text-sm text-red-600 font-medium mb-4">Only users with the <span class="font-semibold">admin</span> role
            can access this page.</p>
        <p class="text-gray-700 mb-2">Welcome, <span class="font-semibold">{{ Auth::user()->name }}</span>!</p>
        <p class="text-gray-600 mb-6">You are logged in.</p>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded transition-colors duration-200">
                Logout
            </button>
        </form>
    </div>
</body>

</html>
