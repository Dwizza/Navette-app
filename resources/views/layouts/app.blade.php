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
<body class="bg-gradient-to-r from-blue-50 to-blue-100 h-screen antialiased">

    <div class="flex h-screen">

        <!-- Sidebar -->
        <div class="bg-gradient-to-b from-gray-800 to-gray-900 text-white w-64 py-4 px-3 flex flex-col rounded-r-xl shadow-lg">
            <div class="mb-8">
                <h1 class="text-3xl font-semibold text-center text-blue-300 tracking-wider">Navette App</h1>
            </div>

            <nav class="flex-1">
                <ul>
                    <li class="mb-4">
                        <a href="#" class="block py-3 px-5 hover:bg-blue-700 rounded-xl transition duration-300 font-medium"><i class="fas fa-tachometer-alt mr-3 text-lg"></i><span class="text-sm">Dashboard</span></a>
                    </li>
                    <li class="mb-4">
                        <a href="users" class="block py-3 px-5 hover:bg-blue-700 rounded-xl transition duration-300 font-medium"><i class="fas fa-users mr-3 text-lg"></i><span class="text-sm">Users</span></a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="block py-3 px-5 hover:bg-blue-700 rounded-xl transition duration-300 font-medium"><i class="fas fa-shuttle-van mr-3 text-lg"></i><span class="text-sm">Navettes</span></a>
                    </li>
                    <li class="mb-4">
                        <a href="tags" class="block py-3 px-5 hover:bg-blue-700 rounded-xl transition duration-300 font-medium"><i class="fa-solid fa-tags mr-3 text-lg"></i><span class="text-sm">Tags</span></a>
                    </li>
                    <li class="mb-4">
                        <a href="annonces" class="block py-3 px-5 hover:bg-blue-700 rounded-xl transition duration-300 font-medium"><i class="fa-solid fa-bullhorn mr-3 text-lg"></i><span class="text-sm">Add Annonce</span></a>
                    </li>
                    <li class="mb-4">
                        <a href="roles" class="block py-3 px-5 hover:bg-blue-700 rounded-xl transition duration-300 font-medium"><i class="fa-solid fa-user-tie mr-3 text-lg"></i><span class="text-sm">Add Role</span></a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="block py-3 px-5 hover:bg-blue-700 rounded-xl transition duration-300 font-medium"><i class="fas fa-cogs mr-3 text-lg"></i><span class="text-sm">Settings</span></a>
                    </li>
                </ul>
            </nav>

            <div class="mt-auto">
                <form action="/logout" method="POST">
                    @csrf
                    <button class="block w-full py-3 px-5 bg-red-600 hover:bg-red-700 text-white rounded-xl transition duration-300 font-medium"><i class="fas fa-sign-out-alt mr-3 text-lg"></i><span class="text-sm">Logout</span></button>
                </form>
            </div>
        </div>

        <!-- Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow-md py-4 px-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-semibold text-gray-800">Dashboard</h2>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 p-6 overflow-x-hidden overflow-y-auto">
                @yield('content')
            </main>
        </div>
    </div>

</body>
</div>

</body>
</html>