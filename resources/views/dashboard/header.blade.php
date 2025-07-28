<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StreamVibe - Modern Video Platform</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: 'rgb(220 38 38)',
                        secondary: '#4F46E5',
                        dark: '#1A1A2E',
                        light: '#F0F2F5',
                        accent: '#FF6584'
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg,rgb(220 38 38 / var(--tw-bg-opacity, 1)) 0%, rgb(220 38 38 / var(--tw-bg-opacity, 1)) 100%);
        }
        .video-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .video-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
    </style>
     <style>
        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
            height: 0;
            overflow: hidden;
        }
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        .chapter-marker {
            position: absolute;
            bottom: 10px;
            height: 4px;
            background: rgba(255,255,255,0.3);
            cursor: pointer;
        }
        .chapter-marker:hover {
            background: #6C63FF;
        }
    </style>
</head>
<body class="bg-light">
<div class="fixed inset-y-0 left-0 w-64 bg-white shadow-lg">
        <div class="p-4">
          <a href="{{ url('/') }}"> <h1 class="text-2xl font-bold text-primary">StreamVibe</h1></a>
        </div>
        <nav class="mt-6">
            <a href="{{ url('/dashboard') }}" class="flex items-center px-6 py-3 text-gray-600  @if(Route::is('dashboard') ) bg-primary text-white @endif">
                <i class="fas fa-home mr-3"></i>
                <span>Dashboard</span>
            </a>
            <a href="{{ route('userallvideos') }}" class="flex items-center px-6 py-3 text-gray-600  @if(Route::is('userallvideos') ) bg-primary text-white @endif">
                <i class="fas fa-video mr-3"></i>
                <span>My Videos</span>
            </a>
            <a href="{{ url('/dashboard/upload') }}" class="flex items-center px-6 py-3 text-gray-600">
                <i class="fas fa-upload mr-3"></i>
                <span>Upload</span>
            </a>
            <a href="#" class="flex items-center px-6 py-3 text-gray-600">
                <i class="fas fa-cog mr-3"></i>
                <span>Settings</span>
            </a>
        </nav>
    </div>
