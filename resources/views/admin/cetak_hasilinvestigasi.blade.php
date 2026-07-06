<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Rekapitulasi {{ $jenisRekap == 'laporan' ? 'Laporan' : 'Hasil Investigasi' }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        *{ margin:0; padding:0; box-sizing:border-box; font-family:Calibri, Arial, sans-serif; }
        body{ background:#fff; padding:20px; color:#000; font-size:12px; }

        /* FITUR KEMBALI */
        .btn-back { 
            position: absolute; top: 20px; left: 20px; 
            text-decoration: none; color: #64748b; font-size: 13px; 
            display: flex; align-items: center; gap: 8px; 
        }
        .btn-back:hover { color: #1d4ed8; }

        /* KOP SURAT */
        .kop-surat { margin-bottom: 20px; margin-top: 30px; }
        .kop-header {
            display: grid;
            grid-template-columns: 100px 1fr 100px;
            align-items: center;
            gap: 15px;
            width: 100%;
        }
        .kop-header img { width: 80px; height: 80px; object-fit: contain; }
        .kop-header img:last-child { justify-self: end; }
        .kop-text { text-align: center; }
        .kop-text h1 { font-size: 20px; margin-bottom: 2px; }
        .kop-text h2 { font-size: 16px; margin-bottom: 2px; }
        .garis { border-bottom: 3px solid #000; margin-top: 10px; }

        .card { margin-bottom: 20px; }
        .filter { display: flex; flex-wrap: wrap; gap:10px; margin-bottom:15px; }
        select, button { padding:8px 12px; border:1px solid #999; }
        button { cursor:pointer; background:#1d4ed8; color:white; }
        .print { background:#16a34a; }
        table { width:100%; border-collapse:collapse; margin-top:10px; }
        th { background:#d9d9d9; border:1px solid #000; padding:8px; text-align:center; }
        td { border:1px solid #000; padding:6px; }
        .center { text-align:center; }
        .footer { margin-top:15px; font-weight:bold; }
        .signature { margin-top:40px; width:100%; }
        .signature td { border:none; text-align:center; padding-top:20px; }

        @media print{
            .btn-back, button, select { display:none; }
            body { padding:0; }
        }
    </style>
</head>

<body>

<a href="{{ route('admin.investigasi.index') }}" class="btn-back">
    <i class="fa-solid fa-arrow-left"></i> Kembali
</a>

<div class="kop-surat">
    <div class="kop-header">
        <img src="{{ asset('images/logo-polbeng.png') }}" alt="Logo Polbeng">
        <div class="kop-text">
            <h2>SATUAN TUGAS</h2>
            <h2>PENCEGAHAN DAN PENANGANAN KEKERASAN SEKSUAL</h2>
            <h1>POLITEKNIK NEGERI BENGKALIS</h1>
            <h2 style="margin-top:10px;">REKAPITULASI {{ strtoupper($jenisRekap == 'laporan' ? 'LAPORAN' : 'HASIL INVESTIGASI') }}</h2>
            <p>Tanggal Cetak : {{ date('d-m-Y H:i') }}</p>
        </div>
        <img src="{{ asset('images/logo-ppks.png') }}" alt="Logo PPKS">
    </div>
    <div class="garis"></div>
</div>

<div class="card">
    <form method="GET">
        <div class="filter">
            <select name="bulan"><option value="">Semua Bulan</option>@for($i=1;$i<=12;$i++)<option value="{{$i}}" {{request('bulan')==$i?'selected':''}}>{{$i}}</option>@endfor</select>
            <select name="tahun"><option value="">Semua Tahun</option><option value="2026" {{request('tahun')=='2026'?'selected':''}}>2026</option><option value="2025" {{request('tahun')=='2025'?'selected':''}}>2025</option></select>
            <select name="jenis_kasus"><option value="">Semua Jenis Kasus</option><option value="Verbal" {{request('jenis_kasus')=='Verbal'?'selected':''}}>Verbal</option><option value="Fisik" {{request('jenis_kasus')=='Fisik'?'selected':''}}>Fisik</option><option value="KBGO" {{request('jenis_kasus')=='KBGO'?'selected':''}}>KBGO</option><option value="Relasi Kuasa" {{request('jenis_kasus')=='Relasi Kuasa'?'selected':''}}>Relasi Kuasa</option></select>
            <select name="jenis_rekap"><option value="laporan" {{$jenisRekap=='laporan'?'selected':''}}>Rekap Laporan</option><option value="investigasi" {{$jenisRekap=='investigasi'?'selected':''}}>Rekap Hasil Investigasi</option></select>
            <button type="submit">Filter</button>
        </div>
    </form>
    <button onclick="window.print()" class="print">Cetak Laporan</button>
</div>

<div class="card">
    @if($jenisRekap == 'laporan')

    <h3>DETAIL DATA LAPORAN</h3>

    <table>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Jenis Kasus</th>
            <th>Nama Pemeriksa</th>
            <th>Tingkat Risiko</th>
            <th>Status</th>
            <th>Tgl Inv</th>
        </tr>

        @forelse($laporans as $i => $l)
        <tr>
            <td class="center">{{ $i+1 }}</td>
            <td>{{ $l->kode_laporan }}</td>
            <td>{{ $l->jenis_kasus }}</td>
            <td>{{ $l->investigasi->nama_pemeriksa ?? '-' }}</td>
            <td>{{ $l->investigasi->tingkat_risiko ?? '-' }}</td>
            <td>{{ $l->investigasi->status_investigasi ?? '-' }}</td>
            <td>
                {{ $l->investigasi?->tanggal_investigasi
                    ? \Carbon\Carbon::parse($l->investigasi->tanggal_investigasi)->format('d-m-Y')
                    : '-' }}
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7" class="center">Tidak ada data</td>
        </tr>
        @endforelse

    </table>

@else

    <h3>DETAIL HASIL INVESTIGASI</h3>

    <table>
        @foreach($laporans as $i => $l)
        <tr>
            <td class="center">{{ $i+1 }}</td>
            <td>{{ $l->kode_laporan }}</td>
            <td>{{ $l->jenis_kasus }}</td>
            <td>{{ $l->investigasi->nama_pemeriksa ?? '-' }}</td>
            <td>{{ $l->investigasi->tingkat_risiko ?? '-' }}</td>
            <td>{{ $l->investigasi->status_investigasi ?? '-' }}</td>
            <td>
                {{ $l->investigasi?->tanggal_investigasi
                    ? \Carbon\Carbon::parse($l->investigasi->tanggal_investigasi)->format('d-m-Y')
                    : '-' }}
            </td>
        </tr>
        @endforeach
    </table>

@endif
</div>

<table class="signature">
    <tr>
        <td>Mengetahui,<br>Ketua Satgas PPKS<br><br><br>(____________________)</td>
        <td>Bengkalis, {{ date('d F Y') }}<br>Administrator Sistem<br><br><br>(____________________)</td>
    </tr>
</table>

</body>
</html>