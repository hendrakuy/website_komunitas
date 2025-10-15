@extends('layouts.app')

@section('content')
<section class="min-h-screen bg-gradient-to-br from-gray-50 to-blue-50 py-8 px-4 md:px-8 lg:px-16">
    <div class="max-w-6xl mx-auto">
        <!-- Modern Breadcrumb -->
        <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-sm">
                <li>
                    <a href="{{ route('home') }}" class="text-blue-500 hover:text-blue-700 transition-colors font-medium">
                        Beranda
                    </a>
                </li>
                <li class="flex items-center">
                    <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                    <a href="{{ route('event.index') }}"
                        class="text-blue-500 hover:text-blue-700 transition-colors font-medium">
                        Event & Promo
                    </a>
                </li>
                <li class="flex items-center">
                    <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                    <span class="text-gray-600 font-medium truncate max-w-xs">{{ $event->title }}</span>
                </li>
            </ol>
        </nav>

        {{-- Hero Section --}}
        <div class="relative rounded-3xl overflow-hidden shadow-2xl mb-12 group">
            @if ($event->image)
                <img src="{{ asset('storage/' . $event->image) }}" 
                     alt="{{ $event->title }}"
                     class="w-full h-[500px] object-cover transition-transform duration-700 group-hover:scale-105">
            @else
                <img src="/images/default_event.png"
                     alt="{{ $event->title }}"
                     class="w-full h-[500px] object-cover transition-transform duration-700 group-hover:scale-105">
            @endif
            
            {{-- Gradient Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
            
            {{-- Event Badge --}}
            <div class="absolute top-6 left-6">
                <span class="px-5 py-2.5 rounded-full text-sm font-bold tracking-wide shadow-lg
                             {{ $event->is_promo ? 'bg-gradient-to-r from-green-500 to-emerald-600' : 'bg-gradient-to-r from-orange-500 to-red-500' }} text-white">
                    {{ $event->is_promo ? '🎉 Promo Spesial' : '📅 Event' }}
                </span>
            </div>
            
            {{-- Event Info Overlay --}}
            <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                <div class="max-w-3xl">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4 leading-tight">{{ $event->title }}</h1>
                    
                    <div class="flex flex-wrap items-center gap-6 text-lg">
                        <div class="flex items-center bg-white/20 backdrop-blur-sm rounded-full px-4 py-2">
                            <i class="far fa-calendar-alt mr-2"></i>
                            <span>{{ \Carbon\Carbon::parse($event->start_at)->translatedFormat('d F Y') }}</span>
                        </div>
                        
                        {{-- <div class="flex items-center bg-white/20 backdrop-blur-sm rounded-full px-4 py-2">
                            <i class="far fa-clock mr-2"></i>
                            <span>{{ \Carbon\Carbon::parse($event->start_at)->format('H:i') }} WIB</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

        {{-- Content Section --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
            {{-- Main Content --}}
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 pb-4 border-b border-gray-100">Tentang Event</h2>
                    
                    <article class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        {!! $event->description !!}
                    </article>
                    
                    {{-- Action Buttons --}}
                    <div class="flex flex-wrap gap-4 mt-10 pt-6 border-t border-gray-100">
                        <a href="{{ route('event.index') }}" 
                           class="inline-flex items-center bg-gradient-to-r from-blue-600 to-indigo-700 text-white px-6 py-3 rounded-xl hover:from-blue-700 hover:to-indigo-800 transition-all shadow-lg hover:shadow-xl font-medium">
                           <i class="fas fa-arrow-left mr-2"></i>
                           Kembali ke Event
                        </a>
                        
                        {{-- <button class="inline-flex items-center bg-white border border-gray-300 text-gray-700 px-6 py-3 rounded-xl hover:bg-gray-50 transition-all shadow hover:shadow-md font-medium">
                            <i class="far fa-bookmark mr-2"></i>
                            Simpan Event
                        </button>
                        
                        <button class="inline-flex items-center bg-white border border-gray-300 text-gray-700 px-6 py-3 rounded-xl hover:bg-gray-50 transition-all shadow hover:shadow-md font-medium">
                            <i class="fas fa-share-alt mr-2"></i>
                            Bagikan
                        </button> --}}
                    </div>
                </div>
            </div>
            
            {{-- Sidebar --}}
            <div class="space-y-6">
                {{-- Quick Info Card --}}
                <div class="bg-gradient-to-br from-indigo-600 to-purple-700 rounded-2xl shadow-xl p-6 text-white">
                    <h3 class="text-xl font-bold mb-4">Informasi Event</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-white/20 p-2 rounded-lg mr-3">
                                <i class="far fa-calendar-alt text-sm"></i>
                            </div>
                            <div>
                                <p class="text-sm text-indigo-100">Tanggal</p>
                                <p class="font-medium">{{ \Carbon\Carbon::parse($event->start_at)->translatedFormat('d F Y') }}</p>
                            </div>
                        </div>
                        
                        {{-- <div class="flex items-start">
                            <div class="bg-white/20 p-2 rounded-lg mr-3">
                                <i class="far fa-clock text-sm"></i>
                            </div>
                            <div>
                                <p class="text-sm text-indigo-100">Waktu</p>
                                <p class="font-medium">{{ \Carbon\Carbon::parse($event->start_at)->format('H:i') }} WIB</p>
                            </div>
                        </div> --}}
                        
                        <div class="flex items-start">
                            <div class="bg-white/20 p-2 rounded-lg mr-3">
                                <i class="fas fa-tag text-sm"></i>
                            </div>
                            <div>
                                <p class="text-sm text-indigo-100">Kategori</p>
                                <p class="font-medium">{{ $event->is_promo ? 'Promo' : 'Event' }}</p>
                            </div>
                        </div>
                    </div>
                    
                    {{-- <button class="w-full mt-6 bg-white text-indigo-600 font-bold py-3 rounded-xl hover:bg-gray-100 transition-all shadow-lg">
                        Daftar Sekarang
                    </button> --}}
                </div>
                
                {{-- Organizer Info --}}
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Diselenggarakan Oleh</h3>
                    
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            {{ substr($event->organizer ?? 'Event', 0, 1) }}
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">{{ $event->organizer ?? 'Komunitas' }}</p>
                            <p class="text-sm text-gray-500">Penyelenggara Event</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Related Events --}}
        <div class="mb-12">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800">Event & Promo Lainnya</h2>
                <a href="{{ route('event.index') }}" class="text-indigo-600 hover:text-indigo-700 font-medium flex items-center">
                    Lihat Semua
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($relatedEvents as $item)
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                        <a href="{{ route('event.detail', $item->slug) }}" class="block">
                            <div class="relative h-48 overflow-hidden">
                                <img src="{{ asset('storage/' . $item->image) }}" 
                                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                     alt="{{ $item->title }}">
                                <div class="absolute top-4 right-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold 
                                                 {{ $item->is_promo ? 'bg-green-500' : 'bg-orange-500' }} text-white shadow-md">
                                        {{ $item->is_promo ? 'Promo' : 'Event' }}
                                    </span>
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <div class="p-5">
                                <h3 class="text-lg font-bold text-gray-900 mb-2 line-clamp-2 group-hover:text-indigo-600 transition-colors">{{ $item->title }}</h3>
                                <p class="text-sm text-gray-600 line-clamp-2 mb-3">{!! strip_tags($item->description) !!}</p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <i class="far fa-calendar-alt mr-2"></i>
                                    <span>{{ \Carbon\Carbon::parse($item->start_at)->translatedFormat('d M Y') }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection