<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PelaporanKS</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body{
            min-height:100vh;
            background: linear-gradient(135deg, #020617, #041c4d, #020617);
            overflow-x:hidden;
        }

        /* BACKGROUND IMAGE DECORATION */
        .background{
            position:fixed;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background: linear-gradient(rgba(2,6,23,.75), rgba(2,6,23,.80)), url('{{ asset("images/bg-polbeng.jpg") }}');
            background-size:cover;
            background-position:center;
            background-repeat:no-repeat;
            z-index:-1;
        }

        .background::after{
            content:'';
            position:absolute;
            inset:0;
            background: radial-gradient(circle at center, rgba(37,99,235,.2), transparent 70%);
        }

        /* CONTAINER LAYOUT */
        .container{
            width:100%;
            height:100vh;
            display:grid;
            grid-template-columns: 1.2fr 0.9fr;
        }

        /* LEFT CONTENT SIDE */
        .left{
            padding:60px;
            display:flex;
            flex-direction:column;
            justify-content:center;
            color:white;
        }

        .logo{
            display:flex;
            align-items:center;
            gap:15px;
            margin-bottom:40px;
        }

        .logo img{
            width:70px;
            height:70px;
            object-fit: contain;
        }

        .logo-text h3{
            font-size:26px;
            font-weight: 700;
        }

        .logo-text p{
            color:#cbd5e1;
            font-size: 14px;
        }

        .title{
            font-size:64px;
            font-weight:800;
            line-height:1.1;
            margin-bottom:20px;
            letter-spacing: -1px;
        }

        .title span{
            background: linear-gradient(to right, #3b82f6, #60a5fa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .desc{
            max-width:600px;
            font-size:18px;
            line-height:1.8;
            color:#cbd5e1;
            margin-bottom:50px;
        }

        .features{
            display:flex;
            gap:20px;
            flex-wrap:wrap;
        }

        .feature{
            padding:16px 25px;
            border-radius:18px;
            background: rgba(255,255,255,.04);
            backdrop-filter:blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,.08);
            display: flex;
            align-items: center;
            gap: 12px;
            transition: .3s;
        }

        .feature:hover {
            background: rgba(255,255,255, 0.08);
            border-color: rgba(59,130,246, 0.3);
            transform: translateY(-2px);
        }

        .feature i{
            font-size:22px;
            color:#60a5fa;
        }

        .feature h4 {
            font-size: 15px;
            font-weight: 600;
        }

        /* =========================
        RIGHT LOGIN PANEL (GLASSMORPHISM)
        ========================= */
        .right{
            display:flex;
            justify-content:center;
            align-items:center;
            padding:50px;
        }

        .login-card{
            width:100%;
            max-width:480px;
            padding:45px;
            border-radius:30px;
            background: rgba(255,255,255,.04);
            backdrop-filter:blur(25px);
            -webkit-backdrop-filter: blur(25px);
            border: 1px solid rgba(255,255,255,.08);
            box-shadow: 0 20px 60px rgba(0,0,0,.4);
            color:white;
        }

        .login-badge{
            display:inline-flex;
            align-items:center;
            gap:10px;
            padding:8px 16px;
            border-radius:50px;
            background: rgba(37,99,235,.15);
            border: 1px solid rgba(59,130,246,.25);
            margin-bottom:25px;
            color:#93c5fd;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .login-title{
            font-size:34px;
            font-weight:800;
            margin-bottom:10px;
            letter-spacing: -0.5px;
        }

        .login-subtitle{
            color:#cbd5e1;
            font-size: 14px;
            line-height:1.7;
            margin-bottom:35px;
        }

        /* FORM FIELD */
        .form-group{
            margin-bottom:22px;
        }

        .form-group label{
            display:block;
            margin-bottom:10px;
            font-weight:600;
            font-size: 14px;
            color:#e2e8f0;
        }

        .input-box{
            position:relative;
        }

        .input-box i{
            position:absolute;
            left:18px;
            top:50%;
            transform: translateY(-50%);
            color:#94a3b8;
            font-size: 16px;
        }

        .input-box input{
            width:100%;
            padding:16px 18px 16px 50px;
            border-radius:16px;
            border: 1px solid rgba(255,255,255,.08);
            background: rgba(255,255,255,.03);
            color:white;
            font-size:15px;
            outline:none;
            transition:.3s ease;
        }

        .input-box input:focus{
            border-color:#3b82f6;
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 0 15px rgba(59,130,246,.25);
        }

        .input-box input::placeholder{
            color:#64748b;
        }

        /* ERROR EXCEPTION FLASH */
        .error{
            background: rgba(239,68,68,.1);
            border: 1px solid rgba(239,68,68,.25);
            padding:15px;
            border-radius:14px;
            margin-bottom:25px;
            color:#fecaca;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* SUBMIT ACTIONS */
        .btn-login{
            width:100%;
            padding:16px;
            border:none;
            border-radius:16px;
            font-size:15px;
            font-weight:700;
            cursor:pointer;
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            color:white;
            transition:.3s;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .btn-login:hover{
            transform:translateY(-2px);
            box-shadow: 0 12px 25px rgba(37,99,235,.4);
        }

        .back-home{
            display:flex;
            justify-content:center;
            margin-top:25px;
        }

        .back-home a{
            text-decoration:none;
            color:#93c5fd;
            font-size: 14px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: .2s;
        }

        .back-home a:hover {
            color: #3b82f6;
        }

        /* RESPONSIVE LAYOUT */
        @media(max-width:1100px){
            .container{
                grid-template-columns:1fr;
            }
            .left{
                display:none;
            }
            body{
                overflow-y:auto;
            }
            .right {
                min-height: 100vh;
            }
        }

        @media(max-width:600px){
            .login-card{
                padding:30px 24px;
            }
            .login-title{
                font-size:28px;
            }
        }
    </style>
</head>

<body>

    <div class="background"></div>

    <div class="container">

        <div class="left">
            <div class="logo">
                <img src="{{ asset('images/logo-polbeng.png') }}" alt="Logo Polbeng">
                <div class="logo-text">
                    <h3>PelaporanKS</h3>
                    <p>Politeknik Negeri Bengkalis</p>
                </div>
            </div>

            <h1 class="title">
                Sistem Pelaporan<br>
                <span>Keamanan &</span><br>
                Kenyamanan Kampus
            </h1>

            <p class="desc">
                Platform resmi Politeknik Negeri Bengkalis untuk menerima laporan secara aman, 
                rahasia, dan profesional guna menciptakan lingkungan kampus yang nyaman bagi 
                seluruh civitas akademika.
            </p>

            <div class="features">
                <div class="feature">
                    <i class="fa-solid fa-user-shield"></i>
                    <h4>Anonim</h4>
                </div>
                <div class="feature">
                    <i class="fa-solid fa-lock"></i>
                    <h4>Aman</h4>
                </div>
                <div class="feature">
                    <i class="fa-solid fa-check-circle"></i>
                    <h4>Terverifikasi</h4>
                </div>
            </div>
        </div>

        <div class="right">
            <div class="login-card">
                
                <div class="login-badge">
                    <i class="fa-solid fa-shield-halved"></i> Portal Petugas
                </div>

                <h2 class="login-title">Masuk ke Sistem</h2>
                
                <p class="login-subtitle">
                    Silakan login menggunakan akun Admin atau Satgas untuk mengelola laporan yang masuk.
                </p>

                @if($errors->any())
                <div class="error">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <span>{{ $errors->first() }}</span>
                </div>
                @endif

                <form method="POST" action="{{ route('login.proses') }}">
                    @csrf

                    <div class="form-group">
                        <label>Username</label>
                        <div class="input-box">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="username" placeholder="Masukkan username" required autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-box">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="password" placeholder="Masukkan password" required>
                        </div>
                    </div>

                    <button type="submit" class="btn-login">
                        <i class="fa-solid fa-right-from-bracket"></i> Login Sekarang
                    </button>
                </form>

                <div class="back-home">
                    <a href="{{ route('landing') }}">
                        <i class="fa-solid fa-arrow-left"></i> Kembali ke Beranda
                    </a>
                </div>

                <hr style="margin:30px 0; border:none; height:1px; background:rgba(255,255,255,.08);">

                <div style="display:flex; justify-content:space-between; align-items:center; font-size:13px; color:#94a3b8; flex-wrap:wrap; gap:10px;">
                    <span>© 2026 PelaporanKS</span>
                    <span>Politeknik Negeri Bengkalis</span>
                </div>

            </div>
        </div>

    </div>

</body>
</html>