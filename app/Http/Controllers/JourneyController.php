<?php

namespace App\Http\Controllers;

use App\Models\Journey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JourneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $years = \App\Models\Journey::select('year')->distinct()->orderBy('year', 'desc')->pluck('year');
        $selectedYear = $request->get('year', $years->first());
        $journeys = \App\Models\Journey::where('year', $selectedYear)->get();

        return view('komunitas.perjalanan', compact('years', 'selectedYear', 'journeys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('journeys.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'year' => 'required|integer',
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('journeys', 'public');
        }

        Journey::create($validated);

        return redirect()->route('journeys.index')->with('success', 'Data perjalanan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Journey $journey)
    {
        return view('journeys.edit', compact('journey'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Journey $journey)
    {
        $validated = $request->validate([
            'year' => 'required|integer',
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($journey->image) {
                Storage::disk('public')->delete($journey->image);
            }
            $validated['image'] = $request->file('image')->store('journeys', 'public');
        }

        $journey->update($validated);

        return redirect()->route('journeys.index')->with('success', 'Data perjalanan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Journey $journey)
    {
        if ($journey->image) {
            Storage::disk('public')->delete($journey->image);
        }
        $journey->delete();

        return redirect()->route('journeys.index')->with('success', 'Data perjalanan berhasil dihapus!');
    }
}
