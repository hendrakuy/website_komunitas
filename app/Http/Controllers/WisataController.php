<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wisatas = Wisata::orderBy('created_at', 'asc')->paginate(9);

        return view('komunitas.wisata', compact('wisatas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function wisataDetail($slug)
    {
        $wisata = Wisata::where('slug', $slug)->firstOrFail();
        
        // Get related wisatas (excluding current one)
        $relatedWisatas = Wisata::where('id', '!=', $wisata->id)
            ->inRandomOrder()
            ->take(3)
            ->get();
            
        return view('komunitas.wisata-detail', compact('wisata', 'relatedWisatas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
