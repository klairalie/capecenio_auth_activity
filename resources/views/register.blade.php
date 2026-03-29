<!DOCTYPE html>
<html>

<head>
        <title>Register</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="form-card">
        <h2 class="text-2xl font-semibold text-center mb-4">Create your account</h2>

        @if ($errors->any())
            <ul class="text-red-600 list-disc list-inside mb-4">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="input-field" />
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="input-field" />
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" class="input-field" />
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" name="password_confirmation" class="input-field" />
            </div>
            <div>
                <button type="submit" class="btn-primary">Register</button>
            </div>
        </form>

        <p class="text-center mt-4 text-sm text-gray-600"><a href="{{ route('login.form') }}" class="text-indigo-600 hover:underline">Already have an account? Login</a></p>
    </div>
</body>

</html>