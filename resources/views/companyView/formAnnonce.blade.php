@extends('layouts.companyLayout')
@section('company-content')
<div class="min-h-screen bg-gray-100 py-6 flex items-center justify-center">
    <div class="max-w-md w-full bg-white shadow-md rounded-lg p-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create New Announcement</h2>
        <form action="/formannonce" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="departure_city" class="block text-gray-700 text-sm font-bold mb-2">Departure City:</label>
                <input type="text" id="departure_city" name="departure_city" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div>
                <label for="arrival_city" class="block text-gray-700 text-sm font-bold mb-2">Arrival City:</label>
                <input type="text" id="arrival_city" name="arrival_city" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div>
                <label for="departure_time" class="block text-gray-700 text-sm font-bold mb-2">Departure Time:</label>
                <input type="time" id="departure_time" name="departure_time" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div>
                <label for="arrival_time" class="block text-gray-700 text-sm font-bold mb-2">Arrival Time:</label>
                <input type="time" id="arrival_time" name="arrival_time" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div>
                <label for="Thumbnail" class="block text-gray-700 text-sm font-bold mb-2">Thumbnail URL:</label>
                <input type="url" id="Thumbnail" name="Thumbnail" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div>
                <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price:</label>
                <input type="number" id="price" name="price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div>
                <label for="bus_description" class="block text-gray-700 text-sm font-bold mb-2">Bus Description:</label>
                <textarea id="bus_description" name="bus_description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>

            <div>
                <button type="submit" name="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>

@endsection