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
    <!-- Navigation -->
    <nav class="bg-dark text-white p-4 shadow-lg">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <div class="flex items-center space-x-4 w-full md:w-auto justify-between">
                <a href="#" class="text-2xl font-bold text-white">Stream<span class="text-primary">Vibe</span></a>
                <button class="md:hidden text-white">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
            
            <div class="hidden md:flex space-x-6">
                <a href="/" class="text-white hover:text-primary transition-colors"><i class="fas fa-home mr-2"></i>Home</a>
                <a href="#" class="text-gray-300 hover:text-primary transition-colors"><i class="fas fa-compass mr-2"></i>Discover</a>
                <a href="#" class="text-gray-300 hover:text-primary transition-colors"><i class="fas fa-film mr-2"></i>Shows</a>
                <a href="#" class="text-gray-300 hover:text-primary transition-colors"><i class="fas fa-tag mr-2"></i>Deals</a>
            </div>
            
            <div class="w-full md:w-auto flex items-center space-x-4">
                <div class="relative w-full md:w-64">
                    <input type="text" placeholder="Search anything..." class="w-full bg-gray-800 text-white px-4 py-2 rounded-full focus:outline-none focus:ring-2 focus:ring-primary">
                    <i class="fas fa-search absolute right-3 top-3 text-gray-400"></i>
                </div>
                @if (auth()->guest())
                <a href="{{ url('login') }}" class="hidden md:block bg-primary hover:bg-secondary px-6 py-2 rounded-full font-medium transition-colors">Sign In</a>
                @else
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-white hover:text-primary"><i class="far fa-bell text-xl"></i></a>
                    <a href="/dashboard" class="w-10 h-10 rounded-full bg-gray-600 flex items-center justify-center text-white">
                        <i class="fas fa-user"></i>
                    </a>
                    <a href="{{ url('logout') }}" class="hidden md:block bg-gray-700 hover:bg-gray-600 px-4 py-2 rounded-full font-medium transition-colors">Logout</a>
                </div>
                @endif
            </div>
        </div>
    </nav>