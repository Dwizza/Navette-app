@extends('layouts.app')
@section('content')
<div class="container mx-auto mt-6 flex justify-center">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Inscription</h2>
        <form>
            <div class="mb-4">
                <label class="block text-gray-700">Nom</label>
                <input type="text" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Mot de passe</label>
                <input type="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Rôle</label>
                <div class="flex items-center">
                    <input type="radio" name="role" value="transport_company" class="mr-2">
                    <label class="mr-4">Transport Company</label>
                    <input type="radio" name="role" value="particulier" class="mr-2">
                    <label>Particulier</label>
                </div>
            </div>
            <button class="w-full bg-green-600 text-white py-2 rounded-lg">S'inscrire</button>
        </form>
    </div>
</div>
@endsection