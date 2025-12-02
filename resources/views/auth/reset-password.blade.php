@extends('layouts.auth')

@section('title', __('Reset Password'))

@section('content')
<!-- Header Section -->
<div class="bg-gradient-to-r from-emerald-600 to-teal-600 px-8 py-10 text-center">
    <div class="mb-4">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-white bg-opacity-20 rounded-full backdrop-blur-sm">
            <i class="fas fa-key text-white text-3xl"></i>
        </div>
    </div>
    <h2 class="text-3xl font-bold text-white mb-2">{{ __('Reset Password') }}</h2>
    <p class="text-emerald-100">{{ __('Create a new password for your account') }}</p>
</div>

<!-- Body Section -->
<div class="px-8 py-10">
    <!-- Info Alert -->
    <div class="mb-6 bg-blue-50 border-l-4 border-blue-500 p-4 rounded-lg">
        <div class="flex items-start">
            <div class="flex-shrink-0">
                <i class="fas fa-info-circle text-blue-500 text-xl"></i>
            </div>
            <div class="ml-3">
                <p class="text-sm text-blue-800">
                    {{ __('Please enter your email address and create a new strong password.') }}
                </p>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('password.update') }}" class="space-y-5">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

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
                    class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all @error('email') border-red-500 @enderror" 
                    name="email" 
                    value="{{ $email ?? old('email') }}" 
                    required 
                    autocomplete="email" 
                    autofocus
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
                {{ __('New Password') }}
            </label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fas fa-lock text-gray-400"></i>
                </div>
                <input 
                    id="password" 
                    type="password" 
                    class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all @error('password') border-red-500 @enderror" 
                    name="password" 
                    required 
                    autocomplete="new-password"
                    placeholder="Create a new password"
                >
            </div>
            @error('password')
                <p class="mt-2 text-sm text-red-600 flex items-center">
                    <i class="fas fa-exclamation-circle mr-1"></i>
                    {{ $message }}
                </p>
            @enderror
            <p class="mt-1 text-xs text-gray-500">
                <i class="fas fa-shield-alt mr-1"></i>
                {{ __('Use at least 8 characters with a mix of letters, numbers & symbols') }}
            </p>
        </div>

        <!-- Confirm Password Field -->
        <div>
            <label for="password-confirm" class="block text-sm font-semibold text-gray-700 mb-2">
                {{ __('Confirm New Password') }}
            </label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fas fa-check-circle text-gray-400"></i>
                </div>
                <input 
                    id="password-confirm" 
                    type="password" 
                    class="block w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all" 
                    name="password_confirmation" 
                    required 
                    autocomplete="new-password"
                    placeholder="Confirm your new password"
                >
            </div>
        </div>

        <!-- Password Requirements -->
        <div class="bg-gray-50 rounded-lg p-4">
            <h4 class="text-sm font-semibold text-gray-700 mb-3 flex items-center">
                <i class="fas fa-check-double text-emerald-600 mr-2"></i>
                {{ __('Password Requirements:') }}
            </h4>
            <ul class="space-y-2 text-xs text-gray-600">
                <li class="flex items-start">
                    <i class="fas fa-check text-emerald-500 mr-2 mt-0.5"></i>
                    <span>{{ __('At least 8 characters long') }}</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check text-emerald-500 mr-2 mt-0.5"></i>
                    <span>{{ __('Include uppercase and lowercase letters') }}</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check text-emerald-500 mr-2 mt-0.5"></i>
                    <span>{{ __('Include at least one number') }}</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check text-emerald-500 mr-2 mt-0.5"></i>
                    <span>{{ __('Include at least one special character (!@#$%^&*)') }}</span>
                </li>
            </ul>
        </div>

        <!-- Reset Password Button -->
        <div class="pt-2">
            <button 
                type="submit" 
                class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-semibold text-white bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-all transform hover:-translate-y-0.5 hover:shadow-lg"
            >
                <i class="fas fa-sync-alt mr-2"></i>
                {{ __('Reset Password') }}
            </button>
        </div>

        <!-- Back to Login -->
        <div class="text-center pt-4">
            <a href="{{ route('login') }}" class="text-sm font-medium text-emerald-600 hover:text-emerald-500 transition-colors inline-flex items-center">
                <i class="fas fa-arrow-left mr-2"></i>
                {{ __('Back to Login') }}
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