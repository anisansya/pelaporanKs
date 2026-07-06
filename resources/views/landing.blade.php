<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PelaporanKS - Politeknik Negeri Bengkalis</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* CSS RESET & GLOBAL - LIGHT MOOD + NAVY ACCENT */
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }
        html{
            scroll-behavior:smooth;
        }
        body{
    background:#eef2f7;
    color:#1e293b;
    overflow-x:hidden;
}

       .navbar{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    z-index:999;
    background:rgba(226, 232, 240, 0.72);
    backdrop-filter:blur(18px);
    border-bottom:1px solid rgba(148,163,184,0.25);
}
        .nav-container{
            width:90%;
            max-width:1400px;
            margin:auto;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:15px 0;
        }
        .logo{
            display:flex;
            align-items:center;
            gap:12px;
        }
        .logo-text h2{
            font-size:20px;
            font-weight:700;
            line-height: 1.2;
            color: #001f5b; /* Dongker/Navy */
        }
        .logo-text p{
            color:#64748b; /* Abu-abu teks */
            font-size:12px;
        }
        /* ===========================
   NAVIGATION MENU
=========================== */

.nav-menu{
    display:flex;
    gap:30px;
    align-items:center;
}

.nav-menu a{
    position:relative;
    color:#475569;
    text-decoration:none;
    font-weight:500;
    font-size:14px;
    padding:8px 0;
    transition:all .3s ease;
}

/* Hover */

.nav-menu a:hover{
    color:#0B4F9C;
    transform:translateY(-2px);
}

/* Active */

.nav-menu a.active{
    color:#0B4F9C;
    font-weight:600;
}

/* Garis bawah */

.nav-menu a::after{
    content:"";
    position:absolute;
    left:50%;
    bottom:-5px;
    width:0;
    height:3px;
    background:linear-gradient(
        to right,
        #2563EB,
        #14B8A6
    );
    border-radius:10px;
    transform:translateX(-50%);
    transition:all .35s ease;
}

/* Hover garis */

.nav-menu a:hover::after{
    width:100%;
}

/* Active garis */

.nav-menu a.active::after{
    width:100%;
}
        .login-btn{
            background:#001f5b; /* Tombol Dongker */
            color:white;
            padding:10px 20px;
            border-radius:10px;
            text-decoration:none;
            font-weight:500;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
            transition:.3s;
        }
        .login-btn:hover{
            background:#002a7f; /* Dongker sedikit lebih terang saat hover */
        }

        /* HERO SECTION */
        .hero{
            min-height:95vh;
            position:relative;
            display:flex;
            align-items:center;
            padding-top:100px;
        }
        .hero::before{
    content:"";
    position:absolute;
    width:100%;
    height:100%;
    top:0;
    left:0;
    background:
    linear-gradient(
        to right,
        rgba(255,255,255,0.65) 25%,
        rgba(255,255,255,0.35) 55%,
        rgba(255,255,255,0.10) 100%
    ),
    url('{{ asset('images/bg-polbeng.jpg') }}');
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
    z-index:-2;
}
        .hero-content{
            width:90%;
            max-width:1300px;
            margin:auto;
        }
        .hero-text{
            max-width: 650px;
        }
        .hero-text h1{
            font-size:42px;
            line-height:1.2;
            margin-bottom:15px;
            font-weight:700;
            color: #0f172a; /* Hitam teks judul */
        }
        .hero-text h1 span{
            color:#001f5b; /* Dongker untuk aksen span */
        }
        .hero-text .subtitle {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #334155;
        }
        .hero-text p.desc{
            color:#475569; /* Abu-abu deskripsi */
            font-size:15px;
            line-height:1.6;
            margin-bottom:35px;
        }
        .hero-buttons{
            display:flex;
            gap:15px;
        }

        /* BUTTONS GLOBAL */
       /* ===========================
   BUTTON PRIMARY
=========================== */

.btn-primary{
    background:#0B4F9C;
    color:#fff;
    text-decoration:none;
    padding:14px 28px;
    border-radius:10px;
    font-weight:600;
    display:inline-flex;
    align-items:center;
    gap:10px;
    font-size:14px;
    border:none;
    cursor:pointer;
    transition:all .35s ease;
}

.btn-primary:hover{
    background:#2563EB;
    transform:translateY(-4px);
    box-shadow:0 12px 28px rgba(37,99,235,.35);
}

