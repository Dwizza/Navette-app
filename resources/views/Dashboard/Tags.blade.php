@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Tags</h1>
    <form action="" method="POST" class="mb-6">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
            <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add Tag</button>
    </form>

    <h2 class="text-xl font-semibold mb-3">All Tags</h2>
    <ul>
        @foreach($tags as $tag)
            <li class="py-2 px-4 border-b border-gray-200 last:border-none hover:bg-gray-100 transition-colors duration-200 flex items-center justify-between">
            <span class="font-medium">{{ $tag->name }}</span>
            <div>
                <a href="/admin/tags/edit/{{$tag->id}}" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                <a href="/admin/tags/delete/{{$tag->id}}" class="text-red-500 hover:text-red-700">Delete</a>
            </div>
            </li>
        @endforeach
    </ul>
</div>
@endsection