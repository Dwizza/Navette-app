@extends('layouts.app')
@section('content')
<nav class="bg-green-600 p-4 text-white">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold">Plateforme de Navettes</h1>
        <div>
            <a href="#" class="px-4">Accueil</a>
            <a href="#" class="px-4">Offres</a>
            <a href="#" class="px-4">Logout</a>
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
<div class="container mx-auto mt-6">
    <h2 class="text-xl font-semibold mb-4">Liste des Offres de Navettes</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($voyages as $voyage)
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold mb-2">{{ $voyage->ville_depart }} - {{ $voyage->ville_arrivee }}</h3>
            <p><strong>Heure de Départ:</strong> {{ $voyage->heure_depart }}</p>
            <p><strong>Heure d'Arrivée:</strong> {{ $voyage->heure_arrivee }}</p>
            <p class="{{ $voyage->statut == 'Valide' ? 'text-green-600' : 'text-red-600' }}">
                <strong>Statut:</strong> {{ $voyage->statut }}
            </p>
        </div>
        @endforeach
    </div>
</div>
@endsection