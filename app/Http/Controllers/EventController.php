<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Umkm;
use App\Models\Batik;
use App\Models\Edupackage;
use App\Models\Award;

class EventController extends Controller
{
    // Halaman daftar event
    public function index()
    {
        $perPage = 6;
        $events = Event::orderBy('start_at', 'desc')->paginate($perPage)->withQueryString();

        return view('pages.event', compact('events'));
    }

    // Halaman detail event
    public function show($slug)
    {
        $umkms = Umkm::take(10)->get();
        $batiks = Batik::all();
        $edukasi = Edupackage::all();
        $award = Award::all();

        $event = Event::where('slug', $slug)->firstOrFail();

        $relatedEvents = Event::where('id', '!=', $event->id)
            ->orderBy('start_at', 'desc')
            ->take(3)
            ->get();

        return view('pages.event-detail', compact('event', 'relatedEvents', 'umkms', 'batiks', 'edukasi', 'award'));
    }

    public function loadMore(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = 6;

        $query = Event::orderBy('start_at', 'desc');

        // Jika ada filter (misal promo / event)
        if ($request->has('filter') && $request->filter !== 'all') {
            if ($request->filter === 'promo') {
                $query->where('is_promo', true);
            } else {
                $query->where('is_promo', false);
            }
        }

        $events = $query->paginate($perPage, ['*'], 'page', $page);

        // Render partial view (Blade berisi kumpulan card event)
        $html = view('partials.event_cards', compact('events'))->render();

        return response()->json([
            'success' => true,
            'html' => $html,
            'hasMore' => $events->hasMorePages(),
        ]);
    }
}
