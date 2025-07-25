@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <!-- Main Content -->
    <div class="pt-16">
        <div class="container mx-auto px-4 py-6">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Video Player Section -->
                <div class="lg:w-3/4">
                    <!-- Video Player -->
                    <div class="bg-black rounded-xl overflow-hidden shadow-2xl mb-6">
                        <div class="video-container">
                            <!-- Replace with your video embed code or custom player -->
                            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                                    title="Video Player" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                    allowfullscreen></iframe>
                        </div>
                        
                        <!-- Video Controls -->
                        <div class="p-4 backdrop-blur-sm">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center space-x-4">
                                    <button class="text-white hover:text-primary">
                                        <i class="fas fa-play text-xl"></i>
                                    </button>
                                    <div class="text-sm text-gray-300">12:45 / 24:30</div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <button class="text-gray-300 hover:text-white">
                                        <i class="fas fa-volume-up"></i>
                                    </button>
                                    <button class="text-gray-300 hover:text-white">
                                        <i class="fas fa-cog"></i>
                                    </button>
                                    <button class="text-gray-300 hover:text-white">
                                        <i class="fas fa-expand"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-1.5 mb-2">
                                <div class="bg-primary h-1.5 rounded-full" style="width: 45%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Video Info -->
                    <div class="backdrop-blur-sm rounded-xl p-6 mb-6">
                        <h1 class="text-2xl font-bold mb-2">Amazing Video Title That Could Be Quite Long and Take Multiple Lines</h1>
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-2 text-sm text-gray-400">
                                <span>1.2M views</span>
                                <span>•</span>
                                <span>2 weeks ago</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <button id="like_unlinke" data-post-id="{{ $post_id }}" data-user-id="{{ Auth::user()->id }}" data-post-like-type="like" class="flex items-center space-x-2 text-gray-900 hover:text-primary">
                                    <i class="far fa-thumbs-up @if($posts > 0) text-primary @endif"></i>
                                    <span id="total_likes">{{ $likes }}</span>
                                </button>
                                <button id="dislike_unlinke" data-post-id="{{ $post_id }}" data-user-id="{{ Auth::user()->id }}" data-post-like-type="dislike" class="flex items-center space-x-2 text-gray-900 hover:text-primary">
                                    <i class="far fa-thumbs-down"></i>
                                </button>
                                <button class="flex items-center space-x-2 text-gray-900 hover:text-primary">
                                    <i class="fas fa-share"></i>
                                    <span>Share</span>
                                </button>
                                <button class="flex items-center space-x-2 text-gray-900 hover:text-primary">
                                    <i class="fas fa-plus"></i>
                                    <span>Save</span>
                                </button>
                            </div>
                        </div>

                        <!-- Channel Info -->
                        <div class="flex items-center justify-between border-t border-gray-800 pt-4">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rounded-full bg-gray-700 flex items-center justify-center text-xl font-bold">
                                    AC
                                </div>
                                <div>
                                    <h3 class="font-semibold">Awesome Channel</h3>
                                    <p class="text-sm text-gray-400">1.5M subscribers</p>
                                </div>
                            </div>
                            <button class="bg-primary hover:bg-secondary px-6 py-2 rounded-full font-medium transition-colors">
                                Subscribe
                            </button>
                        </div>
                    </div>

                    <!-- Video Description -->
                    <div class="backdrop-blur-sm rounded-xl p-6 mb-6">
                        <div class="flex items-center space-x-4 mb-4">
                            <span class="font-medium">Description</span>
                            <span class="text-sm text-gray-400">•</span>
                            <span class="text-sm text-gray-400">Show more</span>
                        </div>
                        <p class="text-gray-300 mb-4">
                            This is a detailed description of the video content. It provides viewers with information about what to expect from the video. The description can include links, timestamps, and other relevant information.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm text-gray-300">#gaming</span>
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm text-gray-300">#funny</span>
                            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm text-gray-300">#entertainment</span>
                        </div>
                    </div>

                    <!-- Comments Section -->
                    <div class="backdrop-blur-sm rounded-xl p-6">
                        <h3 class="text-lg font-semibold mb-6">Comments • 1,234</h3>
                        
                        <!-- Comment Form -->
                        <div class="flex items-start space-x-3 mb-6">
                            <div class="w-10 h-10 rounded-full bg-gray-700 flex-shrink-0"></div>
                            <div class="flex-1">
                                <input type="text" placeholder="Add a comment..." 
                                       class="w-full bg-transparent border-b border-gray-700 pb-2 focus:outline-none focus:border-primary">
                            </div>
                        </div>

                        <!-- Comment List -->
                        <div class="space-y-6">
                            <!-- Comment 1 -->
                            <div class="flex space-x-4">
                                <div class="w-10 h-10 rounded-full bg-gray-700 flex-shrink-0"></div>
                                <div>
                                    <div class="flex items-center space-x-2 mb-1">
                                        <span class="font-medium">John Doe</span>
                                        <span class="text-xs text-gray-400">2 days ago</span>
                                    </div>
                                    <p class="text-sm text-gray-300 mb-2">This video was amazing! I learned so much from it. Keep up the great work!</p>
                                    <div class="flex items-center space-x-4 text-sm text-gray-400">
                                        <button class="flex items-center space-x-1 hover:text-white">
                                            <i class="far fa-thumbs-up"></i>
                                            <span>42</span>
                                        </button>
                                        <button class="flex items-center space-x-1 hover:text-white">
                                            <i class="far fa-thumbs-down"></i>
                                        </button>
                                        <button class="hover:text-white">Reply</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Comment 2 -->
                            <div class="flex space-x-4">
                                <div class="w-10 h-10 rounded-full bg-gray-700 flex-shrink-0"></div>
                                <div>
                                    <div class="flex items-center space-x-2 mb-1">
                                        <span class="font-medium">Jane Smith</span>
                                        <span class="text-xs text-gray-400">1 week ago</span>
                                    </div>
                                    <p class="text-sm text-gray-300 mb-2">I've been looking for a tutorial like this. Very clear explanations!</p>
                                    <div class="flex items-center space-x-4 text-sm text-gray-400">
                                        <button class="flex items-center space-x-1 hover:text-white">
                                            <i class="far fa-thumbs-up"></i>
                                            <span>28</span>
                                        </button>
                                        <button class="flex items-center space-x-1 hover:text-white">
                                            <i class="far fa-thumbs-down"></i>
                                        </button>
                                        <button class="hover:text-white">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:w-1/4 space-y-4">
                    <!-- Up Next -->
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-semibold">Up Next</h3>
                        <div class="flex items-center space-x-2">
                            <span class="text-sm text-gray-400">Autoplay</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer" checked>
                                <div class="w-9 h-5 bg-gray-700 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
                            </label>
                        </div>
                    </div>

                    <!-- Video List -->
                    <div class="space-y-4">
                        <!-- Video Item 1 -->
                        <a href="#" class="flex group">
                            <div class="relative w-40 h-24 flex-shrink-0 rounded-lg overflow-hidden">
                                <img src="https://source.unsplash.com/random/300x200?gaming" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform"
                                     alt="Video thumbnail">
                                <span class="absolute bottom-1 right-1 bg-black/80 text-white text-xs px-1 rounded">12:45</span>
                            </div>
                            <div class="ml-3">
                                <h4 class="text-sm font-medium line-clamp-2 group-hover:text-primary">How to Build a Gaming PC in 2023 - Complete Step by Step Guide</h4>
                                <p class="text-xs text-gray-400 mt-1">Tech Guru</p>
                                <p class="text-xs text-gray-400">1.2M views • 2 days ago</p>
                            </div>
                        </a>

                        <!-- Video Item 2 -->
                        <a href="#" class="flex group">
                            <div class="relative w-40 h-24 flex-shrink-0 rounded-lg overflow-hidden">
                                <img src="https://source.unsplash.com/random/300x200?tech" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform"
                                     alt="Video thumbnail">
                                <span class="absolute bottom-1 right-1 bg-black/80 text-white text-xs px-1 rounded">8:22</span>
                            </div>
                            <div class="ml-3">
                                <h4 class="text-sm font-medium line-clamp-2 group-hover:text-primary">10 Tech Gadgets You NEED in 2023!</h4>
                                <p class="text-xs text-gray-400 mt-1">Gadget Master</p>
                                <p class="text-xs text-gray-400">856K views • 1 week ago</p>
                            </div>
                        </a>

                        <!-- Video Item 3 -->
                        <a href="#" class="flex group">
                            <div class="relative w-40 h-24 flex-shrink-0 rounded-lg overflow-hidden">
                                <img src="https://source.unsplash.com/random/300x200?travel" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform"
                                     alt="Video thumbnail">
                                <span class="absolute bottom-1 right-1 bg-black/80 text-white text-xs px-1 rounded">15:30</span>
                            </div>
                            <div class="ml-3">
                                <h4 class="text-sm font-medium line-clamp-2 group-hover:text-primary">Bali Travel Guide 2023 - Best Places to Visit</h4>
                                <p class="text-xs text-gray-400 mt-1">Travel Explorer</p>
                                <p class="text-xs text-gray-400">2.3M views • 3 weeks ago</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection('content')