<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Navette App</title>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
  @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-r from-gray-100 to-gray-200 font-sans leading-normal tracking-normal">

<nav class="bg-white shadow-md">
  <div class="container mx-auto px-4 py-3 flex items-center justify-between">
    <div class="flex items-center">
      <a href="/" class="text-xl font-semibold text-gray-800 hover:text-blue-600 transition duration-300">Navette App</a>
    </div>
    <div class="flex items-center space-x-4">
      <a href="/client" class="text-gray-700 hover:text-blue-600 transition duration-300">Accueil</a>
      <a href="/offres" class="text-gray-700 hover:text-blue-600 transition duration-300">Offres</a>
      <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300">
          Logout
        </button>
      </form>
    </div>
  </div>
</nav>

<div class="container mx-auto py-8">
  @yield('content')
</div>

<footer class="bg-gray-800 text-white text-center py-4 mt-8">
  <p>&copy; {{ date('Y') }} Navette App. All rights reserved.</p>
</footer>

<script src="{{ asset('script.js') }}"></script>
</body>
</html>