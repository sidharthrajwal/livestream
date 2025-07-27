@extends('header')

<div class="min-h-screen bg-gray-50">
    <!-- Sidebar -->
    <div class="fixed inset-y-0 left-0 w-64 bg-white shadow-lg">
        <div class="p-4">
            <h1 class="text-2xl font-bold text-primary">StreamVibe</h1>
        </div>
        <nav class="mt-6">
            <a href="" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
                <i class="fas fa-home mr-3"></i>
                <span>Dashboard</span>
            </a>
            <a href="{" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 bg-gray-100">
                <i class="fas fa-video mr-3"></i>
                <span>Videos</span>
            </a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="ml-64 p-8">
        <header class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold">Upload Video</h1>
            <div class="flex items-center space-x-4">
                <span class="text-gray-700">Welcome, test test</span>
                <div class="w-10 h-10 rounded-full bg-indigo-500 flex items-center justify-center text-white">
                    T
                </div>
            </div>
        </header>

        <!-- Main Content Layout -->
        <div class="flex flex-col lg:flex-row gap-8 max-w-8xl ">
            <!-- Left Side - Form Fields -->
            <div class="lg:w-2/3">
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h2 class="text-xl font-semibold mb-6">Details</h2>
                    
                    @if($errors->any())
                        <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded">
                            <ul class="list-disc pl-5 space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('vediopost.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-medium mb-2">Title</label>
                            <input type="text" name="post_title" value="{{ old('post_title') }}" class="w-full px-4 py-3 border @error('post_title') border-red-500 @else border-gray-300 @enderror rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Add a title that describes your video" required>
                            @error('post_title')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-medium mb-2">Description</label>
                            <textarea name="post_description" rows="4" class="w-full px-4 py-3 border @error('post_description') border-red-500 @else border-gray-300 @enderror rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Tell viewers about your video">{{ old('post_description') }}</textarea>
                            @error('post_description')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-6">
                            <div class="mb-6">
                                <label class="block text-gray-700 text-sm font-medium mb-2">Thumbnail</label>
                                <p class="text-sm text-gray-500 mb-3">Select or upload a picture that shows what's in your video. A good thumbnail stands out and draws viewers' attention.</p>
                                <div class="flex items-center space-x-4">
                                    <div class="w-32 h-20 bg-gray-100 rounded-lg flex items-center justify-center overflow-hidden border-2 border-dashed @error('post_thumbnail') border-red-500 @else border-gray-300 @enderror">
                                        <img id="thumbnail-preview" src="#" alt="Thumbnail preview" class="hidden w-full h-full object-cover">
                                        <span id="thumbnail-placeholder" class="text-xs text-gray-500 text-center p-2">No file selected</span>
                                    </div>
                                    <div>
                                        <input type="file" id="thumbnail" name="post_thumbnail" accept="image/*" class="hidden">
                                        <button type="button" onclick="document.getElementById('thumbnail').click()" class="text-indigo-600 text-sm font-medium hover:text-indigo-800">
                                            Upload Thumbnail
                                        </button>
                                        <p class="text-xs text-gray-500 mt-1">Recommended size: 1280x720px</p>
                                        @error('post_thumbnail')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>      
                                </div>
                            </div>
                        
                        <!-- Video Crop Settings -->
                        <div class="border-t border-gray-200 pt-6">
                            <h3 class="text-lg font-medium mb-4">Video Crop Settings</h3>
                            <div class="bg-gray-50 p-4 rounded-lg mb-4">
                                <div class="flex items-center justify-between mb-3">
                                    <span class="text-sm font-medium">Crop Video</span>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="" class="stitler-only peer">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-indigo-600"></div>
                                    </label>
                                </div>
                                <div class="grid grid-cols-3 gap-4">
                                    <div>
                                        <label class="block text-sm text-gray-600 mb-1">Width</label>
                                        <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-md" value="1280">
                                    </div>
                                    <div>
                                        <label class="block text-sm text-gray-600 mb-1">Height</label>
                                        <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-md" value="720">
                                    </div>
                                    <div class="flex items-end">
                                        <button class="w-full bg-indigo-100 text-indigo-700 py-2 px-4 rounded-md hover:bg-indigo-200 text-sm font-medium">
                                            Reset
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex justify-end space-x-3 mt-6">
                                <a href="" class="px-6 py-2.5 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 font-medium">
                                    Cancel
                                </a>
                                <button type="submit" class="px-6 py-2.5 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 font-medium">
                                    Upload Video
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Right Side - Upload Box -->
            <div class="lg:w-1/3">
                <div class="bg-white rounded-xl shadow-md p-6 sticky top-6">
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-indigo-400 transition-colors cursor-pointer">
                        <div class="flex justify-center mb-4">
                            <svg class="w-12 h-12 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium mb-2">Drag and drop your video here</h3>
                        <p class="text-gray-500 text-sm mb-4">or</p>
                        <div class="mb-2">
                            <input type="file" name="post_file" class="block w-full text-sm text-gray-500
                                file:mr-4 file:py-2.5 file:px-4
                                file:rounded-lg file:border-0
                                file:text-sm file:font-semibold
                                file:bg-indigo-600 file:text-white
                                hover:file:bg-indigo-700">
                            @error('post_file')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <p class="text-xs text-gray-500 mt-1">MP4, WebM or MOV. Max 2GB</p>
                    </div>
                    
                    <div class="mt-6 text-sm text-gray-600">
                        <h4 class="font-medium mb-2">Tips:</h4>
                        <ul class="space-y-1.5">
                            <li class="flex items-start">
                                <svg class="h-4 w-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Use high-quality video (1080p or 4K)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-4 w-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Landscape (16:9) or portrait (9:16) formats</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-4 w-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Keep videos under 10 minutes for best results</span>
                            </li>
                        </ul>
                   
                    </div>
                </div>
            </div>
                    
                
            </div>
     </div>
    </div>
@push('scripts')
<script>
    // Thumbnail preview
    document.getElementById('thumbnail').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('thumbnail-preview');
                const placeholder = document.getElementById('thumbnail-placeholder');
                
                preview.src = e.target.result;
                preview.classList.remove('hidden');
                placeholder.classList.add('hidden');
            }
            reader.readAsDataURL(file);
        }
    });
</script>
@endpush