.btn-primary:active{
    transform:translateY(-1px);
    box-shadow:0 5px 15px rgba(37,99,235,.25);
}

/* ===========================
   BUTTON SECONDARY
=========================== */

.btn-secondary{
    background:#F8FAFC;
    color:#0B4F9C;
    text-decoration:none;
    padding:14px 28px;
    border-radius:10px;
    border:1px solid #CBD5E1;
    font-weight:600;
    display:inline-flex;
    align-items:center;
    gap:10px;
    font-size:14px;
    cursor:pointer;
    transition:all .35s ease;
}

.btn-secondary:hover{
    background:#E2E8F0;
    border-color:#2563EB;
    color:#2563EB;
    transform:translateY(-4px);
    box-shadow:0 12px 28px rgba(37,99,235,.15);
}

.btn-secondary:active{
    transform:translateY(-1px);
    box-shadow:0 5px 15px rgba(37,99,235,.10);
}

/* ===========================
   ICON
=========================== */

.btn-primary i,
.btn-secondary i{
    transition:.35s;
}

.btn-primary:hover i,
.btn-secondary:hover i{
    transform:translateX(4px);
}

        /* FEATURE BAR */
        /* =====================================================
   FEATURE BAR
===================================================== */

.feature-bar{
    width:90%;
    max-width:1300px;
    margin:-50px auto 0;
    position:relative;
    z-index:10;
}

.feature-wrapper{
    background:#ffffff;
    border:1px solid #E2E8F0;
    border-radius:20px;
    padding:30px;
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:30px;
    box-shadow:0 10px 25px rgba(0,0,0,.05);
}

/* =====================================================
   FEATURE CARD
===================================================== */

.feature{
    display:flex;
    align-items:flex-start;
    gap:15px;
    padding:10px;
    border-radius:15px;
    transition:all .35s ease;
}

/* Hover Card */

.feature:hover{
    transform:translateY(-6px);
    background:#F8FAFC;
}

/* =====================================================
   FEATURE ICON
===================================================== */

.feature-icon{
    width:55px;
    height:55px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    flex-shrink:0;
    font-size:22px;
    transition:all .35s ease;
}

/* Default warna */

.feature:nth-child(1) .feature-icon{
    background:#DBEAFE;
    color:#2563EB;
}

.feature:nth-child(2) .feature-icon{
    background:#CCFBF1;
    color:#0F766E;
}

.feature:nth-child(3) .feature-icon{
    background:#FEF3C7;
    color:#D97706;
}

/* Hover icon */

.feature:nth-child(1):hover .feature-icon{
    background:#2563EB;
    color:#ffffff;
    transform:scale(1.15) rotate(8deg);
}

.feature:nth-child(2):hover .feature-icon{
    background:#14B8A6;
    color:#ffffff;
    transform:scale(1.15) rotate(8deg);
}

.feature:nth-child(3):hover .feature-icon{
    background:#F59E0B;
    color:#ffffff;
    transform:scale(1.15) rotate(8deg);
}

/* =====================================================
   TEXT
===================================================== */

.feature h3{
    font-size:16px;
    font-weight:600;
    margin-bottom:6px;
    color:#0F172A;
    transition:all .3s ease;
}

.feature p{
    color:#64748B;
    font-size:13px;
    line-height:1.6;
    transition:all .3s ease;
}

/* Hover Text */

.feature:nth-child(1):hover h3{
    color:#2563EB;
}

.feature:nth-child(2):hover h3{
    color:#14B8A6;
}

.feature:nth-child(3):hover h3{
    color:#D97706;
}

.feature:hover p{
    color:#475569;
}
        /* SECTION GLOBAL */
        /* =====================================================
   SECTION
===================================================== */

.section{
    padding:100px 5%;
    max-width:1400px;
    margin:auto;
}

/* =====================================================
   SECTION TITLE
===================================================== */

.section-title{
    text-align:center;
    margin-bottom:60px;
}

.section-title h2{
    position:relative;
    display:inline-block;
    font-size:30px;
    font-weight:700;
    color:#0F172A;
    padding-bottom:16px;
    cursor:default;
    transition:all .35s ease;
}

/* Garis bawah */

.section-title h2::after{
    content:"";
    position:absolute;
    left:50%;
    bottom:0;
    transform:translateX(-50%);
    width:70px;
    height:4px;
    border-radius:10px;
    background:linear-gradient(
        to right,
        #2563EB,
        #14B8A6
    );
    transition:all .35s ease;
}

