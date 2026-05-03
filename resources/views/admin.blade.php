@extends('layouts.app')
@section('content')
    <h2 class="text-2xl font-bold mb-5">Panel Admin (Data SQLite)</h2>
    
    <h3 class="font-bold text-lg border-b-2 mb-3">Data Anggota</h3>
    <table class="w-full mb-8">
        <thead><tr class="bg-gray-200"><th>NIM</th><th>Nama</th><th>Aksi</th></tr></thead>
        <tbody>
            @foreach($members as $m)
            <tr class="border-b text-center">
                <td>{{ $m->nim }}</td>
                <td>{{ $m->nama }}</td>
                <td>
                    <form action="{{ route('member.delete', $m->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button class="text-red-500">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h3 class="font-bold text-lg border-b-2 mb-3">Data Aspirasi</h3>
    <table class="w-full">
        <thead><tr class="bg-gray-200"><th>Pengirim</th><th>Pesan</th><th>Aksi</th></tr></thead>
        <tbody>
            @foreach($aspirations as $a)
            <tr class="border-b text-center">
                <td>{{ $a->pengirim }}</td>
                <td class="p-2">{{ $a->pesan }}</td>
                <td>
                    <form action="{{ route('aspirasi.delete', $a->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button class="text-red-500">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection