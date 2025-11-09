<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewContactMessage;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Cegah spam & bot
        if ($request->filled('website')) {
            return back()->withErrors(['error' => 'Spam detected.']);
        }

        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => ['required', 'regex:/^08[0-9]{8,12}$/'],
            'subject' => 'nullable|string|max:150',
            'message' => 'required|string|min:10|max:1000',
        ]);

        // Simpan pesan kontak
        ContactMessage::create($validated);

        // Log informasi
        Log::info('Pesan kontak baru:', [
            'ip' => $request->ip(),
            'email' => $validated['email'],
            'time' => now(),
        ]);

        // kirim notifikasi email ke admin
        Mail::to(config('contact.admin_email'))
            ->send(new NewContactMessage($validated));

        // return redirect()->route('contact')->with('success', 'Pesan Anda telah dikirim.');
        return back()->with('success', 'Terima kasih, Pesan Anda telah kami terima.');
    }
}
