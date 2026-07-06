<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $laporans = Laporan::latest()->get();

        return view(
            'pengguna.dashboard',
            compact('laporans')
        );
    }


    public function create()
    {
        return view('pengguna.create');
    }


    public function store(Request $request)
    {

        $request->validate([

            'jenis_kasus'      => 'required',
            'lokasi'           => 'required',
            'waktu_kejadian'   => 'required',

            'deskripsi'        => 'nullable',

            'kebutuhan_korban' => 'nullable|array',

            // MULTI FILE
            'bukti'            => 'nullable|array',
            'bukti.*'          => 'file|mimes:jpg,jpeg,png,pdf|max:2048',

        ]);


        // Generate kode laporan

        $kode = 'LAP-' . strtoupper(
            substr(md5(uniqid()), 0, 8)
        );


        // ==========================
        // ALASAN PENGADUAN
        // ==========================

        $alasanPengaduan = null;


        if ($request->has('alasan_pengaduan')) {


            $alasan = $request->alasan_pengaduan;


            if (
                in_array('Lainnya', $alasan) &&
                !empty($request->alasan_lainnya)
            ) {

                $index = array_search(
                    'Lainnya',
                    $alasan
                );


                $alasan[$index] =
                    'Lainnya: ' .
                    $request->alasan_lainnya;
            }


            $alasanPengaduan =
                implode(', ', $alasan);
        }



        // ==========================
        // KEBUTUHAN KORBAN
        // ==========================

        $kebutuhanKorban = null;


        if ($request->has('kebutuhan_korban')) {

            $kebutuhanKorban =
                implode(
                    ', ',
                    $request->kebutuhan_korban
                );

        }




        // ==========================
        // UPLOAD BANYAK BUKTI
        // ==========================

        $namaFile = [];


        if ($request->hasFile('bukti')) {


            foreach ($request->file('bukti') as $file) {


                $nama =
                    $file->store(
                        'bukti',
                        'public'
                    );


                $namaFile[] = $nama;

            }

        }





        // ==========================
        // SIMPAN DATABASE
        // ==========================


        $laporan = new Laporan();


        $laporan->kode_laporan =
            $kode;


        $laporan->judul =
            $request->jenis_kasus;


        $laporan->isi_laporan =
            $request->deskripsi;



        $laporan->jenis_kasus =
            $request->jenis_kasus;


        $laporan->alasan_pengaduan =
            $alasanPengaduan;


        $laporan->kebutuhan_korban =
            $kebutuhanKorban;


        $laporan->lokasi =
            $request->lokasi;


        $laporan->waktu_kejadian =
            $request->waktu_kejadian;


        $laporan->deskripsi =
            $request->deskripsi;



        // simpan banyak gambar JSON

        $laporan->bukti =
            json_encode($namaFile);



        $laporan->status =
            'Menunggu';


        $laporan->dikirim_satgas =
            0;



        $laporan->user_id =
            null;


        $laporan->satgas_id =
            null;



        $laporan->save();




        return view(
            'pengguna.kode-laporan',
            compact('laporan')
        );

    }



    public function cekStatus(Request $request)
    {

        $laporan = null;


        if ($request->filled('kode_laporan')) {


            $laporan =
                Laporan::with('investigasi')
                ->where(
                    'kode_laporan',
                    $request->kode_laporan
                )
                ->first();

        }


        return view(
            'pengguna.cek_status',
            compact('laporan')
        );

    }
}