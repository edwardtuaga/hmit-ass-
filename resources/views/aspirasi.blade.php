@extends('layouts.app')
@section('content')
    <h2 class="text-2xl font-bold mb-5">Kanal Aspirasi Mahasiswa</h2>
    <form action="{{ route('aspirasi.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block">Nama (Opsional)</label>
            <input type="text" name="pengirim" class="w-full border p-2 rounded" placeholder="Anonim">
        </div>
        <div>
            <label class="block">Pesan Aspirasi</label>
            <textarea name="pesan" class="w-full border p-2 rounded" rows="4" required></textarea>
        </div>
        <button class="bg-green-600 text-white px-4 py-2 rounded">Kirim Aspirasi</button>
    </form>
@endsection