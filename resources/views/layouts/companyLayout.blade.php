<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    @vite('resources/css/app.css')
    {{-- @vite('resources/js/ajax.js') --}}
</head>
<body class="bg-gray-50">
    <nav class="bg-indigo-700 p-6 text-white shadow-xl">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-semibold tracking-tight">
                <a href="/company" class="hover:text-indigo-200 transition duration-300">Plateforme de Navettes</a>
            </h1>
            <div class="space-x-6">
                <a href="/company" class="text-lg hover:text-indigo-200 transition duration-300">Accueil</a>
                <a href="/formannonce" class="text-lg hover:text-indigo-200 transition duration-300">Ajouter un voyage</a>
                <a href="#" class="text-lg hover:text-indigo-200 transition duration-300">Statistiques</a>
                <form action="/logout" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-lg hover:text-indigo-200 transition duration-300 focus:outline-none">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mx-auto py-12">
        @yield('company-content')
    </div>
</body>
</html>