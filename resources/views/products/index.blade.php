@extends('layouts.app')

@section('content')
  <h1 class="text-2xl font-bold mb-6">Daftar Produk Batik</h1>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    {{-- Contoh produk statis dulu --}}
    <div class="bg-white rounded-xl shadow p-4">
      <img src="https://via.placeholder.com/300x200" alt="Batik 1" class="rounded-lg mb-3">
      <h2 class="font-semibold text-lg">Batik Tulis Motif A</h2>
      <p class="text-slate-600 mb-2">Rp 250.000</p>
      <a href="#" class="text-indigo-600 hover:underline">Lihat Detail</a>
    </div>

    <div class="bg-white rounded-xl shadow p-4">
      <img src="https://via.placeholder.com/300x200" alt="Batik 2" class="rounded-lg mb-3">
      <h2 class="font-semibold text-lg">Batik Tulis Motif B</h2>
      <p class="text-slate-600 mb-2">Rp 300.000</p>
      <a href="#" class="text-indigo-600 hover:underline">Lihat Detail</a>
    </div>

    <div class="bg-white rounded-xl shadow p-4">
      <img src="https://via.placeholder.com/300x200" alt="Batik 3" class="rounded-lg mb-3">
      <h2 class="font-semibold text-lg">Batik Cap Motif C</h2>
      <p class="text-slate-600 mb-2">Rp 150.000</p>
      <a href="#" class="text-indigo-600 hover:underline">Lihat Detail</a>
    </div>
  </div>
@endsection