/* Hover Judul */

.section-title h2:hover{
    color:#2563EB;
    transform:translateY(-2px);
}

/* Hover Garis */

.section-title h2:hover::after{
    width:110px;
    height:5px;
    background:linear-gradient(
        to right,
        #2563EB,
        #14B8A6,
        #22C55E
    );
}

        /* MODUL */
        .modules{
            display:grid;
            grid-template-columns:repeat(2,1fr);
            gap:30px;
        }
        .module-card{
            background:#f8fafc; /* Abu-abu sangat muda */
            border:1px solid #e2e8f0;
            border-radius:20px;
            padding:40px;
            display: flex;
            gap: 25px;
            align-items: flex-start;
            transition: 0.3s;
        }
        .module-card:hover {
            border-color: #cbd5e1;
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
        }
        .module-icon{
            width:70px;
            height:70px;
            border-radius:50%;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:28px;
            flex-shrink: 0;
        }
        .user-icon, .admin-icon{
            background:#e0e7ff; /* Latar icon muda */
            color: #001f5b;     /* Icon Dongker */
        }
        .module-info {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .module-card h3{
            font-size:22px;
            font-weight: 600;
            color: #0f172a;
        }
        .module-card p{
            color:#475569;
            font-size: 14px;
            line-height:1.6;
            margin-bottom:15px;
        }
        .module-btn{
            display:inline-flex;
            align-items: center;
            gap: 10px;
            padding:12px 25px;
            border-radius:10px;
            text-decoration:none;
            font-weight:500;
            font-size: 14px;
            transition: .3s;
        }
        .btn-blue {
            background:#001f5b; /* Tombol Dongker */
            color:white;
        }
        .btn-blue:hover {
            background: #002a7f;
        }
        .btn-outline {
            border: 1px solid #cbd5e1;
            background: #ffffff;
            color: #1e293b;
        }
        .btn-outline:hover {
            background: #f1f5f9;
            border-color: #cbd5e1;
        }

        /* PANDUAN SECTION */
        /* =====================================================
   GUIDE CONTAINER
===================================================== */

.guide-container{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:25px;
    position:relative;
}

/* =====================================================
   GUIDE CARD
===================================================== */

.guide-card{
    background:#F8FAFC;
    border:1px solid #E2E8F0;
    border-radius:20px;
    padding:35px 25px;
    text-align:center;
    position:relative;
    transition:all .35s ease;
}

/* Hover Card */

.guide-card:hover{
    background:#FFFFFF;
    border-color:#14B8A6;
    transform:translateY(-8px);
    box-shadow:0 18px 40px rgba(20,184,166,.15);
}

/* =====================================================
   GUIDE NUMBER
===================================================== */

.guide-number{
    position:absolute;
    top:-20px;
    left:50%;
    transform:translateX(-50%);
    width:42px;
    height:42px;
    border-radius:50%;
    border:4px solid #FFFFFF;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:14px;
    font-weight:700;
    color:#FFFFFF;
    transition:all .35s ease;
}

/* Warna Number */

.guide-card:nth-child(1) .guide-number{
    background:#2563EB;
}

.guide-card:nth-child(2) .guide-number{
    background:#14B8A6;
}

.guide-card:nth-child(3) .guide-number{
    background:#F59E0B;
}

.guide-card:nth-child(4) .guide-number{
    background:#7C3AED;
}

/* Hover Number */

.guide-card:hover .guide-number{
    transform:translateX(-50%) scale(1.15);
}

/* =====================================================
   GUIDE ICON
===================================================== */

.guide-icon-box{
    font-size:34px;
    margin-top:5px;
    margin-bottom:20px;
    transition:all .35s ease;
}

/* Warna Icon */

.guide-card:nth-child(1) .guide-icon-box{
    color:#2563EB;
}

.guide-card:nth-child(2) .guide-icon-box{
    color:#14B8A6;
}

.guide-card:nth-child(3) .guide-icon-box{
    color:#F59E0B;
}

.guide-card:nth-child(4) .guide-icon-box{
    color:#7C3AED;
}

/* Hover Icon */

.guide-card:hover .guide-icon-box{
    transform:scale(1.15) rotate(8deg);
}

/* =====================================================
   TEXT
===================================================== */

.guide-card h3{
    font-size:18px;
    font-weight:600;
    margin-bottom:12px;
    color:#0F172A;
    transition:all .35s ease;
}

.guide-card p{
    color:#64748B;
    font-size:13px;
    line-height:1.7;
    transition:all .35s ease;
}

/* Hover Text */

.guide-card:nth-child(1):hover h3{
    color:#2563EB;
}

.guide-card:nth-child(2):hover h3{
    color:#14B8A6;
}

.guide-card:nth-child(3):hover h3{
    color:#F59E0B;
}

.guide-card:nth-child(4):hover h3{
    color:#7C3AED;
}

.guide-card:hover p{
    color:#475569;
}

        /* ABOUT & STATS */
        .about-stats-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }
        .about-content .tag {
            color: #001f5b; /* Tag Dongker */
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .about-content h2{
            font-size:32px;
            font-weight: 700;
            margin: 10px 0 20px;
            line-height: 1.3;
            color: #0f172a;
        }
        .about-content p.desc{
            color:#475569;
            line-height:1.6;
            font-size: 14px;
            margin-bottom:25px;
        }
        .check-list{
            display:flex;
            flex-direction:column;
            gap:15px;
            margin-bottom: 30px;
        }
        .check-item{
            display:flex;
            align-items:center;
            gap:12px;
            font-size: 14px;
            color: #334155;
        }
        .check-item i{
            color:#001f5b; /* Centang Dongker */
            font-size:16px;
        }

        /* STATS GRID (2x2) */
       .stats-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:20px;
}

