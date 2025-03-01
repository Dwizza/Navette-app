@extends('layouts.app')
@section('content')
<nav class="bg-green-600 p-4 text-white">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold">Plateforme de Navettes</h1>
        <div class="flex ">
            <a href="#" class="px-4">Accueil</a>
            <a href="#" class="px-4">Offres</a>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" name="submit" class="cursor-pointer">Logout</button>
            </form>
            
        </div>
    </div>
</nav>

{{-- <div class="container mx-auto mt-6">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Liste des Offres de Navettes</h2>
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-2">Ville de Départ</th>
                    <th class="border p-2">Ville d'Arrivée</th>
                    <th class="border p-2">Heure de Départ</th>
                    <th class="border p-2">Heure d'Arrivée</th>
                    <th class="border p-2">Statut</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border p-2">Casablanca</td>
                    <td class="border p-2">Rabat</td>
                    <td class="border p-2">08:00</td>
                    <td class="border p-2">10:00</td>
                    <td class="border p-2 text-green-600">Valide</td>
                </tr>
                <tr>
                    <td class="border p-2">Marrakech</td>
                    <td class="border p-2">Agadir</td>
                    <td class="border p-2">14:00</td>
                    <td class="border p-2">17:30</td>
                    <td class="border p-2 text-red-600">Fermée</td>
                </tr>
            </tbody>
        </table>
    </div>
</div> --}}
<div class="container mx-auto m-12">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Liste des Offres de Navettes</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($voyages as $voyage)
        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:scale-105">
            <img src="https://www.tourmag.com/photo/art/grande/76836533-55389305.jpg?v=1700573972" alt="Image de la navette" class="w-full h-48 object-cover rounded-t-lg mb-4">
            <h3 class="text-xl font-semibold mb-2 text-gray-700">{{ $voyage->departure_city }} - {{ $voyage->arrival_city }}</h3>
            <p class="text-gray-600 mb-2"><strong>Heure de Départ:</strong> {{ $voyage->departure_time }}</p>
            <p class="text-gray-600 mb-2"><strong>Heure d'Arrivée:</strong> {{ $voyage->arrival_time }}</p>
            <p class="{{ $voyage->status == 'valid' ? 'text-green-600' : 'text-red-600' }} font-semibold mb-4">
                <strong>{{ $voyage->status }}</strong> 
            </p>
            <a href="" class="text-blue-500 hover:text-blue-700 font-semibold">Read more</a>
        </div>
        @endforeach
    </div>
</div>
@endsection