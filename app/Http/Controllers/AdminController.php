<?php

namespace App\Http\Controllers;

use App\Models\Laporan;

class AdminController extends Controller
{
    public function index()
    {
        $laporans = Laporan::with('user')
            ->latest()
            ->get();

        return view('admin.dashboard', compact('laporans'));
    }

    public function updateStatus($id)
    {
        $laporan = Laporan::findOrFail($id);

        $laporan->update([
            'status' => request('status')
        ]);

        return back()->with('success', 'Status berhasil diupdate');
    }
}