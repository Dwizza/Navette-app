<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <style>
        .gradient {
          background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
        }
      </style>
</head>
<body>
    <nav class="bg-green-600 p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Plateforme de Navettes</h1>
            <div class="flex ">
                <a href="/company" class="px-4">Accueil</a>
                <a href="/formannonce" class="px-4">Ajouter un voyage</a>
                <a href="#" class="px-4">Analitics</a>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" name="submit" class="cursor-pointer">Logout</button>
                </form>
                
            </div>
        </div>
    </nav>
    @yield('company-content')
</body>
</html>