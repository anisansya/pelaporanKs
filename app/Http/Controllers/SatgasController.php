<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\Investigasi;

class SatgasController extends Controller
{
   public function index()
{
    $laporans = Laporan::where(function ($query) {

            $query->where('dikirim_satgas', 1)
                  ->orWhere('status', 'Diproses')
                  ->orWhere('status', 'Selesai');

        })
        ->with('investigasi')
        ->latest()
        ->get();


    $laporanTeratas = Laporan::where('status', 'Diproses')
        ->with('investigasi')
        ->latest()
        ->take(5)
        ->get();


    /*
    |--------------------------------------------------------------------------
    | NOTIFIKASI SATGAS
    |--------------------------------------------------------------------------
    | Menampilkan laporan yang baru dikirim admin ke satgas
    | tetapi belum pernah dibuat investigasinya.
    */

    $notifications = Laporan::where('dikirim_satgas', 1)
        ->whereDoesntHave('investigasi')
        ->latest()
        ->take(5)
        ->get();

    $notifCount = $notifications->count();


    $count = [

        'semua' => $laporans->count(),

        'Menunggu' => $laporans
            ->where('status', 'Menunggu')
            ->count(),

        'Diproses' => $laporans
            ->where('status', 'Diproses')
            ->count(),

        'Selesai' => $laporans
            ->where('status', 'Selesai')
            ->count(),

        'Ditolak' => $laporans
            ->where('status', 'Ditolak')
            ->count(),

    ];


    return view('satgas.dashboard', compact(
        'laporans',
        'laporanTeratas',
        'count',
        'notifications',
        'notifCount'
    ));
}



    public function laporanMasuk()
    {
        $laporans = Laporan::where(function ($query) {

                $query->where('dikirim_satgas', 1)
                      ->orWhere('status', 'Diproses')
                      ->orWhere('status', 'Selesai');

            })
            ->with('investigasi')
            ->latest()
            ->get();


        return view(
            'satgas.laporan',
            compact('laporans')
        );
    }



    public function show($id)
    {
        $laporan = Laporan::with('investigasi')
            ->findOrFail($id);


        return view(
            'satgas.show',
            compact('laporan')
        );
    }




    public function kirimInvestigasi(Request $request, $id)
    {

        $request->validate([

            'nama_pemeriksa' => 'required',
            'tempat_pemeriksaan' => 'required',
            'tingkat_risiko' => 'required',
            'kronologi_investigasi' => 'required',

        ]);



        $laporan = Laporan::findOrFail($id);



        $existing = Investigasi::where(
            'laporan_id',
            $laporan->id
        )->first();



        $lampiran = $existing->lampiran_investigasi ?? null;



        // ===== BAGIAN INI YANG DIUBAH =====

        if ($request->hasFile('lampiran_investigasi')) {


            $lampirans = [];


            foreach ($request->file('lampiran_investigasi') as $file) {


                $lampirans[] = $file->store(
                    'investigasi',
                    'public'
                );


            }


            $lampiran = json_encode($lampirans);


        }


        // ================================




        Investigasi::updateOrCreate(

            [
                'laporan_id' => $laporan->id
            ],


            [

                'nama_pemeriksa'
                    => $request->nama_pemeriksa,


                'tempat_pemeriksaan'
                    => $request->tempat_pemeriksaan,


                'tingkat_risiko'
                    => $request->tingkat_risiko,


                'kronologi_investigasi'
                    => $request->kronologi_investigasi,


                'temuan_investigasi'
                    => $request->temuan_investigasi,


                'bukti_investigasi'
                    => $request->bukti_investigasi,


                'validitas_investigasi'
                    => $request->validitas_investigasi,


                'kesimpulan_investigasi'
                    => $request->kesimpulan_investigasi,


                'rekomendasi_investigasi'
                    => $request->rekomendasi_investigasi,


                'lampiran_investigasi'
                    => $lampiran,


                'tanggal_investigasi'
                    => now(),


                'status_investigasi'
                    => 'Menunggu Persetujuan Admin',


            ]

        );



        $laporan->update([

            'status' => 'Diproses'

        ]);



        return redirect()
            ->route('satgas.dashboard')
            ->with(
                'success',
                'Hasil investigasi berhasil dikirim ke Admin'
            );

    }





    public function selesai($id)
    {

        $laporan = Laporan::findOrFail($id);


        $laporan->update([

            'status' => 'Selesai'

        ]);



        return redirect()
            ->route('satgas.dashboard')
            ->with(
                'success',
                'Laporan berhasil diselesaikan'
            );

    }





    public function riwayat()
    {

        $laporans = Laporan::whereIn(

            'status',

            [
                'Selesai',
                'Ditolak'
            ]

        )
        ->with('investigasi')
        ->latest()
        ->get();



        return view(
            'satgas.riwayat',
            compact('laporans')
        );

    }





    public function cetak($id)
    {

        $laporan = Laporan::with('investigasi')
            ->findOrFail($id);



        return view(
            'satgas.cetak',
            compact('laporan')
        );

    }

}