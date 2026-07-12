<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Status Laporan - Sistem Pelaporan Anonim</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

   <style>

:root{
    --primary:#2563eb;
    --accent:#38bdf8;
    --success:#16a34a;
    --warning:#f59e0b;

    --bg:#eef6ff;
    --card:rgba(255,255,255,.75);

    --text:#0f172a;
    --muted:#64748b;

    --border:rgba(37,99,235,.15);
}


*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}


body{

    min-height:100vh;

    background:
    radial-gradient(circle at top left,#bfdbfe,transparent 35%),
    radial-gradient(circle at bottom right,#ccfbf1,transparent 35%),
    linear-gradient(135deg,#eaf3ff,#f8fafc);


    color:var(--text);

    display:flex;

    justify-content:center;

    align-items:center;

    padding:40px 20px;

}




body::before{

    content:"";

    position:absolute;

    inset:0;


    background-image:

    linear-gradient(
    rgba(37,99,235,.05) 1px,
    transparent 1px),

    linear-gradient(
    90deg,
    rgba(37,99,235,.05) 1px,
    transparent 1px);


    background-size:40px 40px;

    z-index:-1;

}




.card{


    width:100%;

    max-width:850px;


    background:var(--card);


    backdrop-filter:blur(22px);


    border:

    1px solid var(--border);


    border-radius:24px;


    padding:45px;


    box-shadow:

    0 25px 50px rgba(15,23,42,.15);


    position:relative;

}




.card::before{


    content:"";


    position:absolute;


    top:0;

    left:0;


    width:100%;


    height:4px;


    background:

    linear-gradient(
        90deg,
        #2563eb,
        #38bdf8
    );


    border-radius:24px 24px 0 0;

}




h2{


    text-align:center;


    margin-bottom:30px;


    font-size:28px;


    font-weight:800;


    color:#0f172a;

}







form{


    display:flex;

    gap:12px;

    margin-bottom:35px;

}





input{


    flex:1;


    padding:16px 20px;


    border:

    1px solid #dbeafe;


    border-radius:14px;


    background:#ffffffcc;


    color:#0f172a;


    outline:none;

}



input::placeholder{

    color:#94a3b8;

}



input:focus{


    border-color:#2563eb;


    box-shadow:

    0 0 0 4px rgba(37,99,235,.12);

}





button{


    padding:16px 28px;


    border:none;


    border-radius:14px;


    background:

    linear-gradient(
        135deg,
        #2563eb,
        #38bdf8
    );


    color:white;


    cursor:pointer;


    font-weight:700;

}





button:hover{


    transform:translateY(-2px);


    box-shadow:

    0 10px 25px rgba(37,99,235,.25);

}





.section-box{


    background:

    rgba(255,255,255,.55);


    border:

    1px solid rgba(37,99,235,.12);


    padding:30px;


    border-radius:20px;


    margin-bottom:25px;

}





.section-title{


    font-size:16px;


    font-weight:700;


    color:#1e3a8a;


    margin-bottom:20px;


    padding-bottom:10px;


    border-bottom:

    1px solid #dbeafe;

}





.item{


    display:flex;


    justify-content:space-between;


    padding:14px 0;


    border-bottom:

    1px solid #e2e8f0;


    font-size:14px;

}





.item:last-child{

    border-bottom:none;

}




.label{


    color:#64748b;


    font-weight:600;

}





.item b{


    color:#0f172a;


    text-align:right;


    max-width:70%;


}





.text-block{


    background:#f8fafc;


    padding:15px;


    border-radius:12px;


    color:#334155;


    line-height:1.7;


    border:1px solid #e2e8f0;

}





.badge{


    padding:6px 14px;


    border-radius:12px;


    font-size:12px;


    font-weight:700;

}



.badge-proses{

background:#fef3c7;

color:#b45309;

}



.badge-selesai{

background:#dcfce7;

color:#15803d;

}



.badge-tolak{

background:#fee2e2;

color:#b91c1c;

}






.timeline-wrapper{


    padding-left:20px;


    border-left:

    2px solid #93c5fd;

}



.timeline-item{


    margin-bottom:20px;


    color:#475569;

}



.timeline-item strong{

    color:#1e3a8a;

}




.box{


    margin-top:15px;


    background:#ffffffaa;


    padding:20px;


    border-radius:14px;


    border:1px solid #dbeafe;

}



.box h4{

    color:#2563eb;

    margin-bottom:8px;

}



.box p{

    color:#475569;

    font-size:13px;

}




.btn-bukti{


    color:#2563eb;

    text-decoration:none;

    font-weight:600;

}



.btn-bukti:hover{

    text-decoration:underline;

}




.back{


    display:flex;


    justify-content:center;


    margin-top:35px;


    color:#64748b;


    text-decoration:none;

}




.back:hover{

    color:#2563eb;

}





.notfound{


    margin-top:25px;


    padding:18px;


    border-radius:14px;


    background:#fee2e2;


    color:#b91c1c;


    text-align:center;

}






@media(max-width:768px){


.card{

padding:25px;

}


form{

flex-direction:column;

}



button{

width:100%;

}



.item{

flex-direction:column;

gap:8px;

}


.item b{

text-align:left;

max-width:100%;

}


}


</style>
</head>
<body>

<div class="card animate__animated animate__fadeInUp">

    <h2><i class="fa-solid fa-magnifying-glass" style="color: #3b82f6; margin-right: 10px;"></i>Cek Status Laporan</h2>

    <form method="GET" action="{{ route('pengguna.cek_status') }}">
        <input 
            type="text" 
            name="kode_laporan" 
            placeholder="Masukkan token / kode rahasia laporan Anda" 
            value="{{ request('kode_laporan') }}" 
            required>
        <button type="submit">
            <i class="fa-solid fa-bolt"></i> Periksa Laporan
        </button>
    </form>

    @if($laporan)
        
        <div class="section-box animate__animated animate__fadeIn">
            <div class="section-title">
                <i class="fa-solid fa-file-export" style="color: #60a5fa;"></i> Data Berkas Laporan Anda
            </div>

            <div class="item">
                <span class="label"><i class="fa-solid fa-hashtag"></i> Token Rahasia</span>
                <b style="color: #38bdf8; font-family: monospace; font-size: 16px; letter-spacing: 1px;">{{ $laporan->kode_laporan }}</b>
            </div>

            <div class="item">
                <span class="label"><i class="fa-solid fa-folder-open"></i> Kategori Kasus</span>
                <b>{{ $laporan->jenis_kasus }}</b>
            </div>

            <div class="item">
                <span class="label"><i class="fa-solid fa-location-dot"></i> Lokasi Kejadian</span>
                <b>{{ $laporan->lokasi }}</b>
            </div>

            <div class="item">
                <span class="label"><i class="fa-solid fa-calendar-clock"></i> Waktu Insiden</span>
                <b>{{ \Carbon\Carbon::parse($laporan->waktu_kejadian)->format('d M Y H:i') }} WIB</b>
            </div>

            <div class="item">
                <span class="label"><i class="fa-solid fa-spinner"></i> Status Penanganan</span>
                <span class="badge 
                    @if($laporan->status == 'Selesai') badge-selesai 
                    @elseif($laporan->status == 'Ditolak') badge-tolak 
                    @else badge-proses @endif">
                    {{ $laporan->status }}
                </span>
            </div>

            <div class="item">
                <span class="label"><i class="fa-solid fa-building-shield"></i> Status Investigasi Satgas</span>
                <b>{{ $laporan->investigasi->status_investigasi ?? 'Belum Diinvestigasi' }}</b>
            </div>

            <div class="item">
    <span class="label">
        <i class="fa-solid fa-paperclip"></i> Bukti Pendukung
    </span>

    @if($laporan->bukti && count($laporan->bukti) > 0)

        @foreach($laporan->bukti as $file)

            <a href="{{ asset('storage/'.$file) }}"
               target="_blank"
               class="btn-bukti">

                <i class="fa-solid fa-file-arrow-down"></i>
                Lihat Bukti {{ $loop->iteration }}

            </a><br><br>

        @endforeach

    @else

        <span style="color:#475569;font-style:italic;">
            Tidak ada bukti yang diunggah.
        </span>

    @endif
</div>

            <div style="margin-top: 20px;">
                <span class="label" style="margin-bottom: 8px;"><i class="fa-solid fa-align-left"></i> Kronologi Kejadian yang Dilaporkan:</span>
                <div class="text-block">
                    {{ $laporan->deskripsi ?? 'Pelapor tidak menyertakan deskripsi kronologi tambahan.' }}
                </div>
            </div>
@if($laporan->status == 'Ditolak' && $laporan->catatan)

<div style="margin-top:20px;">
    <span class="label" style="margin-bottom:8px;color:#dc2626;">
        <i class="fa-solid fa-circle-exclamation"></i>
        Alasan Laporan Ditolak
    </span>

    <div class="text-block"
         style="background:#fef2f2;
                border-left:4px solid #dc2626;
                color:#991b1b;">
        {{ $laporan->catatan }}
    </div>
</div>

@endif
            @if($laporan->investigasi?->catatan_admin)
                <div style="margin-top: 20px;">
                    <span class="label" style="margin-bottom: 8px; color: #fbbf24;"><i class="fa-solid fa-comment-dots"></i> Catatan Khusus dari Admin:</span>
                    <div class="text-block" style="border-color: rgba(245, 158, 11, 0.3); background: rgba(245, 158, 11, 0.02); color: #fbbf24;">
                        {{ $laporan->investigasi->catatan_admin }}
                    </div>
                </div>
            @endif
        </div>

        <div class="section-box animate__animated animate__fadeIn">
            <div class="section-title">
                <i class="fa-solid fa-timeline" style="color: #a7f3d0;"></i> Jejak Penanganan & Alur Riwayat Laporan
            </div>
            
            <div class="timeline-wrapper">
                <div class="timeline-item">
                    <strong>Laporan Berhasil Diinput ke Sistem</strong>
                    {{ $laporan->created_at ? $laporan->created_at->format('d M Y H:i') : '-' }} WIB
                </div>

                @if($laporan->updated_at)
                    <div class="timeline-item">
                        <strong>Perubahan Status & Pembaruan Data Terakhir</strong>
                        {{ $laporan->updated_at->format('d M Y H:i') }} WIB
                    </div>
                @endif

                @if($laporan->investigasi?->tanggal_investigasi)
                    <div class="timeline-item">
                        <strong>Tim Investigasi Satgas Menyelesaikan Penyelidikan Lapangan</strong>
                        {{ \Carbon\Carbon::parse($laporan->investigasi->tanggal_investigasi)->format('d M Y H:i') }} WIB
                    </div>
                @endif

                @if($laporan->status == 'Selesai')
                    <div class="timeline-item" style="color: #34d399;">
                        <strong>Kasus Resmi Ditutup & Selesai Ditangani Sepenuhnya</strong>
                        {{ $laporan->updated_at->format('d M Y H:i') }} WIB
                    </div>
                @endif
            </div>
        </div>

        @if($laporan->investigasi)
            <div class="section-box animate__animated animate__fadeInUp">
                <div class="section-title" style="color: #60a5fa;">
                    <i class="fa-solid fa-folder-open"></i> Hasil Investigasi Satgas PPKS
                </div>

                <div class="box">
                    <h4><i class="fa-solid fa-user"></i> Nama Pemeriksa / Tim</h4>
                    <p>{{ $laporan->investigasi->nama_pemeriksa ?? '-' }}</p>
                </div>

                <div class="box">
                    <h4><i class="fa-solid fa-location-dot"></i> Tempat Pemeriksaan</h4>
                    <p>{{ $laporan->investigasi->tempat_pemeriksaan ?? '-' }}</p>
                </div>

                <div class="box">
                    <h4><i class="fa-solid fa-circle-info"></i> Status Investigasi</h4>
                    <p>{{ $laporan->investigasi->status_investigasi ?? '-' }}</p>
                </div>

                <div class="box">
                    <h4><i class="fa-solid fa-triangle-exclamation"></i> Tingkat Risiko</h4>
                    <p>{{ $laporan->investigasi->tingkat_risiko ?? '-' }}</p>
                </div>

                <div class="box">
                    <h4><i class="fa-solid fa-clipboard-list"></i> Temuan Investigasi</h4>
                    <p style="white-space: pre-line;">{{ $laporan->investigasi->temuan_investigasi ?? $laporan->investigasi->kronologi_investigasi ?? '-' }}</p>
                </div>

                <div class="box">
                    <h4><i class="fa-solid fa-file-lines"></i> Kronologi Investigasi</h4>
                    <p style="white-space: pre-line;">{{ $laporan->investigasi->kronologi_investigasi ?? '-' }}</p>
                </div>

                <div class="box">
                    <h4><i class="fa-solid fa-paperclip"></i> Bukti Investigasi</h4>
                    <p style="white-space: pre-line;">{{ $laporan->investigasi->bukti_investigasi ?? '-' }}</p>
                </div>

                <div class="box">
                    <h4><i class="fa-solid fa-shield-check"></i> Validitas Investigasi</h4>
                    <p>{{ $laporan->investigasi->validitas_investigasi ?? '-' }}</p>
                </div>

                <div class="box">
                    <h4><i class="fa-solid fa-square-poll-vertical"></i> Kesimpulan Investigasi</h4>
                    <p style="white-space: pre-line;">{{ $laporan->investigasi->kesimpulan_investigasi ?? '-' }}</p>
                </div>

                <div class="box" style="border-left: 3px solid #2563eb; background: rgba(37, 99, 235, 0.02);">
                    <h4><i class="fa-solid fa-star"></i> Rekomendasi Investigasi / Resmi Tim Satgas</h4>
                    <p style="white-space: pre-line;">{{ $laporan->investigasi->rekomendasi_investigasi ?? '-' }}</p>
                </div>

                <div class="box">
                    <h4><i class="fa-solid fa-calendar-days"></i> Tanggal Investigasi</h4>
                    <p>
                        @if($laporan->investigasi->tanggal_investigasi)
                            {{ \Carbon\Carbon::parse($laporan->investigasi->tanggal_investigasi)->format('d F Y H:i') }} WIB
                        @else
                            -
                        @endif
                    </p>
                </div>

                <div class="box">
                    <h4><i class="fa-solid fa-folder"></i> Lampiran Investigasi</h4>
                    @if($laporan->investigasi->lampiran_investigasi)
                        <a href="{{ asset('storage/'.$laporan->investigasi->lampiran_investigasi) }}" target="_blank" class="btn-bukti">
                            <i class="fa-solid fa-download"></i> Lihat Lampiran
                        </a>
                    @else
                        <p>Tidak ada lampiran.</p>
                    @endif
                </div>

                <div class="box">
                    <h4><i class="fa-solid fa-comment-dots"></i> Catatan Admin</h4>
                    <p style="white-space: pre-line;">{{ $laporan->investigasi->catatan_admin ?? '-' }}</p>
                </div>
            </div>
        @endif

    @elseif(request('kode_laporan'))
        <div class="notfound animate__animated animate__headShake">
            <i class="fa-solid fa-triangle-exclamation"></i> Token / Kode Laporan tidak valid atau tidak terdaftar di sistem.
        </div>
    @endif

    <a href="/" class="back">
        <i class="fa-solid fa-arrow-left-long"></i> Kembali ke Beranda
    </a>

</div>

</body>
</html>