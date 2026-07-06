<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Laporan Anonim - Politeknik Negeri Bengkalis</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <style>
        /* ==========================================================
   ROOT COLOR
========================================================== */

:root{
    --primary:#2563EB;
    --primary-dark:#0B4F9C;
    --secondary:#14B8A6;
    --warning:#F59E0B;

    --bg:#F8FAFC;
    --bg-soft:#EEF6FF;

    --text:#0F172A;
    --text-light:#64748B;

    --white:#FFFFFF;

    --border:#E2E8F0;

    --shadow:0 15px 35px rgba(15,23,42,.08);
    --shadow-hover:0 20px 45px rgba(37,99,235,.18);

    --transition:.35s ease;
}

/* ==========================================================
   RESET
========================================================== */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

html{
    scroll-behavior:smooth;
}

/* ==========================================================
   BODY
========================================================== */

body{

    min-height:100vh;

    color:var(--text);

    overflow-x:hidden;

    background:

    radial-gradient(
        circle at top left,
        rgba(37,99,235,.12),
        transparent 35%
    ),

    radial-gradient(
        circle at bottom right,
        rgba(20,184,166,.12),
        transparent 35%
    ),

    linear-gradient(
        180deg,

        #FFFFFF,

        #F8FAFC 35%,

        #EEF6FF 100%
    );

}

/* ==========================================================
   BACKGROUND GRID
========================================================== */

body::before{

    content:"";

    position:fixed;

    inset:0;

    pointer-events:none;

    background-image:

    linear-gradient(
        rgba(37,99,235,.03) 1px,
        transparent 1px
    ),

    linear-gradient(
        90deg,
        rgba(37,99,235,.03) 1px,
        transparent 1px
    );

    background-size:45px 45px;

    z-index:-2;

}

/* ==========================================================
   FLOATING LIGHT
========================================================== */

body::after{

    content:"";

    position:fixed;

    width:650px;
    height:650px;

    top:-200px;
    right:-180px;

    border-radius:50%;

    background:

    radial-gradient(

        rgba(37,99,235,.18),

        transparent 70%

    );

    filter:blur(35px);

    z-index:-1;

}

/* ==========================================================
   NAVBAR
========================================================== */

.navbar{

    position:sticky;

    top:0;

    z-index:999;

    display:flex;

    justify-content:space-between;

    align-items:center;

    padding:18px 60px;

    background:rgba(255,255,255,.75);

    backdrop-filter:blur(18px);

    border-bottom:1px solid rgba(37,99,235,.08);

    transition:var(--transition);

}

.navbar:hover{

    background:rgba(255,255,255,.92);

    box-shadow:0 10px 25px rgba(0,0,0,.05);

}

/* ==========================================================
   LOGO
========================================================== */

.logo{

    font-size:22px;

    font-weight:700;

    letter-spacing:.4px;

    background:

    linear-gradient(

        135deg,

        var(--primary-dark),

        var(--primary),

        var(--secondary)

    );

    -webkit-background-clip:text;

    -webkit-text-fill-color:transparent;

}

/* ==========================================================
   MENU
========================================================== */

.menu{

    display:flex;

    gap:30px;

}

.menu a{

    position:relative;

    text-decoration:none;

    color:var(--text-light);

    font-size:14px;

    font-weight:500;

    transition:var(--transition);

}

.menu a:hover{

    color:var(--primary);

}

.menu a.active{

    color:var(--primary);

    font-weight:600;

}

.menu a::after{

    content:"";

    position:absolute;

    left:50%;

    bottom:-8px;

    transform:translateX(-50%);

    width:0;

    height:3px;

    border-radius:10px;

    background:

    linear-gradient(

        to right,

        var(--primary),

        var(--secondary)

    );

    transition:var(--transition);

}

.menu a:hover::after,

.menu a.active::after{

    width:100%;

}

/* ==========================================================
   CONTAINER
========================================================== */

.container{

    width:90%;

    max-width:900px;

    margin:70px auto;

}

/* ==========================================================
   HEADER
========================================================== */

