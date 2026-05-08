@extends('layouts.app')

@section('content')
<div class="p-6 space-y-10">
    <h2 class="text-3xl font-bold mb-6 text-gray-800">Dashboard Admin HMIT</h2>

    <div class="bg-white p-6 shadow-lg rounded-xl border border-gray-100">
        <h3 class="text-xl font-bold mb-4 text-blue-600 italic">DAFTAR PENDAFTAR HMIT</h3>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse text-left">
                <thead>
                    <tr class="bg-gray-50 text-gray-700">
                        <th class="p-3 border-b font-semibold">NIM</th>
                        <th class="p-3 border-b font-semibold">Nama Lengkap</th>
                        <th class="p-3 border-b font-semibold text-center">Angkatan</th>
                        <th class="p-3 border-b font-semibold text-center">Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($members as $m)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="p-3 border-b font-mono text-sm">{{ $m->nim }}</td>
                        <td class="p-3 border-b font-bold">{{ $m->nama }}</td>
                        <td class="p-3 border-b text-center">{{ $m->angkatan }}</td>
                        <td class="p-3 border-b text-center">
                            <form action="{{ route('member.delete', $m->id) }}" method="POST" onsubmit="return confirm('Hapus anggota ini?')">
                                @csrf @method('DELETE')
                                <button class="text-red-500 hover:scale-110 transition">🗑️</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="bg-white p-6 shadow-lg rounded-xl border border-gray-100">
        <h3 class="text-xl font-bold mb-4 text-green-600 italic">PESAN ASPIRASI</h3>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse text-left">
                <thead>
                    <tr class="bg-gray-50 text-gray-700">
                        <th class="p-3 border-b font-semibold">Pengirim</th>
                        <th class="p-3 border-b font-semibold">Pesan</th>
                        <th class="p-3 border-b font-semibold text-center">Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($aspirations as $a)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="p-3 border-b">
                            <span class="font-bold block text-blue-700">{{ $a->member->nama ?? 'Member Terhapus' }}</span>
                            <span class="text-xs text-gray-500 font-mono">{{ $a->nim }}</span>
                        </td>
                        <td class="p-3 border-b text-gray-700">{{ $a->pesan }}</td>
                        <td class="p-3 border-b text-center">
                            <form action="{{ route('aspirasi.delete', $a->id) }}" method="POST" onsubmit="return confirm('Hapus aspirasi ini?')">
                                @csrf @method('DELETE')
                                <button class="text-red-500 hover:scale-110 transition">🗑️</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection