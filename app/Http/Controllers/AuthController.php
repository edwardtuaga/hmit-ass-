<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    // --- LOGIN MAHASISWA (COOKIE) ---
    public function showStudentLogin() {
        if (request()->hasCookie('student_nim')) return redirect()->route('aspirasi');
        return view('login-mahasiswa');
    }

    public function loginStudent(Request $request) {
        $member = Member::where('nim', $request->nim)->first();
        if ($member) {
            // Menggunakan Cookie::queue untuk memasang cookie di browser selama 60 menit
            Cookie::queue('student_nim', $member->nim, 60);
            return redirect()->route('aspirasi')->with('success', 'Login Berhasil (Cookie Terpasang)');
        }
        return back()->withErrors(['nim' => 'NIM tidak terdaftar!']);
    }

    public function logoutStudent() {
        Cookie::queue(Cookie::forget('student_nim'));
        return redirect()->route('pendaftaran');
    }

    // --- LOGIN ADMIN (SESSION) ---
    public function showAdminLogin() {
        if (session()->has('admin_user')) return redirect()->route('admin');
        return view('login-admin');
    }

    public function loginAdmin(Request $request) {
        // Hardcoded untuk contoh tugas
        if ($request->username === 'adminhmit' && $request->password === 'admin123') {
            // Menggunakan session() helper untuk menyimpan data di server
            session(['admin_user' => 'Administrator']);
            return redirect()->route('admin')->with('success', 'Login Admin Berhasil (Session Aktif)');
        }
        return back()->withErrors(['error' => 'Kredensial Admin Salah!']);
    }

    public function logoutAdmin() {
        session()->forget('admin_user');
        return redirect()->route('pendaftaran');
    }
}
