@extends('layouts.companyLayout')
@section('company-content')
<form action="/submit" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md space-y-4">
    @csrf

    <label class="block">
        <span class="text-gray-700">Departure City</span>
        <input type="text" name="departure_city" class="mt-1 block w-full p-2 border rounded-md focus:ring focus:ring-blue-300" required>
    </label>

    <label class="block">
        <span class="text-gray-700">Arrival City</span>
        <input type="text" name="arrival_city" class="mt-1 block w-full p-2 border rounded-md focus:ring focus:ring-blue-300" required>
    </label>

    <label class="block">
        <span class="text-gray-700">Departure Time</span>
        <input type="datetime-local" name="departure_time" class="mt-1 block w-full p-2 border rounded-md focus:ring focus:ring-blue-300" required>
    </label>

    <label class="block">
        <span class="text-gray-700">Arrival Time</span>
        <input type="datetime-local" name="arrival_time" class="mt-1 block w-full p-2 border rounded-md focus:ring focus:ring-blue-300" required>
    </label>

    <label class="block">
        <span class="text-gray-700">Bus Description</span>
        <textarea name="bus_description" class="mt-1 block w-full p-2 border rounded-md focus:ring focus:ring-blue-300"></textarea>
    </label>

    <button type="submit" class="w-full bg-green-500 text-white p-2 rounded-md hover:bg-green-600">Submit</button>
</form>

@endsection