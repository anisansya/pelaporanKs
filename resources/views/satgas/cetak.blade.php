<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<title>Cetak Hasil Investigasi</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

.sidebar{
    width:260px;
    height:100vh;
    position:fixed;
    left:0;
    top:0;
    background:#030b2b;
    padding:15px;
    color:white;
}

.logo{
    display:flex;
    align-items:center;
    gap:10px;
    margin-bottom:30px;
}

.logo img{
    width:45px;
    height:45px;
    object-fit:contain;
}

.logo h2{
    font-size:18px;
}

.logo span{
    font-size:12px;
    color:#94a3b8;
}

.menu{
    list-style:none;
    display:flex;
    flex-direction:column;
    gap:10px;
}

.menu li a{
    display:flex;
    gap:12px;
    align-items:center;
    padding:12px;
    border-radius:10px;
    text-decoration:none;
    color:#cbd5e1;
    transition:0.3s;
}

.menu li a:hover,
.menu li.active a{
    background:#2563eb;
    color:white;
}

body{
    margin-left:260px;
}

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}


body{
background:#eef2ff;
padding:30px;
}



.card{

background:white;
max-width:1000px;
margin:auto;
padding:40px;
border-radius:20px;
box-shadow:0 10px 25px #0002;

}



/* KOP */

.kop{

display:flex;
align-items:center;
justify-content:space-between;
gap:20px;

}


.kop img{

width:80px;
height:80px;
object-fit:contain;

}


.kop-text{

flex:1;
text-align:center;

}


.kop-text h2{

font-size:16px;

}


.kop-text h1{

font-size:22px;
color:#1e40af;

}


.garis{

border-bottom:3px solid black;
margin:20px 0;

}




.judul{

text-align:center;
font-size:20px;
font-weight:bold;
margin-bottom:25px;
text-transform:uppercase;

}




table{

width:100%;
border-collapse:collapse;

}



td{

border:1px solid #d1d5db;
padding:14px;
vertical-align:top;

}


.label{

width:35%;
background:#e1f0da;
font-weight:bold;

}



.footer{

text-align:center;
margin-top:30px;
font-style:italic;
color:#64748b;

}



.btn-area{

margin-top:30px;
display:flex;
justify-content:flex-end;
gap:15px;

}



.btn{

padding:12px 20px;
border-radius:10px;
border:none;
cursor:pointer;
text-decoration:none;
font-weight:bold;

}



.print{

background:#2563eb;
color:white;

}


.back{

background:#e2e8f0;
color:#111827;

}



@media print {

    @page {
        size: A4;
        margin: 10mm;
    }

    body {
        background: white !important;
        padding: 0 !important;
        margin: 0 !important;
    }

    /* sembunyikan sidebar & tombol */
    .sidebar,
    .btn-area {
        display: none !important;
    }

    /* hapus margin kiri sidebar */
    body {
        margin-left: 0 !important;
    }

    .card {
        box-shadow: none !important;
        border-radius: 0 !important;
        padding: 10px !important;
        max-width: 100% !important;
    }

    /* perkecil spacing supaya muat 1 halaman */
    table td {
        padding: 6px !important;
        font-size: 12px !important;
    }

    .judul {
        font-size: 16px !important;
        margin-bottom: 10px !important;
    }

    .kop-text h1 {
        font-size: 18px !important;
    }

    .kop-text h2 {
        font-size: 13px !important;
    }

    .kop img {
        width: 60px !important;
        height: 60px !important;
    }

    .footer {
        margin-top: 10px !important;
        font-size: 11px !important;
    }

    /* penting: hindari halaman terpotong */
    table {
        page-break-inside: avoid;
    }

    tr {
        page-break-inside: avoid;
    }
}



</style>

</head>


<body>


<div class="card">

<!-- SIDEBAR -->
<div class="sidebar">

    <div class="logo">
        <img src="{{ asset('images/logo-polbeng.png') }}" alt="Logo">
        <div>
            <h2>Satgas PPKS</h2>
            <span>Riwayat Investigasi</span>
        </div>
    </div>

    <ul class="menu">

        <li>
            <a href="{{ route('satgas.dashboard') }}">
                <i class="fa-solid fa-house"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li>
            <a href="{{ route('satgas.laporan') }}">
                <i class="fa-solid fa-folder-open"></i>
                <span>Laporan Masuk</span>
            </a>
        </li>

        <li class="active">
            <a href="{{ route('satgas.riwayat') }}">
                <i class="fa-solid fa-clock-rotate-left"></i>
                <span>Riwayat Investigasi</span>
            </a>
        </li>

        <li>
            <a href="{{ route('logout') }}">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Logout</span>
            </a>
        </li>

    </ul>

