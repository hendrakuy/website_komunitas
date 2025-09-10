@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-lg shadow-md p-6">
        <img src="/images/{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-64 object-cover rounded-md mb-4">
        
        <h2 class="text-2xl font-bold">{{ $product['name'] }}</h2>
        <p class="text-blue-600 text-xl font-bold">Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
        
        <p class="mt-4">{{ $product['description'] }}</p>
        
        <a href="{{ route('shop.index') }}" class="mt-6 inline-block px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700">Kembali</a>
    </div>
@endsection
