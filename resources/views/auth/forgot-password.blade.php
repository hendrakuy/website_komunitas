@extends('layouts.auth')

@section('title', __('Forgot Password'))

@section('content')
<!-- Header Section -->
<div class="bg-gradient-to-r from-orange-600 to-red-600 px-8 py-10 text-center">
    <div class="mb-4">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-white bg-opacity-20 rounded-full backdrop-blur-sm">
            <i class="fas fa-unlock-alt text-white text-3xl"></i>
        </div>
    </div>
    <h2 class="text-3xl font-bold text-white mb-2">{{ __('Forgot Password?') }}</h2>
    <p class="text-orange-100">{{ __('No worries, we\'ll send you reset instructions') }}</p>
</div>

<!-- Body Section -->
<div class="px-8 py-10">
    <!-- Success Alert -->
    @if (session('status'))
        <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-lg animate-fade-in">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <i class="fas fa-check-circle text-green-500 text-xl"></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-green-800">
                        {{ session('status') }}
                    </p>
                </div>
            </div>
        </div>
    @endif

    <!-- Lock Icon Illustration -->
    <div class="text-center mb-6">
        <div class="inline-flex items-center justify-center w-20 h-20 bg-orange-100 rounded-full mb-4">
            <i class="fas fa-envelope text-orange-600 text-3xl"></i>
        </div>
        <p class="text-gray-600 text-sm max-w-sm mx-auto">
            {{ __('Enter your email address and we\'ll send you a link to reset your password.') }}
        </p>
    </div>

    <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
        @csrf

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
                    class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all @error('email') border-red-500 @enderror" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required 
                    autocomplete="email" 
                    autofocus
                    placeholder="Enter your registered email"
                >
            </div>
            @error('email')
                <p class="mt-2 text-sm text-red-600 flex items-center">
                    <i class="fas fa-exclamation-circle mr-1"></i>
                    {{ $message }}
                </p>
            @enderror
        </div>

        <!-- Send Reset Link Button -->
        <div class="pt-2">
            <button 
                type="submit" 
                class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-semibold text-white bg-gradient-to-r from-orange-600 to-red-600 hover:from-orange-700 hover:to-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 transition-all transform hover:-translate-y-0.5 hover:shadow-lg"
            >
                <i class="fas fa-paper-plane mr-2"></i>
                {{ __('Send Reset Link') }}
            </button>
        </div>

        <!-- Information Box -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded-lg">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <i class="fas fa-info-circle text-blue-500"></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-blue-800">
                        {{ __('The password reset link will be valid for 60 minutes. Check your spam folder if you don\'t receive the email.') }}
                    </p>
                </div>
            </div>
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

        <!-- Back to Login -->
        <div class="text-center">
            <a href="{{ route('login') }}" class="text-sm font-semibold text-orange-600 hover:text-orange-500 transition-colors inline-flex items-center">
                <i class="fas fa-arrow-left mr-2"></i>
                {{ __('Back to Login') }}
            </a>
        </div>
    </form>

    <!-- Additional Help -->
    <div class="mt-8 pt-6 border-t border-gray-200">
        <div class="text-center">
            <p class="text-sm text-gray-600 mb-2">
                {{ __('Need more help?') }}
            </p>
            <a href="#" class="text-sm font-medium text-orange-600 hover:text-orange-500 transition-colors inline-flex items-center">
                <i class="fas fa-headset mr-2"></i>
                {{ __('Contact Support') }}
            </a>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="bg-gray-50 px-8 py-4 text-center border-t border-gray-200">
    <p class="text-xs text-gray-500">
        &copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('All rights reserved.') }}
    </p>
</div>
@endsection