.stat-card{
    background:#f8fafc;
    border:1px solid #e2e8f0;
    border-radius:15px;
    padding:30px;
    display:flex;
    align-items:center;
    gap:20px;
    transition:all .3s ease;
}

/* Hover Card */
.stat-card:hover{
    transform:translateY(-8px);
    box-shadow:0 15px 35px rgba(37,99,235,.15);
    border-color:#2563EB;
}

/* Icon */
.stat-icon{
    font-size:28px;
    transition:all .3s ease;
}

/* Warna icon setiap card */
.stat-card:nth-child(1) .stat-icon{
    color:#2563EB;
}

.stat-card:nth-child(2) .stat-icon{
    color:#14B8A6;
}

.stat-card:nth-child(3) .stat-icon{
    color:#F59E0B;
}

.stat-card:nth-child(4) .stat-icon{
    color:#7C3AED;
}

/* Hover icon */
.stat-card:hover .stat-icon{
    transform:scale(1.2) rotate(8deg);
}

/* Informasi */
.stats-grid .stat-info h3{
    font-size:26px;
    font-weight:700;
    transition:all .3s ease;
}

.stats-grid .stat-info p{
    color:#64748b;
    font-size:13px;
    margin-top:2px;
}

/* Warna angka */
.stat-card:nth-child(1) .stat-info h3{
    color:#2563EB;
}

.stat-card:nth-child(2) .stat-info h3{
    color:#14B8A6;
}

.stat-card:nth-child(3) .stat-info h3{
    color:#F59E0B;
}

.stat-card:nth-child(4) .stat-info h3{
    color:#7C3AED;
}

/* Hover angka */
.stat-card:hover .stat-info h3{
    transform:scale(1.08);
}

/* Hover teks */
.stat-card:hover .stat-info p{
    color:#334155;
}

        /* CTA BANNER ROW */
        .cta-section {
            padding: 40px 5%;
        }
        /* ===========================
   CTA BOX
=========================== */

.cta-box{
    background:linear-gradient(
        135deg,
        #0B4F9C,
        #2563EB,
        #14B8A6
    );
    border-radius:24px;
    padding:35px 50px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:30px;
    color:#fff;
    overflow:hidden;
    position:relative;
    transition:all .35s ease;
}

/* Efek saat hover */

.cta-box:hover{
    transform:translateY(-6px);
    box-shadow:0 20px 45px rgba(37,99,235,.30);
}

/* Efek cahaya */

.cta-box::before{
    content:"";
    position:absolute;
    top:-50%;
    left:-120%;
    width:60%;
    height:200%;
    background:rgba(255,255,255,.15);
    transform:rotate(25deg);
    transition:.8s;
}

.cta-box:hover::before{
    left:160%;
}

/* Judul */

.cta-box h2{
    font-size:30px;
    font-weight:700;
    margin-bottom:10px;
}

/* Deskripsi */

.cta-box p{
    color:rgba(255,255,255,.9);
    line-height:1.7;
}

