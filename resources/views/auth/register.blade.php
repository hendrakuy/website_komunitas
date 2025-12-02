@extends('layouts.auth')

@section('title', __('Register'))

@section('content')
<!-- Header Section -->
<div class="bg-gradient-to-r from-purple-600 to-pink-600 px-8 py-10 text-center">
    <div class="mb-4">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-white bg-opacity-20 rounded-full backdrop-blur-sm">
            <i class="fas fa-user-plus text-white text-3xl"></i>
        </div>
    </div>
    <h2 class="text-3xl font-bold text-white mb-2">{{ __('Create Account') }}</h2>
    <p class="text-purple-100">{{ __('Join us today and get started') }}</p>
</div>

<!-- Body Section -->
<div class="px-8 py-10">
    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <!-- Name Field -->
        <div>
            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                {{ __('Full Name') }}
            </label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fas fa-user text-gray-400"></i>
                </div>
                <input 
                    id="name" 
                    type="text" 
                    class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all @error('name') border-red-500 @enderror" 
                    name="name" 
                    value="{{ old('name') }}" 
                    required 
                    autocomplete="name" 
                    autofocus
                    placeholder="Enter your full name"
                >
            </div>
            @error('name')
                <p class="mt-2 text-sm text-red-600 flex items-center">
                    <i class="fas fa-exclamation-circle mr-1"></i>
                    {{ $message }}
                </p>
            @enderror
        </div>

        <!-- Email Field -->
        <div>
            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                {{ __('Email Address') }}
            </label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fas fa-envelope text-gray-400"></i>
                </div>
                <input 
                    id="email" 
                    type="email" 
                    class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all @error('email') border-red-500 @enderror" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required 
                    autocomplete="email"
                    placeholder="Enter your email"
                >
            </div>
            @error('email')
                <p class="mt-2 text-sm text-red-600 flex items-center">
                    <i class="fas fa-exclamation-circle mr-1"></i>
                    {{ $message }}
                </p>
            @enderror
        </div>

        <!-- Password Field -->
        <div>
            <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                {{ __('Password') }}
            </label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fas fa-lock text-gray-400"></i>
                </div>
                <input 
                    id="password" 
                    type="password" 
                    class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all @error('password') border-red-500 @enderror" 
                    name="password" 
                    required 
                    autocomplete="new-password"
                    placeholder="Create a strong password"
                >
            </div>
            @error('password')
                <p class="mt-2 text-sm text-red-600 flex items-center">
                    <i class="fas fa-exclamation-circle mr-1"></i>
                    {{ $message }}
                </p>
            @enderror
            <p class="mt-1 text-xs text-gray-500">
                <i class="fas fa-info-circle mr-1"></i>
                {{ __('Minimum 8 characters') }}
            </p>
        </div>

        <!-- Confirm Password Field -->
        <div>
            <label for="password-confirm" class="block text-sm font-semibold text-gray-700 mb-2">
                {{ __('Confirm Password') }}
            </label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fas fa-check-circle text-gray-400"></i>
                </div>
                <input 
                    id="password-confirm" 
                    type="password" 
                    class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all" 
                    name="password_confirmation" 
                    required 
                    autocomplete="new-password"
                    placeholder="Confirm your password"
                >
            </div>
        </div>

        <!-- Terms & Conditions -->
        <div class="flex items-start">
            <div class="flex items-center h-5">
                <input 
                    id="terms" 
                    type="checkbox" 
                    class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded"
                    required
                >
            </div>
            <div class="ml-3 text-sm">
                <label for="terms" class="text-gray-700">
                    {{ __('I agree to the') }}
                    <a href="#" class="font-medium text-purple-600 hover:text-purple-500">
                        {{ __('Terms of Service') }}
                    </a>
                    {{ __('and') }}
                    <a href="#" class="font-medium text-purple-600 hover:text-purple-500">
                        {{ __('Privacy Policy') }}
                    </a>
                </label>
            </div>
        </div>

        <!-- Register Button -->
        <div class="pt-2">
            <button 
                type="submit" 
                class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-semibold text-white bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition-all transform hover:-translate-y-0.5 hover:shadow-lg"
            >
                <i class="fas fa-user-plus mr-2"></i>
                {{ __('Create Account') }}
            </button>
        </div>

        <!-- Divider -->
        <div class="relative">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-4 bg-white text-gray-500">{{ __('or') }}</span>
            </div>
        </div>

        <!-- Login Link -->
        <div class="text-center">
            <span class="text-sm text-gray-600">{{ __('Already have an account?') }}</span>
            <a href="{{ route('login') }}" class="text-sm font-semibold text-purple-600 hover:text-purple-500 transition-colors ml-1">
                {{ __('Sign In') }}
            </a>
        </div>
    </form>
</div>

<!-- Footer -->
<div class="bg-gray-50 px-8 py-4 text-center border-t border-gray-200">
    <p class="text-xs text-gray-500">
        &copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('All rights reserved.') }}
    </p>
</div>
@endsection
