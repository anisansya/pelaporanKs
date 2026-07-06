<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Terkirim - Sistem Pelaporan Anonim</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>

:root {
    --primary: #2563eb;
    --accent: #38bdf8;
    --success: #16a34a;
    --success-glow: rgba(22,163,74,.25);
    --warning: #dc2626;
    --border-glass: rgba(0,0,0,.08);
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
    radial-gradient(circle at top,#dbeafe,#f8fafc 60%);

    color:#1e293b;

    display:flex;
    justify-content:center;
    align-items:center;

    padding:20px;

    overflow-x:hidden;

}


/* BACKGROUND GRID */

body::before{

    content:"";

    position:absolute;

    width:100%;
    height:100%;

    top:0;
    left:0;


    background-image:

    linear-gradient(
        rgba(37,99,235,.06) 1px,
        transparent 1px
    ),

    linear-gradient(
        90deg,
        rgba(37,99,235,.06) 1px,
        transparent 1px
    );


    background-size:40px 40px;

    z-index:-1;

}



/* CARD */

.card{

    background:
    rgba(255,255,255,.75);

    backdrop-filter:blur(25px);

    -webkit-backdrop-filter:blur(25px);


    border:
    1px solid var(--border-glass);


    padding:45px 35px;


    border-radius:24px;


    width:100%;

    max-width:480px;


    box-shadow:

    0 25px 50px rgba(15,23,42,.15);


    text-align:center;

    position:relative;

}



/* garis atas */

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
        #22c55e,
        #38bdf8
    );


    border-radius:24px 24px 0 0;

}




/* ICON */

.success-icon-box{


    width:80px;

    height:80px;


    background:
    rgba(34,197,94,.12);


    border:

    2px solid #22c55e;


    border-radius:50%;


    display:flex;

    justify-content:center;

    align-items:center;


    margin:0 auto 25px;


    box-shadow:

    0 0 25px var(--success-glow);


    animation:pulseSuccess 2s infinite;

}



.success-icon-box i{

    font-size:36px;

    color:#16a34a;

}



/* TITLE */

h2{


    font-size:24px;

    font-weight:700;


    margin-bottom:10px;


    background:

    linear-gradient(
        90deg,
        #2563eb,
        #16a34a
    );


    -webkit-background-clip:text;

    -webkit-text-fill-color:transparent;

}




.sub-text{


    font-size:14px;

    color:#64748b;

    margin-bottom:25px;

}





/* KODE */

.kode-container{


    background:

    rgba(37,99,235,.06);


    border:

    1px solid rgba(37,99,235,.15);


    padding:18px;


    border-radius:16px;


    margin:20px 0;


    display:flex;

    justify-content:space-between;

    align-items:center;


    gap:10px;


}




.kode{


    font-size:24px;


    letter-spacing:3px;


    color:#2563eb;


    font-weight:700;


    font-family:'Courier New';


    text-shadow:

    0 0 10px rgba(37,99,235,.2);


    overflow-x:auto;

    white-space:nowrap;


    width:100%;

}





/* COPY BUTTON */

.btn-copy{


    background:

    rgba(37,99,235,.1);


    border:

    1px solid rgba(37,99,235,.25);


    color:#2563eb;


    padding:10px 14px;


    border-radius:10px;


    cursor:pointer;


    transition:.3s;

}




.btn-copy:hover{


    background:#2563eb;

    color:white;


    box-shadow:

    0 0 15px rgba(37,99,235,.3);

}





/* WARNING */

.note{


    background:

    rgba(239,68,68,.08);


    border:

    1px solid rgba(239,68,68,.2);


    color:#b91c1c;


    padding:16px;


    border-radius:16px;


    font-size:13px;


    margin:25px 0;


    text-align:left;


    line-height:1.6;


}



.note b{

    color:#dc2626;

}





/* BUTTON */

