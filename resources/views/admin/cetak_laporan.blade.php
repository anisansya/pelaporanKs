<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Rekapitulasi Laporan KS</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Calibri, Arial, sans-serif;
        }

        body{
            background:#fff;
            padding:20px;
            font-size:12px;
            color:#000;
        }

        .header{
            text-align:center;
            margin-bottom:20px;
        }

        hr{
            margin:15px 0;
            border:2px solid #000;
        }

        .card{
            margin-bottom:20px;
        }

        .filter{
            display:flex;
            gap:10px;
            margin-bottom:15px;
            flex-wrap:wrap;
        }

        select,
        button{
            padding:8px 12px;
            border:1px solid #999;
        }

        button{
            cursor:pointer;
            background:#1d4ed8;
            color:white;
        }

        .print{
            background:#16a34a;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:10px;
        }

        th{
            background:#d9d9d9;
            border:1px solid #000;
            padding:8px;
            text-align:center;
        }

        td{
            border:1px solid #000;
            padding:6px;
        }

        .center{
            text-align:center;
        }

        .footer{
            margin-top:15px;
            font-weight:bold;
        }

        .signature{
            margin-top:60px;
            width:100%;
        }

        .signature td{
            border:none;
            text-align:center;
            padding-top:40px;
        }

        @media print{
            button,
            select{
                display:none;
            }

            body{
                padding:0;
            }
        }
    </style>
</head>

<body>

<div class="header">

    <div style="
        display:flex;
        align-items:center;
        justify-content:space-between;
        gap:20px;
    ">

        <img
            src="{{ asset('images/logo-polbeng.png') }}"
            style="width:80px;height:80px;object-fit:contain;">

        <div style="flex:1;text-align:center;">
            <h2>SATUAN TUGAS</h2>
            <h2>PENCEGAHAN DAN PENANGANAN KEKERASAN SEKSUAL</h2>
            <h1 style="font-size:24px;">
                POLITEKNIK NEGERI BENGKALIS
            </h1>
        </div>

        <img
            src="{{ asset('images/logo-ppks.png') }}"
            style="width:80px;height:80px;object-fit:contain;">

    </div>

    <hr>

    <h1>
        REKAPITULASI
        {{ $jenisRekap == 'investigasi'
            ? 'HASIL INVESTIGASI'
            : 'LAPORAN' }}
    </h1>

    <p style="margin-top:10px;">
        Tanggal Cetak :
        {{ date('d-m-Y H:i') }}
    </p>

</div>

<div class="card">

    <form method="GET">

        <div class="filter">

            <select name="bulan">
                <option value="">Semua Bulan</option>

                @for($i=1;$i<=12;$i++)
                    <option value="{{ $i }}"
                        {{ request('bulan') == $i ? 'selected' : '' }}>
                        {{ $i }}
                    </option>
                @endfor
            </select>

            <select name="tahun">
                <option value="">Semua Tahun</option>

                <option value="2026"
                    {{ request('tahun') == '2026' ? 'selected' : '' }}>
                    2026
                </option>

                <option value="2025"
                    {{ request('tahun') == '2025' ? 'selected' : '' }}>
                    2025
                </option>
            </select>

            <select name="jenis_kasus">
                <option value="">Semua Jenis Kasus</option>

                <option value="Verbal"
                    {{ request('jenis_kasus') == 'Verbal' ? 'selected' : '' }}>
                    Verbal
                </option>

                <option value="Fisik"
                    {{ request('jenis_kasus') == 'Fisik' ? 'selected' : '' }}>
                    Fisik
                </option>

                <option value="KBGO"
                    {{ request('jenis_kasus') == 'KBGO' ? 'selected' : '' }}>
                    KBGO
                </option>

                <option value="Relasi Kuasa"
                    {{ request('jenis_kasus') == 'Relasi Kuasa' ? 'selected' : '' }}>
                    Relasi Kuasa
                </option>
            </select>

            <select name="jenis_rekap">
                <option value="laporan"
                    {{ $jenisRekap == 'laporan' ? 'selected' : '' }}>
                    Rekap Laporan
                </option>

                <option value="investigasi"
                    {{ $jenisRekap == 'investigasi' ? 'selected' : '' }}>
                    Rekap Hasil Investigasi
                </option>
            </select>

            <button type="submit">
                Filter
            </button>

        </div>

    </form>

    <button onclick="window.print()" class="print">
        Cetak Laporan
    </button>

</div>

@if($jenisRekap == 'laporan')

<h3>DETAIL DATA LAPORAN</h3>

<table>
<tr>
    <th>No</th>
    <th>Kode</th>
    <th>Jenis Kasus</th>
    <th>Lokasi</th>
    <th>Waktu Kejadian</th>
    <th>Status</th>
    <th>Tanggal Lapor</th>
</tr>

@foreach($laporans as $i => $l)
<tr>
    <td>{{ $i+1 }}</td>
    <td>{{ $l->kode_laporan }}</td>
    <td>{{ $l->jenis_kasus }}</td>
    <td>{{ $l->lokasi }}</td>
    <td>{{ $l->waktu_kejadian }}</td>
    <td>{{ $l->status }}</td>
    <td>{{ $l->created_at->format('d-m-Y') }}</td>
</tr>
@endforeach

</table>

    <div class="footer">
        TOTAL LAPORAN : {{ $laporans->count() }}
    </div>

</div>

@endif

<table class="signature">

    <tr>

        <td>
            Mengetahui,<br><br>
            Ketua Satgas PPKS
            <br><br><br><br><br>

            (____________________)
        </td>

        <td>
            Administrator Sistem
            <br><br><br><br><br>

            (____________________)
        </td>

    </tr>

</table>

</body>
</html>