</div>

<div class="kop">


<img src="{{asset('images/logo-polbeng.png')}}">



<div class="kop-text">


<h2>SATUAN TUGAS</h2>

<h2>
PENCEGAHAN DAN PENANGANAN KEKERASAN SEKSUAL
</h2>


<h1>
POLITEKNIK NEGERI BENGKALIS
</h1>


</div>



<img src="{{asset('images/logo-ppks.png')}}">



</div>



<div class="garis"></div>




<div class="judul">

HASIL INVESTIGASI LAPORAN

</div>




<table>



<tr>
<td class="label">Kode Laporan</td>
<td>
{{$laporan->kode_laporan}}
</td>
</tr>



<tr>
<td class="label">Tanggal Laporan</td>
<td>
{{$laporan->created_at->format('d F Y H:i')}}
</td>
</tr>




<tr>
<td class="label">Jenis Kasus</td>
<td>
{{$laporan->jenis_kasus}}
</td>
</tr>



<tr>
<td class="label">Lokasi Kejadian</td>
<td>
{{$laporan->lokasi}}
</td>
</tr>




<tr>
<td class="label">Waktu Kejadian</td>
<td>
{{\Carbon\Carbon::parse($laporan->waktu_kejadian)->format('d F Y H:i')}}
</td>
</tr>




<tr>
<td class="label">Kronologi Kejadian</td>
<td style="white-space:pre-line">
{{$laporan->deskripsi}}
</td>
</tr>




<tr>
<td class="label">Alasan Pengaduan</td>
<td>
{{$laporan->alasan_pengaduan}}
</td>
</tr>




<tr>
<td class="label">Kebutuhan Korban</td>
<td>
{{$laporan->kebutuhan_korban ?? '-'}}
</td>
</tr>




<tr>
<td class="label">Status</td>
<td>
{{$laporan->status}}
</td>
</tr>




<tr>
    <td class="label">Nama Pemeriksa</td>
    <td>
        {{$laporan->investigasi->nama_pemeriksa ?? '-'}}
    </td>
</tr>

<tr>
    <td class="label">Tempat Pemeriksaan</td>
    <td>
        {{$laporan->investigasi->tempat_pemeriksaan ?? '-'}}
    </td>
</tr>

<tr>
    <td class="label">Tingkat Risiko</td>
    <td>
        {{$laporan->investigasi->tingkat_risiko ?? '-'}}
    </td>
</tr>

<tr>
    <td class="label">Kronologi Investigasi</td>
    <td style="white-space:pre-line">
        {{$laporan->investigasi->kronologi_investigasi ?? '-'}}
    </td>
</tr>

<tr>
    <td class="label">Bukti Investigasi</td>
    <td style="white-space:pre-line">
        {{$laporan->investigasi->bukti_investigasi ?? '-'}}
    </td>
</tr>

<tr>
    <td class="label">Validitas Investigasi</td>
    <td style="white-space:pre-line">
        {{$laporan->investigasi->validitas_investigasi ?? '-'}}
    </td>
</tr>

<tr>
    <td class="label">Kesimpulan Investigasi</td>
    <td style="white-space:pre-line">
        {{$laporan->investigasi->kesimpulan_investigasi ?? '-'}}
    </td>
</tr>

<tr>
    <td class="label">Rekomendasi Investigasi</td>
    <td style="white-space:pre-line">
        {{$laporan->investigasi->rekomendasi_investigasi ?? '-'}}
    </td>
</tr>

<tr>
    <td class="label">Catatan Admin</td>
    <td style="white-space:pre-line">
        {{$laporan->investigasi->catatan_admin ?? '-'}}
    </td>
</tr>

<tr>
    <td class="label">Tanggal Investigasi</td>
    <td>
        {{$laporan->investigasi && $laporan->investigasi->tanggal_investigasi
            ? \Carbon\Carbon::parse($laporan->investigasi->tanggal_investigasi)->format('d F Y H:i')
            : '-'}}
    </td>
</tr>

<td style="white-space:pre-line">

{{$laporan->catatan ?? '-'}}

</td>

</tr>



</table>




<div class="footer">

- Satgas Pencegahan Anti Kekerasan Seksual Politeknik Negeri Bengkalis -

</div>




<div class="btn-area">


<button onclick="window.print()" class="btn print">

<i class="fa fa-print"></i>
Cetak

</button>



<a href="{{route('satgas.riwayat')}}" class="btn back">

Kembali

</a>



</div>



</div>


</body>

</html>