@extends('layouts.app')
@section('content')
<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-4 text-blue-600">Sampaikan Aspirasi</h2>
    
    @if(session('success'))
        <div class="bg-green-100 p-3 mb-4 text-green-700 rounded">{{ session('success') }}</div>
    @endif

    <form action="{{ route('aspirasi.store') }}" method="POST">
        @csrf <input type="hidden" name="nim" value="{{ request()->cookie('student_nim') }}">
        
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2 text-sm italic">NIM Login: {{ request()->cookie('student_nim') }}</label>
            <textarea name="pesan" rows="4" class="w-full border p-2 rounded focus:ring-2 focus:ring-blue-400 outline-none" placeholder="Tulis aspirasi kamu..." required></textarea>
        </div>
        
        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">Kirim Sekarang</button>
    </form>
</div>
@endsection