@extends('layouts.auth')

@section('title', __('Verify Email'))

@section('content')
<!-- Header Section -->
<div class="bg-gradient-to-r from-blue-600 to-cyan-600 px-8 py-10 text-center">
    <div class="mb-4">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-white bg-opacity-20 rounded-full backdrop-blur-sm">
            <i class="fas fa-envelope-open-text text-white text-3xl"></i>
        </div>
    </div>
    <h2 class="text-3xl font-bold text-white mb-2">{{ __('Verify Your Email') }}</h2>
    <p class="text-blue-100">{{ __('We sent you a verification link') }}</p>
</div>

<!-- Body Section -->
<div class="px-8 py-10">
    <!-- Success Alert -->
    @if (session('resent'))
        <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-lg animate-fade-in">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <i class="fas fa-check-circle text-green-500 text-xl"></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-green-800">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </p>
                </div>
            </div>
        </div>
    @endif

    <!-- Email Icon Illustration -->
    <div class="text-center mb-6">
        <div class="inline-flex items-center justify-center w-24 h-24 bg-blue-100 rounded-full mb-4">
            <i class="fas fa-envelope text-blue-600 text-4xl"></i>
        </div>
    </div>

    <!-- Instructions -->
    <div class="bg-gray-50 rounded-lg p-6 mb-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
            <i class="fas fa-info-circle text-blue-600 mr-2"></i>
            {{ __('What to do next?') }}
        </h3>
        <ol class="space-y-3 text-sm text-gray-700">
            <li class="flex items-start">
                <span class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-xs font-bold mr-3">1</span>
                <span>{{ __('Check your email inbox for a verification message') }}</span>
            </li>
            <li class="flex items-start">
                <span class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-xs font-bold mr-3">2</span>
                <span>{{ __('Click the verification link in the email') }}</span>
            </li>
            <li class="flex items-start">
                <span class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-xs font-bold mr-3">3</span>
                <span>{{ __('You\'ll be redirected back to continue') }}</span>
            </li>
        </ol>
    </div>

    <!-- Resend Section -->
    <div class="text-center">
        <p class="text-gray-600 mb-4">
            {{ __('If you did not receive the email') }}
        </p>
        <form method="POST" action="{{ route('verification.resend') }}" class="inline-block">
            @csrf
            <button 
                type="submit" 
                class="inline-flex items-center px-6 py-3 border border-transparent rounded-lg shadow-sm text-sm font-semibold text-white bg-gradient-to-r from-blue-600 to-cyan-600 hover:from-blue-700 hover:to-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all transform hover:-translate-y-0.5 hover:shadow-lg"
            >
                <i class="fas fa-redo-alt mr-2"></i>
                {{ __('Resend Verification Email') }}
            </button>
        </form>
    </div>

    <!-- Help Text -->
    <div class="mt-8 pt-6 border-t border-gray-200">
        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded-lg">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <i class="fas fa-lightbulb text-yellow-600"></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-yellow-800">
                        <strong>{{ __('Tip:') }}</strong> 
                        {{ __('Check your spam or junk folder if you don\'t see the email in your inbox.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Logout Option -->
    <div class="mt-6 text-center">
        <form method="POST" action="{{ route('logout') }}" class="inline-block">
            @csrf
            <button 
                type="submit" 
                class="text-sm text-gray-600 hover:text-gray-800 transition-colors inline-flex items-center"
            >
                <i class="fas fa-sign-out-alt mr-2"></i>
                {{ __('Sign out and try different account') }}
            </button>
        </form>
    </div>
</div>

<!-- Footer -->
<div class="bg-gray-50 px-8 py-4 text-center border-t border-gray-200">
    <p class="text-xs text-gray-500">
        &copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('All rights reserved.') }}
    </p>
</div>
@endsection