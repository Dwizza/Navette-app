@extends('layouts.app')
@section('content')

    <div class="container mx-auto px-4">
          <div class="flex flex-wrap">
                <div class="w-full">
                     <div class="bg-white shadow-md rounded my-6">
                          <div class="bg-gray-200 py-3 px-6 border-b border-gray-300">
                                <h2 class="text-2xl font-semibold text-gray-700">Users Control</h2>
                          </div>
                            @if (session('success'))
                                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                                    <strong class="font-bold">Succès!</strong>
                                    <span class="block sm:inline">{{ session('success') }}</span>
                                </div>
                            @endif
                          <div class="p-6">
                                <table class="table-auto w-full">
                                     <thead>
                                          <tr class="bg-gray-100">
                                                <th class="px-4 py-2 text-left">#</th>
                                                <th class="px-4 py-2 text-left">Name</th>
                                                <th class="px-4 py-2 text-left">Email</th>
                                                <th class="px-4 py-2 text-left">Roles</th>
                                                <th class="px-4 py-2 text-left">Actions</th>
                                          </tr>
                                     </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td class="border px-4 py-2">{{ $user->id }}</td>
                                                <td class="border px-4 py-2">{{ $user->name }}</td>
                                                <td class="border px-4 py-2">{{ $user->email }}</td>
                                                <td class="border px-4 py-2">
                                                @if ($user->role)
                                                    <label class="bg-gray-200 text-xs font-semibold py-1 px-2 rounded-full text-gray-700">{{ $user->role->role }}</label>
                                                @else
                                                    <label class="bg-red-200 text-xs font-semibold py-1 px-2 rounded-full text-red-700">No Role</label>
                                                @endif
                                                </td>
                                                <td class="border px-4 py-2">
                                                    @if ($user->role)
                                                        <button onclick="selectRole(event)" data-id="{{$user->id}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit Role</button>
                                                    @else
                                                        <button onclick="selectRole(event)" data-id="{{$user->id}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Role</button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                          </div>
                     </div>
                </div>
          </div>
     </div>
    <!-- Modal -->
    <div class="fixed z-10 inset-0 overflow-y-auto hidden" id="selectRoleModal">
          <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                     <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                     <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                          <div class="sm:flex sm:items-start">
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                     <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                                          Select Role
                                     </h3>
                                </div>
                          </div>
                          <form method="POST" action="" class="mt-2">
                            @csrf
                                <div class="mb-4">
                                     <label for="role" class="block text-gray-700 text-sm font-bold mb-2">Role</label>
                                     <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="role" name="role">
                                          @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->role }}</option>
                                          @endforeach
                                     </select>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                     <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
                                          Save
                                     </button>
                                     <button type="button" onclick="cancel()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                          Cancel
                                     </button>
                                </div>
                          </form>
                     </div>
                </div>
          </div>
     </div>

     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script>
        function selectRole(e) {
            let form = document.getElementById('selectRoleModal');
            form.classList.remove('hidden');
            let id = e.target.getAttribute('data-id');
            let action = 'user/edit/'+id;
            form.querySelector('form').setAttribute('action', action);
        }
        function cancel() {
            let form = document.getElementById('selectRoleModal');
            form.classList.add('hidden');
        }
     </script>
     {{-- <script>
        function selectRole() {
            

        }
     </script> --}}



@endsection