.page-header{

    text-align:center;

    margin-bottom:60px;

}

.page-header h1{

    font-size:46px;

    font-weight:800;

    line-height:1.2;

    margin-bottom:18px;

    background:

    linear-gradient(

        135deg,

        var(--primary-dark),

        var(--primary),

        var(--secondary)

    );

    -webkit-background-clip:text;

    -webkit-text-fill-color:transparent;

}

.page-header p{

    max-width:700px;

    margin:auto;

    font-size:15px;

    line-height:1.9;

    color:var(--text-light);

}

        /* FORM CARD */
        /* ==========================================================
   FORM CARD
========================================================== */

.card{
    background:#FFFFFF;
    border:1px solid var(--border);
    border-radius:24px;
    padding:45px;
    box-shadow:var(--shadow);
    position:relative;
    overflow:hidden;
    transition:var(--transition);
}

/* Border Gradient Atas */

.card::before{

    content:"";

    position:absolute;

    top:0;
    left:0;

    width:100%;
    height:5px;

    background:linear-gradient(
        to right,
        var(--primary),
        var(--secondary),
        var(--warning)
    );

}

/* Hover Card */

.card:hover{

    transform:translateY(-5px);

    box-shadow:var(--shadow-hover);

}

/* ==========================================================
   INFO BOX
========================================================== */

.info-box{

    display:flex;

    align-items:center;

    gap:18px;

    padding:20px 24px;

    margin-bottom:35px;

    background:linear-gradient(
        135deg,
        #EFF6FF,
        #ECFEFF
    );

    border:1px solid #BFDBFE;

    border-left:5px solid var(--primary);

    border-radius:16px;

    transition:var(--transition);

}

.info-box:hover{

    transform:translateY(-3px);

    box-shadow:0 12px 30px rgba(37,99,235,.12);

}

.info-box i{

    font-size:28px;

    color:var(--primary);

    transition:var(--transition);

}

.info-box:hover i{

    transform:scale(1.15);

    color:var(--secondary);

}

.info-box p{

    font-size:14px;

    color:#334155;

    line-height:1.7;

}

/* ==========================================================
   FORM GROUP
========================================================== */

.form-group{

    margin-bottom:28px;

}

/* ==========================================================
   LABEL
========================================================== */

label{

    display:block;

    margin-bottom:10px;

    font-size:14px;

    font-weight:600;

    color:var(--text);

}

.hint-text{

    display:block;

    margin-bottom:8px;

    font-size:12px;

    color:var(--text-light);

}

/* ==========================================================
   INPUT
========================================================== */

input:not([type="checkbox"]):not([type="radio"]),
select,
textarea{

    width:100%;

    padding:15px 18px;

    border:1px solid var(--border);

    border-radius:14px;

    background:#FFFFFF;

    color:var(--text);

    font-size:14px;

    outline:none;

    transition:all .35s ease;

}

/* Placeholder */

input::placeholder,
textarea::placeholder{

    color:#94A3B8;

}

/* Hover */

input:hover,
select:hover,
textarea:hover{

    border-color:#93C5FD;

}

/* Focus */

input:focus,
select:focus,
textarea:focus{

    border-color:var(--primary);

    background:#FFFFFF;

    box-shadow:

    0 0 0 4px rgba(37,99,235,.10),

    0 8px 25px rgba(37,99,235,.08);

}

/* ==========================================================
   SELECT
========================================================== */

select{

    cursor:pointer;

}

select option{

    background:#FFFFFF;

    color:#0F172A;

}

/* ==========================================================
   TEXTAREA
========================================================== */

textarea{

    resize:vertical;

    min-height:170px;

    line-height:1.8;

}

/* ==========================================================
   REQUIRED LABEL
========================================================== */

label.required::after{

    content:" *";

    color:#EF4444;

}

/* ==========================================================
   INPUT ICON (opsional)
========================================================== */

.input-group{

    position:relative;

}

.input-group i{

    position:absolute;

    top:50%;

    right:18px;

    transform:translateY(-50%);

    color:#94A3B8;

    transition:var(--transition);

}

