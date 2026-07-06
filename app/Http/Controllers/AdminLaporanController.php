<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class AdminLaporanController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->status ?? 'semua';

        $query = Laporan::with(['user', 'investigasi']);

        if ($status !== 'semua') {
            $query->where('status', $status);
        }

        $laporans = $query->latest()->get();

        $count = [
            'semua'    => Laporan::count(),
            'Menunggu' => Laporan::where('status', 'Menunggu')->count(),
            'Diproses' => Laporan::where('status', 'Diproses')->count(),
            'Selesai'  => Laporan::where('status', 'Selesai')->count(),
            'Ditolak'  => Laporan::where('status', 'Ditolak')->count(),
        ];

        return view('admin.laporan_masuk', compact('laporans', 'count', 'status'));
    }

    public function detail($id)
    {
        $laporan = Laporan::with(['user', 'investigasi'])->findOrFail($id);

        return view('admin.laporan_detail', compact('laporan'));
    }

    public function verifikasiForm($id)
    {
        $laporan = Laporan::with('investigasi')->findOrFail($id);

        return view('admin.verifikasi', compact('laporan'));
    }

    public function verifikasi(Request $request, $id)
    {
        $request->validate([
            'status'  => 'required|in:Menunggu,Diproses,Selesai,Ditolak',
            'catatan' => 'nullable|string',
        ]);

        $laporan = Laporan::findOrFail($id);

        $laporan->update([
            'status' => $request->status,
            'catatan' => $request->catatan,
            'dikirim_satgas' => $request->has('kirim_satgas')
                ? 1
                : $laporan->dikirim_satgas,
        ]);

        return redirect()
            ->route('admin.laporan.index')
            ->with('success', 'Laporan berhasil diperbarui');
    }

    /*
    |--------------------------------------------------------------------------
    | CETAK LAPORAN
    |--------------------------------------------------------------------------
    */

    public function cetak(Request $request)
    {
        $query = Laporan::with(['user', 'investigasi']);

        if ($request->bulan) {
            $query->whereMonth('created_at', $request->bulan);
        }

        if ($request->tahun) {
            $query->whereYear('created_at', $request->tahun);
        }

        if ($request->jenis_kasus) {
            $query->where('jenis_kasus', $request->jenis_kasus);
        }

        $laporans = $query->latest()->get();

        return view('admin.cetak_laporan', compact('laporans'));
    }
}