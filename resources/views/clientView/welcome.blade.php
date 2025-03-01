@extends('layouts.app')
@section('content')


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
<div class="container mx-auto py-12">
    <h2 class="text-3xl font-extrabold text-gray-900 mb-8 text-center">
        Explorez Nos Destinations Populaires
    </h2>
    <div class="mx-2 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($voyages as $voyage)
        <div class="relative group bg-white rounded-3xl shadow-xl overflow-hidden transform transition-transform duration-300 hover:scale-105">
            <div class="relative">
                <img src="{{$voyage->thumbnail}}" alt="Destination" class="w-full h-64 object-cover rounded-t-3xl transition-transform duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black opacity-20 transition-opacity duration-300 group-hover:opacity-40"></div>
                <div class="absolute bottom-0 left-0 p-6 w-full">
                    <h3 class="text-2xl font-bold text-white mb-2 drop-shadow-md">
                        {{ $voyage->departure_city }} - {{ $voyage->arrival_city }}
                    </h3>
                    <p class="text-gray-200 text-sm drop-shadow-md">
                        Découvrez le confort et la rapidité de nos navettes.
                    </p>
                </div>
            </div>
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <p class="text-gray-700 font-semibold">Départ: <span class="text-gray-900">{{ $voyage->departure_time }}</span></p>
                        <p class="text-gray-700 font-semibold">Arrivée: <span class="text-gray-900">{{ $voyage->arrival_time }}</span></p>
                    </div>
                    <span class="{{ $voyage->status == 'valid' ? 'bg-green-200 text-green-700' : 'bg-red-200 text-red-700' }} px-3 py-1 rounded-full text-sm font-medium">
                        {{ $voyage->status }}
                    </span>
                </div>
                <a href="/detailAnnonce/{{$voyage->id}}" class="inline-block bg-gradient-to-r from-blue-500 to-purple-500 text-white font-bold py-3 px-6 rounded-full hover:from-purple-500 hover:to-blue-500 transition-colors duration-300">
                    En savoir plus
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection