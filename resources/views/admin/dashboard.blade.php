@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="bg-gradient-to-b from-gray-100 to-gray-50 min-h-screen py-12">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Welcome Card -->
        <div class="bg-white shadow-2xl rounded-3xl p-10 text-center mb-10">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-3">
                🎉 Welcome Admin, {{ auth()->user()->name }}
            </h1>
            <p class="text-lg text-gray-600">
                You are logged into the <span class="font-semibold text-indigo-600">Admin Dashboard</span>.
            </p>
        </div>

        <!-- Quick Action Cards -->
        <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Manage Users -->
            <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl transition transform hover:-translate-y-1 duration-300">
                <div class="flex items-center mb-4">
                    <div class="bg-indigo-100 text-indigo-600 p-3 rounded-full mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5.121 17.804A7.966 7.966 0 0012 20a7.966 7.966 0 006.879-2.196M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800">Manage Users</h2>
                </div>
                <p class="text-gray-500">View, edit, or delete registered users and manage permissions.</p>
            </div>

            <!-- Manage Content -->
            <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl transition transform hover:-translate-y-1 duration-300">
                <div class="flex items-center mb-4">
                    <div class="bg-green-100 text-green-600 p-3 rounded-full mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 20h9M12 4H3m9 0v16"/>
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800">Manage Content</h2>
                </div>
                <p class="text-gray-500">Add, update, or organize system content like posts, announcements, or pages.</p>
            </div>

            <!-- Reports -->
            <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl transition transform hover:-translate-y-1 duration-300">
                <div class="flex items-center mb-4">
                    <div class="bg-yellow-100 text-yellow-600 p-3 rounded-full mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 17v-6a2 2 0 012-2h6M9 7V5a2 2 0 012-2h6M5 7v10a2 2 0 002 2h6"/>
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800">Reports</h2>
                </div>
                <p class="text-gray-500">Check system statistics, activity logs, and generate reports for analysis.</p>
            </div>

        </div>

    </div>
</div>
@endsection
