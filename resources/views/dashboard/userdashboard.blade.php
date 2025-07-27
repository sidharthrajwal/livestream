
@extends('header')


<div class="min-h-screen bg-gray-50">
    <!-- Sidebar -->
    <div class="fixed inset-y-0 left-0 w-64 bg-white shadow-lg">
        <div class="p-4">
            <h1 class="text-2xl font-bold text-primary">StreamVibe</h1>
        </div>
        <nav class="mt-6">
            <a href="#" class="flex items-center px-6 py-3 text-white bg-primary">
                <i class="fas fa-home mr-3"></i>
                <span>Dashboard</span>
            </a>
            <a href="#" class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-100">
                <i class="fas fa-video mr-3"></i>
                <span>My Videos</span>
            </a>
            <a href="#" class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-100">
                <i class="fas fa-upload mr-3"></i>
                <span>Upload</span>
            </a>
            <a href="#" class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-100">
                <i class="fas fa-cog mr-3"></i>
                <span>Settings</span>
            </a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="ml-64 p-8">
        <header class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold">Welcome back, {{ Auth::user()->name }}</h1>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <button class="p-2 text-gray-600 hover:bg-gray-100 rounded-full">
                        <i class="fas fa-bell"></i>
                    </button>
                </div>
                <div class="flex items-center space-x-2">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=ef4444&color=fff" 
                         alt="User" 
                         class="w-10 h-10 rounded-full">
                    <span class="font-medium">{{ Auth::user()->name }}</span>
                </div>
            </div>
        </header>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-red-100 text-primary">
                        <i class="fas fa-video"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-500">Total Videos</p>
                        <h3 class="text-2xl font-bold">24</h3>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-blue-100 text-blue-500">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-500">Total Views</p>
                        <h3 class="text-2xl font-bold">1,234</h3>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-green-100 text-green-500">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-500">Subscribers</p>
                        <h3 class="text-2xl font-bold">456</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Videos -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-semibold">Recent Videos</h2>
                <button class="px-4 py-2 bg-primary text-white rounded-md hover:bg-red-700">
                    <i class="fas fa-plus mr-2"></i>New Video
                </button>
            </div>
            
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Video</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Views</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-16 bg-gray-200 rounded"></div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">My Awesome Video</div>
                                        <div class="text-sm text-gray-500">3 days ago</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">1,234</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Published
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Jul 25, 2023
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="{{ route('vediopost') }}" class="text-primary hover:text-red-700 mr-4">Edit</a>
                                <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    .min-h-screen {
        min-height: 100vh;
    }
    .w-64 {
        width: 16rem;
    }
    .ml-64 {
        margin-left: 16rem;
    }
</style>



