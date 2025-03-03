@extends('layouts.app')
@section('content')

<!-- Main Content -->
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Example Card -->
            <div class="bg-white shadow rounded-md p-4">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Total Users</h3>
                <p class="text-3xl font-bold text-gray-900">125</p>
            </div>

            <!-- Example Card -->
            <div class="bg-white shadow rounded-md p-4">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Active Navettes</h3>
                <p class="text-3xl font-bold text-gray-900">30</p>
            </div>

            <!-- Example Card -->
            <div class="bg-white shadow rounded-md p-4">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Revenue</h3>
                <p class="text-3xl font-bold text-gray-900">$15,000</p>
            </div>
        </div>

        <div class="mt-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Recent Activity</h2>
            <div class="bg-white shadow rounded-md overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Activity
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                User
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                2023-11-05
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                New user registered
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                John Doe
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                2023-11-04
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                Navette assigned
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                Jane Smith
                            </td>
                        </tr>
                        <!-- More rows here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection

       