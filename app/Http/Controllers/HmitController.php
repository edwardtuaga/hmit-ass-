<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Aspiration;

class HmitController extends Controller
{
    // Halaman Pendaftaran (Halaman Utama)
    public function index() {
        return view('pendaftaran');
    }

    public function storeMember(Request $request) {
        $request->validate([
            'nim' => 'required|unique:members',
            'nama' => 'required',
            'angkatan' => 'required'
        ]);
        Member::create($request->all());
        return back()->with('success', 'Berhasil mendaftar anggota!');
    }

    // Halaman Aspirasi
    public function aspirasi() {
        return view('aspirasi');
    }

    public function storeAspiration(Request $request) {
        $request->validate(['pesan' => 'required']);
        Aspiration::create($request->all());
        return back()->with('success', 'Aspirasi terkirim!');
    }

    // Halaman Admin
    public function admin() {
        $members = Member::all();
        $aspirations = Aspiration::all();
        return view('admin', compact('members', 'aspirations'));
    }

    public function destroyMember($id) {
        Member::destroy($id);
        return back()->with('success', 'Data anggota dihapus');
    }

    public function destroyAspiration($id) {
        Aspiration::destroy($id);
        return back()->with('success', 'Aspirasi dihapus');
    }
}