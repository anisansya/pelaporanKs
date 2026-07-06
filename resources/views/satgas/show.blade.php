<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investigasi Laporan - PPKS Satgas</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: #eef2ff;
            display: flex;
        }

        /* SIDEBAR */
        .sidebar {
            width: 280px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: #030b2b;
            padding: 14px;
            color: white;
            z-index: 10;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px;
            margin-bottom: 35px;
        }

        .logo img {
            width: 48px;
            height: 48px;
            object-fit: contain;
        }

        .logo h2 {
            font-size: 20px;
            margin: 0;
        }

        .logo span {
            color: #94a3b8;
            font-size: 13px;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 16px 18px;
            text-decoration: none;
            color: #cbd5e1;
            border-radius: 18px;
            font-size: 16px;
            font-weight: 500;
            transition: all .3s ease;
        }

        .menu a i {
            width: 25px;
            text-align: center;
            font-size: 18px;
        }

        .menu a:hover,
        .menu a.active {
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            color: white;
        }

        /* MAIN CONTENT */
        .main {
            margin-left: 280px;
            width: calc(100% - 280px);
            padding: 30px;
        }

        .card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
        }

        /* KOP SURAT */
        .kop-surat {
            text-align: center;
            margin-bottom: 25px;
        }

        .kop-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .kop-header img {
            width: 80px;
            height: 80px;
            object-fit: contain;
        }

        .kop-text {
            flex: 1;
            text-align: center;
            color: #000;
        }

        .kop-text h2 {
            font-size: 16px;
            font-weight: 600;
            margin: 0;
            letter-spacing: 0.5px;
        }

        .kop-text h1 {
            font-size: 20px;
            margin-top: 5px;
            font-weight: 700;
            color: #1e40af;
        }

        .garis {
            border-bottom: 3px solid #000;
            margin-top: 15px;
        }

        .judul-form {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin: 25px 0;
            text-transform: uppercase;
            color: #000;
            letter-spacing: 0.5px;
        }

        /* TABEL FORM */
        .form-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
        }

        .form-table td {
            border: 1px solid #d1d5db;
            padding: 12px 15px;
            vertical-align: top;
            font-size: 14px;
            color: #374151;
            line-height: 1.5;
        }

        /* Kolom Kiri Hijau Pastel Sesuai Dokumen Fisik PPKS */
        .form-table .label {
            width: 35%;
            background: #e1f0da;
            font-weight: 600;
            color: #111827;
        }

        /* Elemen Input */
        .form-table input[type="text"],
        .form-table select,
        .form-table textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 14px;
            background: #fff;
            color: #334155;
            transition: all 0.2s;
        }

        .form-table input:focus,
        .form-table select:focus,
        .form-table textarea:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .form-table textarea {
            min-height: 100px;
            resize: vertical;
        }

        .footer-form {
            text-align: center;
            margin-top: 35px;
            font-style: italic;
            font-size: 13px;
            color: #64748b;
        }

        /* BUTTONS */
        .btn-area {
            margin-top: 30px;
            display: flex;
            justify-content: flex-end;
            gap: 12px;
        }

        .btn {
            border: none;
            padding: 12px 24px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .btn-submit {
            background: #2563eb;
            color: white;
        }

        .btn-submit:hover {
            background: #1d4ed8;
        }

        .btn-back {
            background: #e2e8f0;
            color: #334155;
        }

        .btn-back:hover {
            background: #cbd5e1;
        }

        /* MEDIA PRINT */
        @media print {
            body { background: white !important; }
            .sidebar, .btn-area { display: none !important; }
            .main { margin: 0; width: 100%; padding: 0; }
            .card { box-shadow: none; border: none; padding: 0; }
            .form-table .label { background: #e1f0da !important; -webkit-print-color-adjust: exact; print-color-adjust: exact; }
            input, select, textarea { border: none !important; background: transparent !important; padding: 0 !important; resize: none; }
        }

        @media(max-width: 900px) {
            .sidebar { display: none; }
            .main { margin-left: 0; width: 100%; }
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <div class="logo">
            <img src="{{ asset('images/logo-polbeng.png') }}" alt="Logo">
            <div>
                <h2>PelaporanKS</h2>
                <span>Satgas Panel</span>
            </div>
        </div>
        <div class="menu">
            <a href="{{ route('satgas.dashboard') }}">
                <i class="fa-solid fa-house"></i> <span>Dashboard</span>
            </a>
            <a href="{{ route('satgas.laporan') }}">
                <i class="fa-solid fa-file-lines"></i> <span>Laporan Masuk</span>
            </a>
            <a href="{{ route('satgas.riwayat') }}">
                    <i class="fa-solid fa-folder-open"></i> Riwayat Investigasi
                </a>
            <a href="{{ route('logout') }}">
                <i class="fa-solid fa-right-from-bracket"></i> <span>Logout</span>
            </a>
        </div>
    </div>

    <div class="main">
        <div class="card">

            <div class="kop-surat">
                <div class="kop-header">
                    <img src="{{ asset('images/logo-polbeng.png') }}" alt="Logo Polbeng">
                    <div class="kop-text">
                        <h2>SATUAN TUGAS</h2>
                        <h2>PENCEGAHAN DAN PENANGANAN KEKERASAN SEKSUAL</h2>
                        <h1>POLITEKNIK NEGERI BENGKALIS</h1>
                    </div>
                    <img src="{{ asset('images/logo-ppks.png') }}" alt="Logo PPKS">
                </div>
                <div class="garis"></div>
            </div>

            <div class="judul-form">FORMULIR PENERIMAAN LAPORAN & HASIL INVESTIGASI</div>

            <form action="{{ route('satgas.kirimInvestigasi', $laporan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <table class="form-table">
                    <tr>
    <td class="label">Kode Laporan</td>
    <td>{{ $laporan->kode_laporan }}</td>
</tr>

<tr>
    <td class="label">Tanggal Laporan</td>
    <td>{{ $laporan->created_at->format('d F Y H:i') }}</td>
</tr>

<tr>
    <td class="label">Jenis Kasus</td>
    <td>{{ $laporan->jenis_kasus }}</td>
</tr>

<tr>
    <td class="label">Lokasi Kejadian</td>
    <td>{{ $laporan->lokasi }}</td>
</tr>

<tr>
    <td class="label">Waktu Kejadian</td>
    <td>{{ \Carbon\Carbon::parse($laporan->waktu_kejadian)->format('d F Y H:i') }}</td>
</tr>

<tr>
    <td class="label">Kronologi Kejadian</td>
    <td style="white-space:pre-line">
        {{ $laporan->deskripsi }}
    </td>
</tr>

<tr>
    <td class="label">Alasan Pengaduan</td>
    <td>{{ $laporan->alasan_pengaduan }}</td>
</tr>

<tr>
    <td class="label">Kebutuhan Korban</td>
    <td>{{ $laporan->kebutuhan_korban }}</td>
</tr>

<tr>
    <td class="label">Bukti Pendukung</td>
    <td>
        @if($laporan->bukti)
            <a href="{{ asset('storage/'.$laporan->bukti) }}" target="_blank">
                Lihat Bukti
            </a>
        @else
            Tidak ada bukti
        @endif
    </td>
</tr>

                    <tr>
                        <td class="label"><i class="fa-solid fa-user-shield"></i> Nama Pemeriksa / Tim</td>
                        <td>
                            <input type="text" name="nama_pemeriksa" placeholder="Masukkan Nama Satuan Tugas / Anggota Tim" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="label"><i class="fa-solid fa-location-dot"></i> Media / Tempat Pemeriksaan</td>
                        <td>
                            <input type="text" name="tempat_pemeriksaan" placeholder="Misal: Ruang Rapat Satgas / Zoom Meeting" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="label"><i class="fa-solid fa-square-poll-horizontal"></i> Status Investigasi</td>
                        <td>
                            <select name="status_investigasi" required>
                                <option value="">-- Pilih Status --</option>
                                <option value="Dalam Proses">Dalam Proses</option>
                                <option value="Selesai Sidang">Selesai Sidang</option>
                                <option value="Ditangguhkan">Ditangguhkan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="label"><i class="fa-solid fa-triangle-exclamation"></i> Tingkat Risiko Kasus</td>
                        <td>
                            <select name="tingkat_risiko" required>
                                <option value="">-- Pilih Tingkat Risiko --</option>
                                <option value="Rendah">Rendah</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Tinggi">Tinggi</option>
                                <option value="Sangat Tinggi">Sangat Tinggi</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="label"><i class="fa-solid fa-shield-halved"></i> Validitas Investigasi</td>
                        <td>
                            <select name="validitas_investigasi" required>
                                <option value="">-- Pilih Validitas --</option>
                                <option value="Valid">Valid</option>
                                <option value="Perlu Verifikasi Lanjutan">Perlu Verifikasi Lanjutan</option>
                                <option value="Tidak Valid">Tidak Valid</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="label"><i class="fa-solid fa-gavel"></i> Kesimpulan Akhir (Hasil Sidang)</td>
                        <td>
                            <textarea name="kesimpulan_investigasi" placeholder="Tuliskan keputusan akhir, pembuktian pasal, atau ringkasan hasil akhir sidang secara naratif..." required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="label"><i class="fa-solid fa-clock-rotate-left"></i> Kronologi Kejadian (Hasil Pemeriksaan)</td>
                        <td>
                            <textarea name="kronologi_investigasi" placeholder="Tuliskan runtutan kronologi peristiwa berdasar temuan objektif tim..." required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="label"><i class="fa-solid fa-magnifying-glass"></i> Temuan Utama Investigasi</td>
                        <td>
                            <textarea name="" placeholder="Jelaskan fakta-fakta penting yang ditemukan di lapangan..." required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="label"><i class="fa-solid fa-file-invoice"></i> Hasil Pemeriksaan Bukti-Bukti</td>
                        <td>
                            <textarea name="bukti_investigasi" placeholder="Uraikan keabsahan rekaman, dokumen, chat, atau saksi yang diperiksa..." required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="label"><i class="fa-solid fa-hand-holding-hand"></i> Rekomendasi Tindak Lanjut Satgas</td>
                        <td>
                            <textarea name="rekomendasi_investigasi" placeholder="Tuliskan rekomendasi sanksi administratif terlapor, tindakan pelindungan, atau pemulihan korban..." required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="label"><i class="fa-solid fa-paperclip"></i> Unggah Dokumen </td>
                        <td>
                            <input 
    type="file" 
    name="lampiran_investigasi[]" 
    multiple
    accept="image/*,.pdf,.doc,.docx">
                        </td>
                    </tr>
                </table>

                <div class="footer-form">- Satgas Pencegahan Anti Kekerasan Seksual Politeknik Negeri Bengkalis -</div>

                <div class="btn-area">
                    <button type="submit" class="btn btn-submit"><i class="fa-solid fa-paper-plane"></i> Kirim Hasil Investigasi</button>
                    <a href="{{ route('satgas.laporan') }}" class="btn btn-back">Kembali</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>