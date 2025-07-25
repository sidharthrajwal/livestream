@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-96 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-dark to-transparent z-10"></div>
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');"></div>
        <div class="container mx-auto px-4 h-full flex items-center relative z-20">
            <div class="max-w-2xl">
                <span class="text-primary font-semibold text-sm uppercase tracking-wider">Featured Today</span>
                <h1 class="text-5xl font-bold text-white mt-2">The Best of 2023</h1>
                <p class="text-gray-200 mt-4 text-lg">Discover the most watched and loved content of the year, all in one place.</p>
                <div class="mt-6 flex space-x-4">
                    <a href="{{ url('watch') }}" class="bg-primary hover:bg-secondary text-white px-8 py-3 rounded-full font-medium transition-colors">
                        <i class="fas fa-play mr-2"></i> Watch Now
    </a>
                    <butt`on class="bg-white/20 hover:bg-white/30 text-white px-6 py-3 rounded-full font-medium backdrop-blur-sm transition-colors">
                        <i class="far fa-bookmark mr-2"></i> Save for Later
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <!-- Trending Now Section -->
        <section class="mb-16">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-dark">Trending Now</h2>
                <a href="#" class="text-primary hover:underline flex items-center">
                    View All <i class="fas fa-chevron-right ml-2 text-xs"></i>
                </a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Video Card 1 -->
                <div class="video-card bg-white rounded-xl overflow-hidden shadow-md">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1536440136628-849c177e76a1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1025&q=80" alt="Video Thumbnail" class="w-full h-48 object-cover">
                        <div class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded">12:45</div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 bg-black/30 transition-opacity">
                            <button class="bg-white/90 text-primary w-14 h-14 rounded-full flex items-center justify-center">
                                <i class="fas fa-play text-xl"></i>
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-200 rounded-full overflow-hidden">
                                <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Channel" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h3 class="font-semibold line-clamp-2">Amazing Travel Vlog: Exploring Hidden Gems in Japan</h3>
                                <p class="text-sm text-gray-600 mt-1">Travel Diaries</p>
                                <div class="flex items-center text-xs text-gray-500 mt-1">
                                    <span>245K views</span>
                                    <span class="mx-1">•</span>
                                    <span>2 days ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video Card 2 -->
                <div class="video-card bg-white rounded-xl overflow-hidden shadow-md">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1551817958-9d89771c1c8a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="Video Thumbnail" class="w-full h-48 object-cover">
                        <div class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded">8:22</div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 bg-black/30 transition-opacity">
                            <button class="bg-white/90 text-primary w-14 h-14 rounded-full flex items-center justify-center">
                                <i class="fas fa-play text-xl"></i>
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-200 rounded-full overflow-hidden">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Channel" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h3 class="font-semibold line-clamp-2">10 Tips for Better Landscape Photography</h3>
                                <p class="text-sm text-gray-600 mt-1">Photo Masters</p>
                                <div class="flex items-center text-xs text-gray-500 mt-1">
                                    <span>189K views</span>
                                    <span class="mx-1">•</span>
                                    <span>5 days ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video Card 3 -->
                <div class="video-card bg-white rounded-xl overflow-hidden shadow-md">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80" alt="Video Thumbnail" class="w-full h-48 object-cover">
                        <div class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded">15:30</div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 bg-black/30 transition-opacity">
                            <button class="bg-white/90 text-primary w-14 h-14 rounded-full flex items-center justify-center">
                                <i class="fas fa-play text-xl"></i>
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-200 rounded-full overflow-hidden">
                                <img src="https://randomuser.me/api/portraits/women/28.jpg" alt="Channel" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h3 class="font-semibold line-clamp-2">Gaming: New Open World Adventure Gameplay</h3>
                                <p class="text-sm text-gray-600 mt-1">Game Masters</p>
                                <div class="flex items-center text-xs text-gray-500 mt-1">
                                    <span>1.2M views</span>
                                    <span class="mx-1">•</span>
                                    <span>1 week ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video Card 4 -->
                <div class="video-card bg-white rounded-xl overflow-hidden shadow-md">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1504674900247-087703934869?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Video Thumbnail" class="w-full h-48 object-cover">
                        <div class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded">6:15</div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 bg-black/30 transition-opacity">
                            <button class="bg-white/90 text-primary w-14 h-14 rounded-full flex items-center justify-center">
                                <i class="fas fa-play text-xl"></i>
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-200 rounded-full overflow-hidden">
                                <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Channel" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h3 class="font-semibold line-clamp-2">5 Easy Dinner Recipes for Busy Weeknights</h3>
                                <p class="text-sm text-gray-600 mt-1">Foodie Channel</p>
                                <div class="flex items-center text-xs text-gray-500 mt-1">
                                    <span>356K views</span>
                                    <span class="mx-1">•</span>
                                    <span>3 days ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Categories Section -->
        <section class="mb-16">
            <h2 class="text-2xl font-bold mb-6">Browse Categories</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <a href="#" class="category-card bg-white rounded-xl p-6 text-center shadow-sm hover:shadow-md transition-shadow border border-gray-100">
                    <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-film text-primary text-xl"></i>
                    </div>
                    <span class="font-medium">Movies</span>
                </a>
                <a href="#" class="category-card bg-white rounded-xl p-6 text-center shadow-sm hover:shadow-md transition-shadow border border-gray-100">
                    <div class="w-12 h-12 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-tv text-accent text-xl"></i>
                    </div>
                    <span class="font-medium">TV Shows</span>
                </a>
                <a href="#" class="category-card bg-white rounded-xl p-6 text-center shadow-sm hover:shadow-md transition-shadow border border-gray-100">
                    <div class="w-12 h-12 bg-yellow-500/10 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-gamepad text-yellow-500 text-xl"></i>
                    </div>
                    <span class="font-medium">Gaming</span>
                </a>
                <a href="#" class="category-card bg-white rounded-xl p-6 text-center shadow-sm hover:shadow-md transition-shadow border border-gray-100">
                    <div class="w-12 h-12 bg-green-500/10 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-music text-green-500 text-xl"></i>
                    </div>
                    <span class="font-medium">Music</span>
                </a>
                <a href="#" class="category-card bg-white rounded-xl p-6 text-center shadow-sm hover:shadow-md transition-shadow border border-gray-100">
                    <div class="w-12 h-12 bg-blue-500/10 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-basketball-ball text-blue-500 text-xl"></i>
                    </div>
                    <span class="font-medium">Sports</span>
                </a>
                <a href="#" class="category-card bg-white rounded-xl p-6 text-center shadow-sm hover:shadow-md transition-shadow border border-gray-100">
                    <div class="w-12 h-12 bg-purple-500/10 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-graduation-cap text-purple-500 text-xl"></i>
                    </div>
                    <span class="font-medium">Learning</span>
                </a>
            </div>
        </section>

        <!-- Recommended For You Section -->
        <section>
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Recommended For You</h2>
                <a href="#" class="text-primary hover:underline flex items-center">
                    See All <i class="fas fa-chevron-right ml-2 text-xs"></i>
                </a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Recommended Video 1 -->
                <div class="video-card bg-white rounded-xl overflow-hidden shadow-md">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1551969014-7d2c4cddf0b6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1176&q=80" alt="Video Thumbnail" class="w-full h-40 object-cover">
                        <div class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded">9:45</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold line-clamp-2">Morning Routine for Maximum Productivity</h3>
                        <p class="text-sm text-gray-600 mt-1">Productivity Pro</p>
                        <div class="flex items-center text-xs text-gray-500 mt-1">
                            <span>89K views</span>
                            <span class="mx-1">•</span>
                            <span>1 day ago</span>
                        </div>
                    </div>
                </div>

                <!-- Recommended Video 2 -->
                <div class="video-card bg-white rounded-xl overflow-hidden shadow-md">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80" alt="Video Thumbnail" class="w-full h-40 object-cover">
                        <div class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded">14:22</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold line-clamp-2">Travel Guide: Best Places to Visit in 2023</h3>
                        <p class="text-sm text-gray-600 mt-1">Wanderlust</p>
                        <div class="flex items-center text-xs text-gray-500 mt-1">
                            <span>156K views</span>
                            <span class="mx-1">•</span>
                            <span>4 days ago</span>
                        </div>
                    </div>
                </div>

                <!-- Recommended Video 3 -->
                <div class="video-card bg-white rounded-xl overflow-hidden shadow-md">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Video Thumbnail" class="w-full h-40 object-cover">
                        <div class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded">18:10</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold line-clamp-2">10 Tips for Better Podcast Recording</h3>
                        <p class="text-sm text-gray-600 mt-1">Audio Masters</p>
                        <div class="flex items-center text-xs text-gray-500 mt-1">
                            <span>78K views</span>
                            <span class="mx-1">•</span>
                            <span>1 week ago</span>
                        </div>
                    </div>
                </div>

                <!-- Recommended Video 4 -->
                <div class="video-card bg-white rounded-xl overflow-hidden shadow-md">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Video Thumbnail" class="w-full h-40 object-cover">
                        <div class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded">22:35</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold line-clamp-2">The Future of AI in Everyday Life</h3>
                        <p class="text-sm text-gray-600 mt-1">Tech Insights</p>
                        <div class="flex items-center text-xs text-gray-500 mt-1">
                            <span>312K views</span>
                            <span class="mx-1">•</span>
                            <span>2 days ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    @endsection