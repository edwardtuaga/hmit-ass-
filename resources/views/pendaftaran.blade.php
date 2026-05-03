@extends('layouts.app')
@section('content')
    <h2 class="text-2xl font-bold mb-5">Form Pendaftaran Anggota HMIT</h2>
    <form action="{{ route('member.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block">NIM</label>
            <input type="text" name="nim" class="w-full border p-2 rounded" required>
        </div>
        <div>
            <label class="block">Nama Lengkap</label>
            <input type="text" name="nama" class="w-full border p-2 rounded" required>
        </div>
        <div>
            <label class="block">Angkatan</label>
            <input type="number" name="angkatan" class="w-full border p-2 rounded" required>
        </div>
        <button class="bg-blue-600 text-white px-4 py-2 rounded">Daftar Sekarang</button>
    </form>
@endsection