.btn-action{


    display:flex;


    justify-content:center;

    align-items:center;


    gap:8px;


    width:100%;


    padding:15px;



    background:

    linear-gradient(
        135deg,
        #2563eb,
        #38bdf8
    );


    color:white;


    text-decoration:none;


    border-radius:14px;


    font-weight:600;


    font-size:15px;


    transition:.3s;


    box-shadow:

    0 8px 25px rgba(37,99,235,.25);

}





.btn-action:hover{


    transform:translateY(-3px);


    box-shadow:

    0 15px 30px rgba(37,99,235,.35);

}




/* TOAST */

.toast-copied{


    position:absolute;


    bottom:-50px;


    left:50%;


    transform:translateX(-50%);



    background:#16a34a;


    color:white;


    padding:8px 16px;


    border-radius:20px;


    font-size:12px;


    opacity:0;


    transition:.3s;


}




.toast-copied.show{


    bottom:25px;

    opacity:1;

}





/* ANIMATION */


@keyframes pulseSuccess{


0%{

box-shadow:
0 0 0 0 rgba(22,163,74,.35);

}


70%{

box-shadow:
0 0 0 15px rgba(22,163,74,0);

}


100%{

box-shadow:
0 0 0 0 rgba(22,163,74,0);

}

}


</style>
</head>
<body>

<div class="card animate__animated animate__zoomIn">

    <div class="success-icon-box">
        <i class="fa-solid fa-circle-check animate__animated animate__heartBeat animate__delay-1s"></i>
    </div>

    <h2>Laporan Berhasil Dikirim</h2>
    <p class="sub-text">Sistem telah mengenkripsi data kronologi Anda dengan aman.</p>

    <p style="font-size: 13px; color: #cbd5e1; font-weight: 500; text-align: left; padding-left: 5px;">
        <i class="fa-solid fa-key" style="color: #38bdf8; margin-right: 6px;"></i>Token / Kode Akses Anonim Anda:
    </p>

    <div class="kode-container">
        <div class="kode" id="kodeLaporan">{{ $laporan->kode_laporan }}</div>
        <button class="btn-copy" onclick="copyCode()" title="Salin Kode">
            <i class="fa-regular fa-copy" id="copyIcon"></i>
        </button>
        <div class="toast-copied" id="toastCopied">✓ Tersalin ke clipboard</div>
    </div>

    <div class="note">
        <b><i class="fa-solid fa-triangle-exclamation"></i> PERINGATAN PENTING!</b>
        Sesuai standar enkripsi anonimitas, kode ini <b>hanya ditunjukkan sekali ini saja</b> demi privasi. 
        Segera catat, ambil tangkapan layar (screenshot), atau salin token ini sebelum menutup halaman agar Anda dapat memantau status perkembangan kasus.
    </div>

    <a href="{{ route('pengguna.cek_status') }}" class="btn-action">
        <span>Cek Status Laporan</span>
        <i class="fa-solid fa-arrow-right"></i>
    </a>

</div>

<script>
    function copyCode() {
        // Mengambil teks kode laporan
        const textToCopy = document.getElementById('kodeLaporan').innerText;
        
        // Menggunakan Clipboard API modern bawaan browser
        navigator.clipboard.writeText(textToCopy).then(() => {
            const toast = document.getElementById('toastCopied');
            const icon = document.getElementById('copyIcon');
            
            // Mengubah ikon menjadi centang sementara waktu
            icon.className = "fa-solid fa-check";
            icon.style.color = "#10b981";
            
            // Memunculkan toast pemberitahuan
            toast.classList.add('show');
            
            // Reset state setelah 2,5 detik
            setTimeout(() => {
                toast.classList.remove('show');
                icon.className = "fa-regular fa-copy";
                icon.style.color = "#38bdf8";
            }, 2500);
        }).catch(err => {
            console.error('Gagal menyalin kode: ', err);
        });
    }
</script>

</body>
</html>