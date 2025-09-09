@extends('layouts.app')

@section('content')
  <h1 class="text-2xl font-bold mb-6">Kontak Kami</h1>

  <div class="bg-white rounded-xl shadow p-6 max-w-lg">
    <form action="#" method="POST" class="space-y-4">
      @csrf

      <div>
        <label for="name" class="block text-sm font-medium">Nama</label>
        <input type="text" id="name" name="name"
          class="mt-1 w-full rounded-lg border border-slate-300 p-2 focus:ring focus:ring-indigo-200">
      </div>

      <div>
        <label for="email" class="block text-sm font-medium">Email</label>
        <input type="email" id="email" name="email"
          class="mt-1 w-full rounded-lg border border-slate-300 p-2 focus:ring focus:ring-indigo-200">
      </div>

      <div>
        <label for="message" class="block text-sm font-medium">Pesan</label>
        <textarea id="message" name="message" rows="4"
          class="mt-1 w-full rounded-lg border border-slate-300 p-2 focus:ring focus:ring-indigo-200"></textarea>
      </div>

      <button type="submit"
        class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
        Kirim
      </button>
    </form>
  </div>
@endsection
