@extends('layouts.companyLayout')
@section('company-content')

<div class="container mx-auto mt-6">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Liste des Offres de Navettes</h2>
    <div class="w-[1000px] m-auto">
        <table class="w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2">Image</th>
                    <th class="py-2">Départ</th>
                    <th class="py-2">Arrivée</th>
                    <th class="py-2">Heure de Départ</th>
                    <th class="py-2">Heure d'Arrivée</th>
                    <th class="py-2">Statut</th>
                    <th class="py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($voyages as $voyage)
                <tr class="border-b">
                    <td class="py-2">
                        <img src="https://www.tourmag.com/photo/art/grande/76836533-55389305.jpg?v=1700573972" alt="Image de la navette" class="w-24 h-24 object-cover rounded-lg">
                    </td>
                    <td class="py-2">{{ $voyage->departure_city }}</td>
                    <td class="py-2">{{ $voyage->arrival_city }}</td>
                    <td class="py-2">{{ $voyage->departure_time }}</td>
                    <td class="py-2">{{ $voyage->arrival_time }}</td>
                    <td class="py-2 {{ $voyage->status == 'valid' ? 'text-green-600' : 'text-red-600' }}">
                        <strong>{{ $voyage->status }}</strong>
                    </td>
                    <td class="py-2">
                        <a href="" class="text-blue-500 hover:text-blue-700 font-semibold">Read more</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection