<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - StreamTV</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-black text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-2xl font-bold text-red-600">Stream<span class="text-white">TV</span></a>
            <div class="flex items-center space-x-4">
                <span class="text-gray-400">Don't have an account?</span>
                <a href="{{ url('register') }}" class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded-full font-medium">Sign Up</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="min-h-[calc(100vh-4rem)] flex items-center justify-center p-4">
        <div class="w-full max-w-md">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <!-- Header -->
                <div class="bg-gradient-to-r from-black to-gray-900 p-6 text-center">
                    <h2 class="text-2xl font-bold text-white">Welcome Back</h2>
                    <p class="text-gray-300 mt-1">Sign in to your account</p>
                </div>

                <!-- Form -->
                <form class="p-6" method="POST" action="{{ url('login') }}">
                    @csrf
                    <!-- Email -->
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-medium mb-2" for="email">
                            Email Address
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input id="email" type="email" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus
                                class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 @error('email') border-red-500 @enderror"
                                placeholder="Enter your email">
                        </div>
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-6">
                        <div class="flex justify-between items-center mb-2">
                            <label class="block text-gray-700 text-sm font-medium" for="password">
                                Password
                            </label>
                   
                                <a href="{{ route('password.email') }}" class="text-sm text-red-600 hover:underline">
                                    Forgot Password?
                                </a>
                       
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input id="password" type="password" name="password"  autocomplete="current-password"
                                class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 @error('password') border-red-500 @enderror"
                                placeholder="••••••••">
                        </div>
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="mb-6 flex items-center">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                            class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-700">
                            Remember me
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-lg transition duration-200">
                        Sign In
                    </button>

                    <!-- Social Login -->
                    <div class="mt-6">
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 bg-white text-gray-500">
                                    Or continue with
                                </span>
                            </div>
                        </div>

                        <div class="mt-6 grid grid-cols-3 gap-3">
                            <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-lg shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                <i class="fab fa-google text-red-600"></i>
                            </a>
                            <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-lg shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                <i class="fab fa-facebook-f text-blue-600"></i>
                            </a>
                            <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-lg shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                <i class="fab fa-twitter text-blue-400"></i>
                            </a>
                        </div>
                    </div>
                </form>

                <!-- Footer -->
                <div class="bg-gray-50 px-6 py-4">
                    <p class="text-center text-sm text-gray-600">
                        Don't have an account?
                        <a href="{{ url('register') }}" class="font-medium text-red-600 hover:text-red-500">
                            Sign up
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-6">
        <div class="container mx-auto px-4 text-center">
            <p class="text-gray-400 text-sm">© 2025 StreamTV. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>