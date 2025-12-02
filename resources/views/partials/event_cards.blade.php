{{-- resources/views/partials/event_cards.blade.php --}}
@foreach ($events as $event)
    <div
        class="event-card group bg-white rounded-xl md:rounded-2xl shadow-md hover:shadow-xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2 border border-gray-100"
        data-category="{{ $event->is_promo ? 'promo' : 'event' }}">

        <!-- Image Section -->
        <div class="relative h-40 sm:h-48 md:h-56 overflow-hidden bg-gradient-to-br from-gray-100 to-gray-200">
            @if ($event->image)
                <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            @else
                <div class="w-full h-full flex items-center justify-center">
                    <svg class="w-12 h-12 sm:w-14 sm:h-14 text-gray-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
            @endif

            <!-- Overlay Gradient -->
            <div
                class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>

            <!-- Category Badge -->
            <div class="absolute top-2 left-2 sm:top-3 sm:left-3">
                <span
                    class="inline-flex items-center space-x-1 px-2 py-0.5 sm:px-2.5 sm:py-1 rounded-full text-[9px] sm:text-[10px] font-semibold text-white shadow-md
                    {{ $event->is_promo ? 'bg-gradient-to-r from-green-500 to-emerald-600' : 'bg-gradient-to-r from-orange-500 to-red-500' }}">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                        @if($event->is_promo)
                            <path fill-rule="evenodd"
                                d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd" />
                        @else
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd" />
                        @endif
                    </svg>
                    <span>{{ $event->is_promo ? 'Promo' : 'Event' }}</span>
                </span>
            </div>

            <!-- Date Badge -->
            <div
                class="absolute top-2 right-2 bg-white/90 backdrop-blur-sm rounded-lg p-1.5 text-center shadow-md min-w-[38px]">
                <div class="text-sm font-bold text-gray-900 leading-none">
                    {{ \Carbon\Carbon::parse($event->start_at)->format('d') }}
                </div>
                <div class="text-[8px] font-semibold text-blue-600 leading-none mt-0.5">
                    {{ \Carbon\Carbon::parse($event->start_at)->format('M') }}
                </div>
            </div>
        </div>

        <!-- Content Section -->
        <div class="p-3 sm:p-4 md:p-5">
            <h3
                class="text-sm sm:text-base md:text-lg font-bold text-gray-900 mb-1.5 sm:mb-2 line-clamp-2 group-hover:text-blue-600 transition-colors leading-tight min-h-[36px] sm:min-h-[48px]">
                {{ $event->title }}
            </h3>

            <p
                class="text-gray-600 text-[11px] sm:text-sm mb-2 sm:mb-3 line-clamp-2 leading-relaxed min-h-[28px] sm:min-h-[36px]">
                {!! Str::limit(strip_tags($event->description), 90) !!}
            </p>

            <!-- Meta Information -->
            <div class="flex items-center text-[10px] sm:text-xs text-gray-500 mb-2 sm:mb-3">
                <svg class="w-3.5 h-3.5 text-blue-500 mr-1.5 flex-shrink-0" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span
                    class="line-clamp-1">{{ \Carbon\Carbon::parse($event->start_at)->translatedFormat('d F Y') }}</span>
            </div>

            <!-- CTA Button -->
            <a href="{{ route('event.show', $event->slug) }}"
                class="group/btn w-full inline-flex items-center justify-center space-x-1.5 sm:space-x-2 bg-gradient-to-r from-blue-500 to-purple-500 text-white font-semibold py-1.5 sm:py-2 md:py-2.5 px-3 rounded-lg hover:from-blue-600 hover:to-purple-600 transition-all duration-300 transform hover:-translate-y-0.5 shadow-sm hover:shadow-md text-[11px] sm:text-sm">
                <span>Lihat Detail</span>
                <svg class="w-3.5 h-3.5 group-hover/btn:translate-x-1 transition-transform" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </div>
@endforeach