/* Tombol CTA */

.cta-box .btn-primary{
    background:#fff;
    color:#0B4F9C;
    transition:all .35s ease;
}

.cta-box .btn-primary:hover{
    background:#F8FAFC;
    color:#2563EB;
    transform:translateY(-4px) scale(1.05);
    box-shadow:0 15px 35px rgba(255,255,255,.35);
}

/* Icon */

.cta-box .btn-primary i{
    transition:.35s;
}

.cta-box .btn-primary:hover i{
    transform:translateX(5px);
}
        .cta-left {
            display: flex;
            align-items: center;
            gap: 25px;
        }
        .cta-shield-icon {
            width: 65px;
            height: 65px;
            background: rgba(255,255,255,0.15); /* Overlay putih transparan */
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            color: white;
        }
        .cta-text h2 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 5px;
            color: white;
        }
        .cta-text p {
            color: #e0e7ff; /* Teks muda kebiruan */
            font-size: 14px;
        }
        .cta-btn-white {
            background: white;
            color: #001f5b; /* Teks Dongker pada tombol putih */
            padding: 14px 28px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            white-space: nowrap;
            transition: 0.3s;
        }
        .cta-btn-white:hover {
            background: #f1f5f9;
        }

        /* FOOTER */
        .footer{
            background:#E8EEF7; /* Latar abu-abu sangat muda */
            padding: 70px 5% 30px;
            border-top: 1px solid #e2e8f0;
            color: #1e293b;
        }
        .footer-grid{
            display:grid;
            grid-template-columns: 1.5fr 1fr 1fr;
            gap:50px;
            max-width: 1400px;
            margin: auto;
        }
        .footer-col h3 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 25px;
            color: #0f172a; /* Judul footer gelap */
        }
        .footer-col p.footer-desc {
            color: #64748b;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 15px;
            color: #475569;
            font-size: 14px;
        }
        .contact-item i {
            color: #001f5b; /* Icon kontak Dongker */
            margin-top: 4px;
            font-size: 16px;
        }
        .socials{
            display:flex;
            gap:12px;
        }
        .socials a{
            width:38px;
            height:38px;
            border-radius:50%;
            background:#e2e8f0; /* Latar icon sosial abu-abu */
            border: 1px solid #cbd5e1;
            display:flex;
            align-items:center;
            justify-content:center;
            color:#475569; /* Icon sosial abu-abu gelap */
            text-decoration:none;
            transition: 0.3s;
        }
        .socials a:hover {
            background: #001f5b; /* Menjadi Dongker saat hover */
            color: white;
            border-color: #001f5b;
        }
        .footer-bottom{
            max-width: 1400px;
            margin: 50px auto 0;
            padding-top:25px;
            border-top:1px solid #cbd5e1;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color:#64748b;
            font-size: 13px;
        }
        .footer-links a {
            color: #64748b;
            text-decoration: none;
            margin-left: 20px;
        }
        .footer-links a:hover {
            color: #001f5b;
        }

        /* RESPONSIVE DESIGN */
        @media(max-width:1100px){
            .about-stats-grid, .modules, .guide-container {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            .guide-card {
                padding: 30px 20px;
            }
            .cta-box {
                flex-direction: column;
                text-align: center;
                padding: 40px 30px;
            }
            .cta-left {
                flex-direction: column;
            }
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
        }
        @media(max-width:768px) {
            .nav-menu { display: none; }
            .hero-text h1 { font-size: 32px; }
            .feature-wrapper { grid-template-columns: 1fr; }
            .stats-grid { grid-template-columns: 1fr; }
            .footer-bottom { flex-direction: column; gap: 15px; text-align: center; }
        }
    </style>
</head>
<body>

<nav class="navbar">
    <div class="nav-container">
        <div class="logo">
            <div class="logo-text">
                <h2>PelaporanKS</h2>
                <p>Politeknik Negeri Bengkalis</p>
            </div>
        </div>
        <div class="nav-menu">
            <a href="#" class="active">Beranda</a>
            <a href="#tentang">Tentang</a>
            <a href="#fitur">Fitur</a>
            <a href="#panduan">Panduan</a>
            <a href="#kontak">Kontak</a>
        </div>
        <a href="{{ route('login') }}" class="login-btn">
            <i class="fa-solid fa-user"></i> Login Petugas
        </a>
    </div>
</nav>

<section class="hero">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Sistem Pelaporan Keamanan & Kenyamanan <span>Kampus</span></h1>
            <p class="subtitle">Politeknik Negeri Bengkalis</p>
            <p class="desc">Wujudkan lingkungan kampus yang aman, nyaman, dan kondusif melalui sistem pelaporan yang mudah, anonim, dan terpercaya.</p>
            <div class="hero-buttons">
                <a href="{{ route('pengguna.laporan.create') }}" class="btn-primary">
                    <i class="fa-solid fa-shield-halved"></i> Buat Laporan Sekarang
                </a>
                <a href="{{ route('pengguna.cek_status') }}" class="btn-secondary">
                    <i class="fa-solid fa-magnifying-glass"></i> Cek Status
                </a>
            </div>
        </div>
    </div>
</section>

<section class="feature-bar">
    <div class="feature-wrapper">
        <div class="feature">
            <div class="feature-icon"><i class="fa-solid fa-shield-halved"></i></div>
            <div>
                <h3>Aman & Anonim</h3>
                <p>Identitas pelapor dijaga kerahasiaannya.</p>
            </div>
        </div>
        <div class="feature">
            <div class="feature-icon"><i class="fa-solid fa-clock"></i></div>
            <div>
                <h3>Pantau Laporan</h3>
                <p>Pantau perkembangan laporan melalui kode laporan.</p>
            </div>
        </div>
        <div class="feature">
            <div class="feature-icon"><i class="fa-solid fa-circle-check"></i></div>
            <div>
                <h3>Tindak Lanjut Cepat</h3>
                <p>Laporan diverifikasi dan ditindaklanjuti oleh Satgas terkait.</p>
            </div>
        </div>
    </div>
</section>

<section class="section" id="fitur">
    <div class="section-title">
        <h2>Daftar Modul</h2>
    </div>
    <div class="modules">
        <div class="module-card">
            <div class="module-icon user-icon"><i class="fa-solid fa-user"></i></div>
            <div class="module-info">
                <h3>Pengguna</h3>
                <p>Mahasiswa atau civitas akademika dapat membuat laporan anonim dan memantau perkembangan laporan melalui kode laporan.</p>
                <a href="{{ route('pengguna.index') }}" class="module-btn btn-blue">
                    Masuk sebagai Pengguna <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="module-card">
            <div class="module-icon admin-icon"><i class="fa-solid fa-lock"></i></div>
            <div class="module-info">
                <h3>Login Petugas</h3>
                <p>Admin melakukan verifikasi laporan terlebih dahulu, kemudian Satgas menindaklanjuti laporan yang telah diverifikasi.</p>
                <a href="{{ route('login') }}" class="module-btn btn-outline">
                    Login Petugas <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section" id="panduan">
    <div class="section-title">
        <h2>Panduan Alur Pelaporan</h2>
    </div>
    <div class="guide-container">
        <div class="guide-card">
            <div class="guide-number">1</div>
            <div class="guide-icon-box"><i class="fa-solid fa-pen-to-square"></i></div>
            <h3>Isi Laporan</h3>
            <p>Klik tombol pelaporan, isi formulir kejadian secara detail, dan unggah bukti pendukung yang valid.</p>
        </div>
        <div class="guide-card">
            <div class="guide-number">2</div>
            <div class="guide-icon-box"><i class="fa-solid fa-ticket"></i></div>
            <h3>Terima Tiket</h3>
            <p>Simpan kode unik/tiket laporan yang Anda dapatkan untuk memantau status perkembangan kasus.</p>
        </div>
        <div class="guide-card">
            <div class="guide-number">3</div>
            <div class="guide-icon-box"><i class="fa-solid fa-user-check"></i></div>
            <h3>Verifikasi</h3>
            <p>Tim admin internal kampus memeriksa keabsahan berkas laporan untuk diteruskan ke tim Satgas.</p>
        </div>
        <div class="guide-card">
            <div class="guide-number">4</div>
            <div class="guide-icon-box"><i class="fa-solid fa-gavel"></i></div>
            <h3>Tindak Lanjut</h3>
            <p>Satgas melakukan investigasi mendalam dan mengambil tindakan tegas demi kenyamanan bersama.</p>
        </div>
    </div>
</section>

<section class="section" id="tentang">
    <div class="about-stats-grid">
        <div class="about-content">
            <span class="tag">Tentang PelaporanKS</span>
            <h2>Bersama Membangun Kampus yang Lebih Baik</h2>
            <p class="desc">PelaporanKS adalah sistem terintegrasi yang dikembangkan untuk mempermudah pelaporan kejadian terkait keamanan dan kenyamanan di lingkungan Politeknik Negeri Bengkalis.</p>
            <div class="check-list">
                <div class="check-item"><i class="fa-solid fa-circle-check"></i> Meningkatkan keamanan dan kenyamanan kampus</div>
                <div class="check-item"><i class="fa-solid fa-circle-check"></i> Sistem terintegrasi dan mudah digunakan</div>
                <div class="check-item"><i class="fa-solid fa-circle-check"></i> Dukungan penuh dari pihak kampus</div>
            </div>
            <a href="#" class="btn-primary">Pelajari Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon"><i class="fa-regular fa-file-lines"></i></div>
                <div class="stat-info">
                    <h3 class="counter" data-target="125">0</h3>
                    <p>Laporan Masuk</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon"><i class="fa-regular fa-circle-check"></i></div>
                <div class="stat-info">
                    <h3 class="counter" data-target="98" data-suffix="%">0</h3>
                    <p>Tindak Lanjut</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon"><i class="fa-regular fa-clock"></i></div>
                <div class="stat-info">
                    <h3 class="counter" data-target="24" data-divider="/7">0</h3>
                    <p>Sistem Aktif</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon"><i class="fa-regular fa-user"></i></div>
                <div class="stat-info">
                    <h3 class="counter" data-target="100">0</h3>
                    <p>Pengguna Aktif</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="cta-box">
        <div class="cta-left">
            <div class="cta-shield-icon"><i class="fa-solid fa-shield-halved"></i></div>
            <div class="cta-text">
                <h2>Laporkan Sekarang, Jadilah Bagian dari Perubahan!</h2>
                <p>Setiap laporan yang Anda buat sangat berarti untuk menciptakan kampus yang lebih aman dan nyaman untuk kita semua.</p>
            </div>
        </div>
        <a href="{{ route('pengguna.laporan.create') }}" class="cta-btn-white">
            Buat Laporan Sekarang <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>
</section>

<footer class="footer" id="kontak">
    <div class="footer-grid">
        <div class="footer-col">
            <h3>Hubungi Kami</h3>
            <p class="footer-desc">Jika Anda memiliki pertanyaan atau membutuhkan bantuan, jangan ragu untuk menghubungi kami.</p>
            <div class="contact-item"><i class="fa-solid fa-phone"></i> +62 811-7588-888</div>
            <div class="contact-item"><i class="fa-solid fa-envelope"></i> pelaporanks@polbeng.ac.id</div>
            <div class="contact-item"><i class="fa-solid fa-location-dot"></i> Jl. Bathin Alam, Sungai Alam, Bengkalis, Riau 28754</div>
        </div>
        <div class="footer-col">
            <h3>Email</h3>
            <p class="footer-desc">Kirimkan pertanyaan atau saran melalui email resmi kami.</p>
            <div class="contact-item"><i class="fa-solid fa-envelope"></i> <div>pelaporanks@polbeng.ac.id<br><span style="font-size:12px; color:#475569;">Respon dalam 1x24 jam</span></div></div>
        </div>
        <div class="footer-col">
            <h3>Ikuti Kami</h3>
            <p class="footer-desc">Dapatkan informasi terbaru melalui media sosial kami.</p>
            <div class="socials">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div>© 2026 PelaporanKS - Politeknik Negeri Bengkalis. All rights reserved.</div>
        <div class="footer-links">
            <a href="#">Kebijakan Privasi</a>
            <a href="#">Syarat & Ketentuan</a>
        </div>
    </div>
</footer>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll('.counter');
    const speed = 60;

    const startCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const suffix = counter.getAttribute('data-suffix') || '';
        const divider = counter.getAttribute('data-divider') || '';
        const hasPlus = (target === 125 || target === 100); 

        const updateCount = () => {
            const count = +counter.innerText.replace(/[^0-9]/g, '');
            const inc = Math.ceil(target / speed);

            if (count < target) {
                counter.innerText = (count + inc > target ? target : count + inc) + suffix + divider + (hasPlus && count + inc >= target ? '+' : '');
                setTimeout(updateCount, 20);
            } else {
                counter.innerText = target + suffix + divider + (hasPlus ? '+' : '');
            }
        };
        updateCount();
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                startCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));
});
</script>

</body>
</html>