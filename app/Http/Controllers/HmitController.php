<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Aspiration;

class HmitController extends Controller {
    public function index() { return view('pendaftaran'); }

    public function storeMember(Request $request) {
        $request->validate(['nim'=>'required|unique:members','nama'=>'required','angkatan'=>'required']);
        Member::create($request->all());
        return back()->with('success', 'Pendaftaran Berhasil!');
    }

    public function aspirasi() {
        if (!request()->hasCookie('student_nim')) return redirect()->route('login.mahasiswa');
        return view('aspirasi');
    }

    public function storeAspiration(Request $request) {
        // Proses simpan aspirasi
        Aspiration::create([
            'nim' => $request->nim,
            'pesan' => $request->pesan
        ]);
        return back()->with('success', 'Aspirasi Terkirim!');
    }

    public function admin() {
        if (!session()->has('admin_user')) return redirect()->route('login.admin');
        $members = Member::all();
        $aspirations = Aspiration::with('member')->get();
        return view('admin', compact('members', 'aspirations'));
    }

    public function destroyMember($id) { Member::destroy($id); return back(); }
    public function destroyAspiration($id) { Aspiration::destroy($id); return back(); }
}