.input-group:focus-within i{

    color:var(--primary);

}

        /* CUSTOM FILE UPLOAD BOX */
       /* ==========================================================
   UPLOAD CONTAINER
========================================================== */

.upload-container{

    position:relative;

    width:100%;

}

/* ==========================================================
   UPLOAD BOX
========================================================== */

.upload-box{

    position:relative;

    padding:45px 25px;

    border:2px dashed #BFDBFE;

    border-radius:20px;

    text-align:center;

    cursor:pointer;

    background:linear-gradient(
        180deg,
        #FFFFFF,
        #F8FAFC
    );

    transition:all .35s ease;

    overflow:hidden;

}

/* Hover */

.upload-box:hover{

    border-color:var(--primary);

    background:linear-gradient(
        180deg,
        #EFF6FF,
        #F8FAFC
    );

    transform:translateY(-4px);

    box-shadow:0 18px 40px rgba(37,99,235,.12);

}

/* Drag */

.upload-box.dragover{

    border-color:var(--secondary);

    background:#ECFEFF;

}

/* ==========================================================
   ICON
========================================================== */

.upload-box i{

    font-size:48px;

    margin-bottom:15px;

    color:var(--primary);

    transition:all .35s ease;

}

.upload-box:hover i{

    color:var(--secondary);

    transform:scale(1.15) translateY(-5px);

}

/* ==========================================================
   TITLE
========================================================== */

.upload-box p{

    font-size:15px;

    font-weight:600;

    color:var(--text);

    margin-bottom:8px;

}

/* ==========================================================
   DESCRIPTION
========================================================== */

.upload-box span{

    display:block;

    color:var(--text-light);

    font-size:13px;

    line-height:1.6;

}

/* ==========================================================
   INPUT FILE
========================================================== */

.upload-box input[type=file]{

    position:absolute;

    inset:0;

    width:100%;

    height:100%;

    opacity:0;

    cursor:pointer;

}

/* ==========================================================
   FILE NAME
========================================================== */

.file-name{

    margin-top:15px;

    padding:12px 16px;

    background:#EFF6FF;

    border:1px solid #BFDBFE;

    border-radius:12px;

    display:flex;

    align-items:center;

    justify-content:space-between;

    gap:10px;

    color:var(--primary-dark);

    font-size:14px;

    transition:all .35s ease;

}

.file-name i{

    color:var(--secondary);

}

/* ==========================================================
   FILE SUCCESS
========================================================== */

.file-success{

    margin-top:15px;

    display:flex;

    align-items:center;

    justify-content:center;

    gap:8px;

    color:#16A34A;

    font-size:14px;

    font-weight:500;

}

/* ==========================================================
   FILE SIZE
========================================================== */

.file-size{

    font-size:12px;

    color:#64748B;

}

/* ==========================================================
   REMOVE BUTTON
========================================================== */

.remove-file{

    width:32px;

    height:32px;

    border-radius:50%;

    border:none;

    background:#FEE2E2;

    color:#DC2626;

    cursor:pointer;

    transition:all .3s ease;

}

.remove-file:hover{

    background:#DC2626;

    color:#FFFFFF;

    transform:rotate(90deg);

}

/* ==========================================================
   UPLOAD ANIMATION
========================================================== */

@keyframes uploadFloat{

    0%{
        transform:translateY(0);
    }

    50%{
        transform:translateY(-6px);
    }

    100%{
        transform:translateY(0);
    }

}

.upload-box:hover i{

    animation:uploadFloat .8s ease infinite;

}

/* ==========================================================
   GLOW EFFECT
========================================================== */

.upload-box::before{

    content:"";

    position:absolute;

    width:250px;

    height:250px;

    background:rgba(37,99,235,.08);

    border-radius:50%;

    top:-140px;

    right:-120px;

    transition:.4s;

}

.upload-box:hover::before{

    transform:scale(1.3);

    background:rgba(20,184,166,.08);

}
        /* BUTTON SUBMIT MODERN */
        /* ==========================================================
   SUBMIT BUTTON
========================================================== */

