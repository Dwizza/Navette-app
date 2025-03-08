<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-800 h-screen flex items-center justify-center font-sans">
    <div class="container flex justify-center items-center">
        <div class="bg-white rounded-xl shadow-lg p-8 w-full max-w-md">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-6">Login</h2>
            @if ($errors->any())
            <div class="bg-red-200 text-red-800 p-3 rounded mb-4">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif
            <form method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white placeholder-gray-400">
                </div>
                <div>
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline bg-white text-gray-700 placeholder-gray-400">
                </div>
                <button type="submit" class="bg-gray-700 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">
                    Sign In
                </button>
                <div class="text-center mt-4">
                    <a href="/register" class="inline-block text-sm font-bold text-gray-700 hover:text-gray-900">
                        Register
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
