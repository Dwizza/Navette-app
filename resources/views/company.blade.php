@extends('layouts.companyLayout')
@section('company-content')

<div class="container mx-auto mt-6">
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