.btn-submit{

    width:100%;

    padding:17px 24px;

    border:none;

    border-radius:16px;

    cursor:pointer;

    position:relative;

    overflow:hidden;

    display:flex;

    justify-content:center;

    align-items:center;

    gap:12px;

    font-size:15px;

    font-weight:600;

    letter-spacing:.5px;

    color:#FFFFFF;

    background:linear-gradient(
        135deg,
        var(--primary-dark),
        var(--primary),
        var(--secondary)
    );

    box-shadow:
    0 12px 30px rgba(37,99,235,.22);

    transition:all .35s ease;

}

/* Hover */

.btn-submit:hover{

    transform:translateY(-4px);

    box-shadow:
    0 20px 40px rgba(37,99,235,.28);

}

/* Active */

.btn-submit:active{

    transform:scale(.98);

}

/* Icon */

.btn-submit i{

    transition:.35s ease;

}

.btn-submit:hover i{

    transform:translateX(6px);

}

/* Efek Cahaya */

.btn-submit::before{

    content:"";

    position:absolute;

    top:0;

    left:-120%;

    width:70%;

    height:100%;

    background:rgba(255,255,255,.28);

    transform:skewX(-25deg);

    transition:.8s;

}

.btn-submit:hover::before{

    left:150%;

}

/* ==========================================================
   BUTTON LOADING
========================================================== */

.btn-submit.loading{

    pointer-events:none;

    opacity:.85;

}

.btn-submit.loading i{

    animation:spin .8s linear infinite;

}

@keyframes spin{

    from{

        transform:rotate(0deg);

    }

    to{

        transform:rotate(360deg);

    }

}

/* ==========================================================
   SUCCESS MESSAGE
========================================================== */

.alert-success{

    margin-top:20px;

    padding:16px 20px;

    border-radius:14px;

    background:#ECFDF5;

    border-left:5px solid #22C55E;

    color:#166534;

    display:flex;

    align-items:center;

    gap:12px;

    font-size:14px;

    animation:fadeUp .5s ease;

}

/* ==========================================================
   ERROR MESSAGE
========================================================== */

.alert-error{

    margin-top:20px;

    padding:16px 20px;

    border-radius:14px;

    background:#FEF2F2;

    border-left:5px solid #EF4444;

    color:#991B1B;

    display:flex;

    align-items:center;

    gap:12px;

    font-size:14px;

    animation:fadeUp .5s ease;

}

/* ==========================================================
   FOOTER
========================================================== */

footer{

    margin-top:70px;

    padding:35px 20px;

    text-align:center;

    border-top:1px solid var(--border);

    color:#64748B;

    font-size:13px;

    line-height:1.8;

}

/* Footer Link */

footer a{

    color:var(--primary);

    text-decoration:none;

    transition:.3s;

}

footer a:hover{

    color:var(--secondary);

}

/* ==========================================================
   FADE ANIMATION
========================================================== */

@keyframes fadeUp{

    from{

        opacity:0;

        transform:translateY(20px);

    }

    to{

        opacity:1;

        transform:translateY(0);

    }

}

/* ==========================================================
   SCROLL ANIMATION
========================================================== */

.card{

    animation:fadeUp .7s ease;

}

.info-box{

    animation:fadeUp .9s ease;

}

.form-group{

    animation:fadeUp 1.1s ease;

}

.upload-box{

    animation:fadeUp 1.3s ease;

}

.btn-submit{

    animation:fadeUp 1.5s ease;

}
        /* FOOTER */
        footer{
            text-align:center;
            padding:40px 20px;
            color:#475569;
            font-size: 13px;
            letter-spacing: 0.5px;
        }

        /* KEYFRAMES ANIMATION */
        @keyframes pulse {
            0% { transform: scale(1); opacity: 0.8; }
            50% { transform: scale(1.05); opacity: 1; }
            100% { transform: scale(1); opacity: 0.8; }
        }

        /* MOBILE RESPONSIVE */
        @media(max-width:768px){
            .page-header h1{ font-size:32px; }
            .navbar{ padding:20px; }
            .menu{ display:none; }
            .card{ padding:25px; }
        }
    </style>

