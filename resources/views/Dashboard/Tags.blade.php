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
        <button type="submit" id="btn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add Tag</button>
    </form>

    <h2 class="text-xl font-semibold mb-3">All Tags</h2>
    <ul id="tags" class="w-full">
        @foreach($tags as $tag)
            <li class="py-2 px-4 border-b border-gray-200 last:border-none hover:bg-gray-100 transition-colors duration-200 flex items-center justify-between">
            <span class="font-medium">{{ $tag->name }}</span>
            <div>
                <a href="#" onclick="edit(event)" id="edit" data-id="{{$tag->id}}" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                <form action="/admin/tags/delete/{{$tag->id}}" method="POST">
                    @csrf
                    <button class="text-red-500" type="submit">Delete</button>
                </form>
            </div>
            </li>
        @endforeach
    </ul>

    <div class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-500 bg-opacity-75 hidden" id="updateForm">
          <form  action=""  method="POST" class="bg-white p-8 rounded shadow-md w-96">
                @csrf
                <h2 class="text-2xl font-semibold mb-4 text-center">Edit Tag</h2>
                <div class="mb-4">
                     <label for="updatename" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                     <input type="text" name="name" id="updatename" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex justify-center">
                     <button type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update Tag</button>
                </div>
          </form>
     </div>
</div>
<script>   
    function edit(e){
        e.preventDefault();
        let id = e.target.getAttribute('data-id');
        let name = e.target.parentElement.parentElement.querySelector('span').innerText;
        console.log(name, id);
        
        let div = document.getElementById('updateForm');
        let form = div.querySelector('form');
        form.action = '/admin/tags/update/' + id;
        form.querySelector('#updatename').value = name;
        div.classList.remove('hidden');
    }

</script>
@endsection