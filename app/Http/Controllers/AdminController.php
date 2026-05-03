<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Aspiration;

class AdminController extends Controller
{
    public function index() {
        $members = Member::all();
        $aspirations = Aspiration::all();
        return view('admin.index', compact('members', 'aspirations'));
    }

    public function destroyMember($id) {
        Member::findOrFail($id)->delete();
        return back()->with('success', 'Anggota dihapus.');
    }

    public function destroyAspirasi($id) {
        Aspiration::findOrFail($id)->delete();
        return back()->with('success', 'Aspirasi dihapus.');
    }
}