</head>
<body>

    <nav class="navbar animate__animated animate__fadeInDown">
        <div class="logo">
            <i class="fa-solid fa-shield-halved" style="color: #3b82f6; margin-right: 8px;"></i>PelaporanKS
        </div>
        <div class="menu">
            <a href="/">Beranda</a>
            <a href="{{ route('pengguna.laporan.create') }}" class="active">Laporkan</a>
            <a href="{{ route('pengguna.cek_status') }}">Cek Status</a>
            <a href="{{ url()->previous() }}">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </a>
        </div>
    </nav>

    <div class="container">

        <div class="page-header animate__animated animate__fadeIn">
            <h1>Formulir Laporan Anonim</h1>
            <p>
                Sampaikan situasi atau insiden keamanan kampus dengan aman. Sistem enkripsi kami memastikan identitas Anda sepenuhnya terjaga tanpa jejak.
            </p>
        </div>

        <div class="card animate__animated animate__fadeInUp">
            
            <div class="info-box">
                <i class="fa-solid fa-user-secret"></i>
                <p>
                    <strong>Enkripsi Anonim Aktif:</strong> Server tidak merekam alamat IP, nama pengguna, ataupun data personal Anda. Keamanan privasi Anda terjamin 100%.
                </p>
            </div>

            <form method="POST" action="{{ route('pengguna.laporan.store') }}" enctype="multipart/form-data" id="reportForm">
                @csrf

                <div class="form-group">
                    <label><i class="fa-solid fa-folder-open" style="margin-right: 8px; color: #60a5fa;"></i>Kategori / Jenis Kasus</label>
                    <select name="jenis_kasus" required>
                        <option value="">-- Pilih Jenis Kasus --</option>
                        <option value="Verbal">Verbal (Pelecehan kata-kata, intimidasi)</option>
                        <option value="Fisik">Fisik (Kekerasan, penganiayaan)</option>
                        <option value="KBGO">KBGO (Kekerasan Berbasis Gender Online)</option>
                        <option value="Relasi Kuasa">Relasi Kuasa (Penyalahgunaan jabatan/wewenang)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label><i class="fa-solid fa-location-dot" style="margin-right: 8px; color: #60a5fa;"></i>Lokasi Tempat Kejadian</label>
                    <input type="text" name="lokasi" placeholder="Contoh: Gedung Kuliah Terpadu, Lantai 2 Kelas 2B" required>
                </div>

                <div class="form-group">
                    <label><i class="fa-solid fa-calendar-day" style="margin-right: 8px; color: #60a5fa;"></i>Waktu Insiden</label>
                    <input type="datetime-local" name="waktu_kejadian" required>
                </div>

                <div class="form-group">
                    <label><i class="fa-solid fa-align-left" style="margin-right: 8px; color: #60a5fa;"></i>Deskripsi Laporan</label>
                    <span class="hint-text">Jenis kekerasan seksual (silahkan dinarasikan). Ceritakan singkat peristiwa memuat waktu, tempat, dan peristiwa.</span>
                    <textarea name="deskripsi" placeholder="Ketikkan kronologi kejadian di sini..." required></textarea>
                </div>

                <div class="form-group">
                    <label>
                        <i class="fa-solid fa-triangle-exclamation" style="margin-right:8px;color:#60a5fa;"></i>
                        Alasan Pengaduan
                    </label>
                    <span class="hint-text">Silahkan centang satu atau lebih pilihan berikut:</span>

                    <div style="display:grid; grid-template-columns:1fr; gap:14px; margin-top:12px;">
                        <label style="display:flex; align-items:flex-start; gap:10px; font-weight: 400; cursor: pointer;">
                            <input type="checkbox" name="alasan_pengaduan[]" value="Saksi khawatir" style="width:auto; margin-top: 4px;">
                            Saya seorang saksi yang khawatir dengan keadaan korban
                        </label>

                        <label style="display:flex; align-items:flex-start; gap:10px; font-weight: 400; cursor: pointer;">
                            <input type="checkbox" name="alasan_pengaduan[]" value="Korban butuh pemulihan" style="width:auto; margin-top: 4px;">
                            Saya seorang korban yang memerlukan bantuan pemulihan
                        </label>

                        <label style="display:flex; align-items:flex-start; gap:10px; font-weight: 400; cursor: pointer;">
                            <input type="checkbox" name="alasan_pengaduan[]" value="Tindak tegas terlapor" style="width:auto; margin-top: 4px;">
                            Saya ingin pimpinan kampus menindak tegas terlapor
                        </label>

                        <label style="display:flex; align-items:flex-start; gap:10px; font-weight: 400; cursor: pointer;">
                            <input type="checkbox" name="alasan_pengaduan[]" value="Satgas dokumentasikan kejadian" style="width:auto; margin-top: 4px;">
                            Saya ingin satgas PPKS mendokumentasikan kejadiannya, meningkatkan keamanan kampus dari kekerasan seksual, dan memberi perlindungan bagi saya
                        </label>

                        <div style="display:flex; flex-direction: column; gap:8px;">
                            <label style="display:flex; align-items:center; gap:10px; font-weight: 400; cursor: pointer;">
                                <input type="checkbox" name="alasan_pengaduan[]" value="Lainnya" id="checkLainnya" style="width:auto;">
                                Lainnya, sebutkan:
                            </label>
                            <input type="text" name="alasan_lainnya" id="inputLainnya" placeholder="Ketik alasan lainnya di sini..." style="padding:10px 15px; border-radius:10px; margin-left: 24px; width: calc(100% - 24px);">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>
                        <i class="fa-solid fa-hand-holding-heart" style="margin-right:8px;color:#60a5fa;"></i>
                        Identifikasi Kebutuhan Korban
                    </label>
                    <span class="hint-text">
                        Silahkan pilih kebutuhan pendampingan atau bantuan yang diperlukan.
                    </span >

                    <div style="display:grid;grid-template-columns:1fr;gap:14px;margin-top:12px;">
                        <label style="display:flex;align-items:flex-start;gap:10px;font-weight:400;cursor:pointer;">
                            <input type="checkbox" name="kebutuhan_korban[]" value="Konseling Psikologis" style="width:auto;margin-top:4px;">
                            Konseling Psikologis
                        </label>

                        <label style="display:flex;align-items:flex-start;gap:10px;font-weight:400;cursor:pointer;">
                            <input type="checkbox" name="kebutuhan_korban[]" value="Konseling Rohani/Spiritual" style="width:auto;margin-top:4px;">
                            Konseling Rohani / Spiritual
                        </label>

                        <label style="display:flex;align-items:flex-start;gap:10px;font-weight:400;cursor:pointer;">
                            <input type="checkbox" name="kebutuhan_korban[]" value="Bantuan Hukum" style="width:auto;margin-top:4px;">
                            Bantuan Hukum
                        </label>

                        <label style="display:flex;align-items:flex-start;gap:10px;font-weight:400;cursor:pointer;">
                            <input type="checkbox" name="kebutuhan_korban[]" value="Bantuan Medis" style="width:auto;margin-top:4px;">
                            Bantuan Medis
                        </label>

                        <label style="display:flex;align-items:flex-start;gap:10px;font-weight:400;cursor:pointer;">
                            <input type="checkbox" name="kebutuhan_korban[]" value="Tidak Membutuhkan Pendampingan" style="width:auto;margin-top:4px;">
                            Tidak Membutuhkan Pendampingan
                        </label>

                        <div style="display:flex;flex-direction:column;gap:8px;">
                            <label style="display:flex;align-items:center;gap:10px;font-weight:400;cursor:pointer;">
                                <input type="checkbox" name="kebutuhan_korban[]" value="Lainnya" id="checkKebutuhanLainnya" style="width:auto;">
                                Lainnya, sebutkan:
                            </label>
                            <input type="text" name="kebutuhan_lainnya" id="inputKebutuhanLainnya" placeholder="Tuliskan kebutuhan lainnya..." style="padding:10px 15px;border-radius:10px;margin-left:24px;width:calc(100% - 24px);">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label><i class="fa-solid fa-paperclip" style="margin-right: 8px; color: #60a5fa;"></i>Bukti Pendukung (Opsional)</label>
                    <div class="upload-container">
                        <div class="upload-box" id="dropzone">
                            <i class="fa-solid fa-cloud-arrow-up" id="uploadIcon"></i>
                            <p id="uploadText">Tarik berkas ke sini atau klik untuk mencari berkas</p>
                            <span id="fileInfo">Mendukung Format Gambar/Video/Dokumen maksimal 10MB</span>
                            <input type="file" name="bukti[]" id="fileInput" multiple accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.mp4,.mov">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn-submit" id="submitBtn">
                    <span>🚀 Kirim Laporan Sekarang</span>
                </button>

            </form>
        </div>
    </div>

    <footer>
        © 2026 Politeknik Negeri Bengkalis. All rights reserved.
    </footer>

    <script>
        // Efek Visual Dinamis pada Area File Upload
        const fileInput = document.getElementById('fileInput');
        const dropzone = document.getElementById('dropzone');
        const uploadText = document.getElementById('uploadText');
        const uploadIcon = document.getElementById('uploadIcon');

        fileInput.addEventListener('change', function () {

    if (this.files.length > 0) {

        let html = `<strong>${this.files.length} Berkas Dipilih</strong><br><br>`;

        for(let i=0;i<this.files.length;i++){

            html += `
                <div style="
                    display:flex;
                    justify-content:space-between;
                    align-items:center;
                    margin-bottom:8px;
                    padding:8px 12px;
                    background:#EFF6FF;
                    border-radius:8px;
                    color:#1e293b;
                ">
                    <span>
                        <i class="fa-solid fa-file"></i>
                        ${this.files[i].name}
                    </span>

                    <small>
                        ${(this.files[i].size/1024/1024).toFixed(2)} MB
                    </small>
                </div>
            `;

        }

        uploadText.innerHTML = html;

        uploadIcon.className = "fa-solid fa-circle-check";

        uploadIcon.style.color="#10B981";

        dropzone.style.borderColor="#10B981";

    }

});

        // Event listener untuk efek dragover dan dragleave file
        ['dragenter', 'dragover'].forEach(eventName => {
            dropzone.addEventListener(eventName, () => dropzone.classList.add('dragover'), false);
        });
        ['dragleave', 'drop'].forEach(eventName => {
            dropzone.addEventListener(eventName, () => dropzone.classList.remove('dragover'), false);
        });

        // Otomatis fokus ke input "Alasan Lainnya" jika checkbox dicentang
        const checkLainnya = document.getElementById('checkLainnya');
        const inputLainnya = document.getElementById('inputLainnya');
        checkLainnya.addEventListener('change', function() {
            if(this.checked) {
                inputLainnya.focus();
            }
        });

        // Otomatis fokus ke input "Kebutuhan Lainnya" jika checkbox dicentang
        const checkKebutuhanLainnya = document.getElementById('checkKebutuhanLainnya');
        const inputKebutuhanLainnya = document.getElementById('inputKebutuhanLainnya');
        checkKebutuhanLainnya.addEventListener('change', function() {
            if(this.checked){
                inputKebutuhanLainnya.focus();
            }
        });

        // Animasi Loading saat form disubmit
        document.getElementById('reportForm').addEventListener('submit', function() {
            const btn = document.getElementById('submitBtn');
            btn.innerHTML = `<i class="fa-solid fa-spinner fa-spin"></i> Memproses Enkripsi & Mengirim...`;
            btn.style.pointerEvents = 'none';
            btn.style.opacity = '0.8';
        });
    </script>
</body>
</html>