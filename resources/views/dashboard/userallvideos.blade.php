@extends('dashboard.DashboardLayouts.app')
@section('title', 'Home Page')

@section('content')

<div class="min-h-screen bg-gray-50">
    <!-- Sidebar -->
  
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

   

        <!-- Recent Videos -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-semibold">Recent Videos</h2>
                <a href="{{ route('vediopost') }}" class="px-4 py-2 bg-primary text-white rounded-md hover:bg-red-700">
                    <i class="fas fa-plus mr-2"></i>New Video
                </a>
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
                        @foreach($videos as $video)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
           `                         <div class="flex-shrink-0 h-10 w-16 bg-gray-200 rounded"><img src="{{ asset('storage/vediopostthumails/' . $video->post_thumbnail) }}"></div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">{{$video->post_title}}</div>
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
                                <a href="{{ url('dashboard/editvediopost/' . $video->id) }}" class="text-primary hover:text-red-700 mr-4">Edit</a>
                                <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                            </td>
                        </tr>
                    @endforeach
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
@endsection



