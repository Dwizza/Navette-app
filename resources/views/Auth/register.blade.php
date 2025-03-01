@extends('layouts.app')
@section('content')
<div class="container mx-auto mt-6 flex justify-center">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Inscription</h2>
        @if ($errors->any())
            <div class="bg-red-100 text-red-600 p-4 rounded-lg mb-4">
                <strong>Whoops!</strong> There were some problems with your input.
            </div>
        @endif
        <form method="POST" action="">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Nom</label>
                <input type="text" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Mot de passe</label>
                <input type="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Rôle</label>
                <div class="flex items-center">
                    @foreach($roles as $role)
                        <input type="radio" name="role" value="{{ $role->id }}" class="mr-2">
                        <label class="mr-4">{{ $role->role }}</label>
                    @endforeach
                </div>
            </div>
            <a href="/login" class="text-green-600">Login</a>
            <button type="submit" name="submit" class="w-full bg-green-600 text-white py-2 rounded-lg">S'inscrire</button>
        </form>
    </div>
</div>
@endsection