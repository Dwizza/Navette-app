@extends('layouts.app')
@section('content')
<div class="container mx-auto mt-6 flex justify-center">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Connexion</h2>
        @if ($errors->any())
            <div class="bg-red-100 text-red-600 p-4 rounded-lg mb-4">
                <strong>Whoops!</strong> There were some problems with your input.
            </div>
        @endif
        <form method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Mot de passe</label>
                <input type="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <a href="/register" class="text-green-600 ">Register</a>
            <button class="w-full bg-green-600 text-white py-2 rounded-lg" type="submit" name="submit">Se connecter</button>
        </form>
    </div>
</div>
@endsection