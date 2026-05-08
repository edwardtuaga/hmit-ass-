@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto">
    <div class="bg-white p-8 rounded-lg shadow-md border-t-4 border-blue-600">
        <h2 class="text-2xl font-bold mb-2 text-blue-600">Login Mahasiswa</h2>
        <p class="text-gray-500 text-sm mb-6 italic"></p>

        <form action="{{ route('login.mahasiswa.post') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block mb-1 font-semibold text-gray-700">Nomor Induk Mahasiswa (NIM)</label>
                <input type="text" name="nim" class="w-full border-2 border-gray-200 p-2 rounded focus:outline-none focus:border-blue-500" placeholder="Masukkan NIM Anda" required>
            </div>
            
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg font-bold hover:bg-blue-700 transition duration-200">
                Masuk ke Aspirasi
            </button>
        </form>
        
        <div class="mt-4 text-center">
            <a href="{{ route('pendaftaran') }}" class="text-sm text-blue-600 hover:underline">Belum daftar anggota? Klik di sini</a>
        </div>
    </div>
</div>
@endsection