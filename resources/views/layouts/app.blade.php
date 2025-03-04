<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="bg-gray-100 h-screen antialiased">

    <div class="flex h-screen">

        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 py-4 px-3 flex flex-col">
            <div class="mb-8">
                <h1 class="text-2xl font-semibold text-center">Navette App</h1>
            </div>

            <nav class="flex-1">
                <ul>
                    <li class="mb-2">
                        <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded transition duration-300"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded transition duration-300"><i class="fas fa-users mr-2"></i>Users</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded transition duration-300"><i class="fas fa-shuttle-van mr-2"></i>Navettes</a>
                    </li>
                    <li class="mb-2">
                        <a href="tags" class="block py-2 px-4 hover:bg-gray-700 rounded transition duration-300"><i class="fa-solid fa-tags mr-2"></i>Tags</a>
                    </li>
                    <li class="mb-2">
                        <a href="annonces" class="block py-2 px-4 hover:bg-gray-700 rounded transition duration-300"><i class="fa-solid fa-bullhorn mr-2"></i>Add Annonce</a>
                    </li>
                    <li class="mb-2">
                        <a href="roles" class="block py-2 px-4 hover:bg-gray-700 rounded transition duration-300"><i class="fa-solid fa-user-tie mr-2"></i>Add Role</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded transition duration-300"><i class="fas fa-cogs mr-2"></i>Settings</a>
                    </li>
                </ul>
            </nav>

            <div>
              <form action="/logout" method="POST">
                @csrf
                <button class="block py-2 px-4 hover:bg-gray-700 rounded transition duration-300" type="submit"><i class="fas fa-sign-out-alt mr-2"></i>logout</button>
              </form>
            </div>
        </div>

        <!-- Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow py-4 px-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold text-gray-800">Dashboard</h2>
                    <div>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Add New
                        </button>
                    </div>
                </div>
            </header>
  @yield('content')
</div>
</div>

</body>
</html>