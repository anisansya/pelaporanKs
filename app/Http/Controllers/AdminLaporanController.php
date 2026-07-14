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
        'status' => 'required|in:Menunggu,Diproses,Selesai,Ditolak',
    ]);

    $laporan = Laporan::findOrFail($id);

    // Jika tombol "Teruskan ke Satgas"
    if ($request->aksi == 'satgas') {

        $laporan->update([
            'status' => 'Diproses',
            'dikirim_satgas' => 1,
        ]);

        return redirect()
            ->route('admin.laporan.index')
            ->with('success', 'Laporan berhasil dikirim ke Satgas.');
    }

    // Jika tombol "Kembalikan ke Pelapor"
    if ($request->aksi == 'pelapor') {

        $laporan->update([
            'status' => 'Ditolak',
            'dikirim_satgas' => 0,
        ]);

        return redirect()
            ->route('admin.laporan.index')
            ->with('success', 'Laporan dikembalikan ke pelapor.');
    }

    return redirect()
        ->route('admin.laporan.index');
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