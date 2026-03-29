<!DOCTYPE html>
<html>

<head>
        <title>Login</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="form-card">
        <h2 class="text-2xl font-semibold text-center mb-4">Sign in to your account</h2>

        @if (session('success'))
            <p class="text-green-600 text-center mb-4">{{ session('success') }}</p>
        @endif

        @if ($errors->any())
            <ul class="text-red-600 list-disc list-inside mb-4">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="input-field" />
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" class="input-field" />
            </div>
            <div>
                <button type="submit" class="btn-primary">Login</button>
            </div>
        </form>

        <p class="text-center mt-4 text-sm text-gray-600"><a href="{{ route('register.form') }}" class="text-indigo-600 hover:underline">Create account</a></p>
    </div>
</body>

</html>