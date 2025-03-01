@extends('layouts.app')
@section('content')
<div class="container mx-auto mt-8 p-6 bg-gray-100 rounded-lg shadow-xl">
    <div class="bg-white rounded-lg overflow-hidden shadow-md">
        
        <div class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-4 px-6">
            <h2 class="text-3xl font-bold text-center mb-2">Trip Details</h2>
            <h3 class="text-xl font-semibold text-center">Organized by: <span class="text-yellow-300">{{ $user->name }}</span></h3>
        </div>

        
        <div class="md:flex md:flex-wrap p-8">

            
            <div class="md:w-1/2 p-4">
                <h4 class="font-semibold text-xl mb-4 text-gray-800 border-b-2 border-gray-200 pb-2">Journey Information</h4>
                <ul class="list-none">
                    <li class="py-3 border-b border-gray-200 flex justify-between items-center">
                        <span class="font-medium text-gray-700">Departure Time:</span>
                        <span class="text-indigo-700 font-semibold">{{ $annonce->departure_time }}</span>
                    </li>
                    <li class="py-3 border-b border-gray-200 flex justify-between items-center">
                        <span class="font-medium text-gray-700">Arrival Time:</span>
                        <span class="text-indigo-700 font-semibold">{{ $annonce->arrival_time }}</span>
                    </li>
                    <li class="py-3 border-b border-gray-200 flex justify-between items-center">
                        <span class="font-medium text-gray-700">From:</span>
                        <span class="text-green-700 font-bold">{{ $annonce->departure_city }}</span>
                    </li>
                    <li class="py-3 border-b border-gray-200 flex justify-between items-center">
                        <span class="font-medium text-gray-700">To:</span>
                        <span class="text-blue-700 font-bold">{{ $annonce->arrival_city }}</span>
                    </li>
                    <li class="py-3 border-b border-gray-200 flex justify-between items-center">
                        <span class="font-medium text-gray-700">Price:</span>
                        <span class="text-2xl text-green-800 font-extrabold">{{$annonce->price}} $</span>
                    </li>
                    <li class="py-3">
                        <span class="font-medium text-gray-700 block mb-2">Description:</span>
                        <p class="text-gray-700 leading-relaxed">
                            {{ $annonce->bus_description }}
                        </p>
                    </li>
                </ul>
            </div>

            
            <div class="md:w-1/2 p-4">
                <h4 class="font-semibold text-xl mb-4 text-gray-800 border-b-2 border-gray-200 pb-2">Additional Information</h4>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Enjoy a comfortable and safe journey with our experienced drivers. Our buses are equipped with
                    air conditioning, comfortable seating, and Wi-Fi.
                </p>
                <div class="mt-4">
                    <img src="{{$annonce->thumbnail}}" alt="Bus Image" class="rounded-lg shadow-md w-full h-auto">
                </div>
            </div>

        </div>

        
        <div class="bg-gray-50 px-6 py-4 flex justify-between items-center">
            <a href="/client" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full transition-colors duration-300">
                Back to List
            </a>
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-full transition-colors duration-300">
                Reserve Now
            </button>
        </div>
    </div>
</div>

@endsection