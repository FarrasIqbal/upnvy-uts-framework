<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPN "Veteran" Yogyakarta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel="icon" href="<?= base_url('images/logo-upn.png') ?>" type="image/png">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .navbar {
            transition: background-color 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
        }

        /* Class baru yang akan ditambahkan otomatis oleh JavaScript saat di-scroll */
        .navbar-scrolled {
            background-color: #3b7e2c !important;
            /* Warna hijau UPN */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            /* Tambahan bayangan di bawah navbar */
        }

        /* Mengubah warna teks link menjadi putih saat navbar menjadi hijau */
        .navbar-scrolled .nav-link {
            color: #ffffff !important;
        }

        /* Mengubah ikon menu (hamburger) menjadi putih di mode HP */
        .navbar-scrolled .navbar-toggler-icon {
            filter: invert(1);
        }

        .navbar-scrolled .brand-text {
            color: #ffffff !important;
        }

        .bg-upn-green {
            background-color: #3d9d0f;
        }

        /* Warna hijau khas UPN */
        .navbar-brand img {
            height: 60px;
        }

        .hero-section {
            background-color: #3d9d0f;
            color: white;
            padding: 60px 0;
        }

        .footer {
            background-color: #2E7D32;
            color: white;
            padding: 40px 0;
        }

        .hover-success {
            transition: color 0.3s ease;
        }

        .hover-success:hover {
            color: #4CAF50 !important;
            /* Warna hijau UPN */
        }

        /* Custom CSS untuk Section Tridharma */
        .tridharma-tabs .nav-link {
            background-color: #f8f9fa;
            /* Warna abu-abu terang untuk tab tidak aktif */
            color: #6c757d;
            /* Warna teks abu-abu */
            border: 1px solid #e9ecef;
            font-weight: 600;
            font-size: 0.9rem;
            padding: 15px 0;
            border-radius: 0;
            /* Menghilangkan lengkungan (siku-siku) */
        }

        .tridharma-tabs .nav-link.active {
            background-color: #5cb85c !important;
            /* Warna hijau UPN */
            color: white !important;
            border-color: #5cb85c;
        }

        /* Membuat scrollbar kustom agar rapi seperti di gambar */
        .scrollable-content {
            max-height: 400px;
            /* Batas tinggi konten sebelum di-scroll */
            overflow-y: auto;
            padding-right: 15px;
        }

        .scrollable-content::-webkit-scrollbar {
            width: 6px;
        }

        .scrollable-content::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .scrollable-content::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 10px;
        }

        .scrollable-content::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }

        .upn-footer {
            background-color: #3b7e2c;
            /* Menyesuaikan hijau UPN */
            color: #ffffff;
            font-size: 0.9rem;
            /* Ukuran font standar footer */
            padding-top: 60px;
            padding-bottom: 20px;
        }

        .upn-footer h5 {
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 25px;
            letter-spacing: 0.5px;
        }

        .upn-footer h6 {
            font-weight: 700;
            font-size: 0.85rem;
            margin-bottom: 10px;
            margin-top: 20px;
        }

        .upn-footer p {
            margin-bottom: 5px;
            line-height: 1.6;
        }

        .upn-footer a {
            color: #ffffff;
            text-decoration: none;
        }

        .upn-footer a:hover {
            color: #ffda1a;
            /* Efek hover kuning agar interaktif */
        }

        /* Custom List Bullets (Titik Putih) */
        .footer-list {
            list-style-type: none;
            padding-left: 0;
        }

        .footer-list li {
            margin-bottom: 12px;
            position: relative;
            padding-left: 15px;
            line-height: 1.4;
        }

        .footer-list li::before {
            content: "\2022";
            /* Kode HTML untuk bullet (•) */
            position: absolute;
            left: 0;
            color: #ffffff;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <nav id="mainNav" class="navbar navbar-expand-lg navbar-light border-bottom sticky-top" style="background-color: #ffffff;">
        <div class="container">

            <a class="navbar-brand d-flex align-items-center gap-3" href="/">

                <img src="<?= base_url('images/logo-upn.png') ?>" alt="Logo UPN" style="height: 55px;">

                <div class="d-none d-md-flex flex-column justify-content-center">
                    <span class="fw-bold brand-text" style="color: #3b7e2c; font-size: 17px; line-height: 1.2;">UPN "VETERAN" YOGYAKARTA</span>
                    <span class="fw-bold brand-text" style="color: #3b7e2c; font-size: 13px; letter-spacing: 0.5px;">KAMPUS BELANEGARA</span>
                </div>

                <img src="<?= base_url('images/group-logo.png') ?>" alt="Logo BLU" style="height: 45px;" class="d-none d-lg-block ms-2">

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-uppercase fw-bold align-items-lg-center" style="font-size: 0.8rem;">
                    <li class="nav-item"><a class="nav-link text-success" href="<?= base_url('tentang-upn') ?>">Tentang UPN</a></li>
                    <li class="nav-item"><a class="nav-link text-success" href="<?= base_url('pendidikan') ?>">Pendidikan</a></li>
                    <li class="nav-item"><a class="nav-link text-success" href="<?= base_url('download') ?>">Download</a></li>

                    <li class="nav-item ms-lg-2">
                        <a class="nav-link text-success" href="#"><i class="fas fa-search"></i></a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <?= $this->renderSection('content') ?>

    <?php
    $footerSetting = (new \App\Models\PengaturanModel())->first();
    ?>

    <footer class="upn-footer mt-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <h5>UPN "VETERAN" YOGYAKARTA</h5>

                    <h6 class="fw-bold mb-3">KAMPUS I</h6>
                    <p class="mb-1" style="font-size: 0.9rem;"><?= esc($footerSetting['kampus_1_alamat']) ?></p>
                    <p class="mb-1" style="font-size: 0.9rem;"><?= esc($footerSetting['kampus_1_telepon']) ?></p>
                    <p class="mb-4" style="font-size: 0.9rem;"><?= esc($footerSetting['kampus_1_email']) ?></p>

                    <h6 class="fw-bold mb-3">KAMPUS II</h6>
                    <p class="mb-1" style="font-size: 0.9rem;"><?= esc($footerSetting['kampus_2_alamat']) ?></p>
                    <p class="mb-1" style="font-size: 0.9rem;"><?= esc($footerSetting['kampus_2_telepon']) ?></p>
                    <p class="mb-1" style="font-size: 0.9rem;"><?= esc($footerSetting['kampus_2_email']) ?></p>
                </div>

                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <h5>LEMBAGA & BIRO</h5>
                    <ul class="footer-list">
                        <li><a href="#">Biro AKPK</a></li>
                        <li><a href="#">Biro Perencanaan Keuangan Dan Umum</a></li>
                        <li><a href="#">LP3M</a></li>
                        <li><a href="#">LPPM</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h5>UNIT PELAKSANA TEKNIS</h5>
                    <ul class="footer-list">
                        <li><a href="#">UPA Bahasa</a></li>
                        <li><a href="#">UPA Laboratorium Terpadu</a></li>
                        <li><a href="#">UPA Pengembangan Karir Dan Kewirausahaan</a></li>
                        <li><a href="#">UPA Perpustakaan</a></li>
                        <li><a href="#">UPA Teknologi Informasi Dan Komunikasi (TIK)</a></li>
                    </ul>
                </div>

            </div>

            <div class="row mt-5 pt-3">
                <div class="col-12">
                    <p class="mb-0" style="font-size: 0.85rem;">&copy; Copyright 2026. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.addEventListener('scroll', function() {
                var navbar = document.getElementById('mainNav');

                // Jika halaman di-scroll lebih dari 50 pixel dari paling atas
                if (window.scrollY > 50) {
                    // Tambahkan class warna hijau
                    navbar.classList.add('navbar-scrolled');
                    // Hilangkan border bawah bawaan agar lebih rapi
                    navbar.classList.remove('border-bottom');
                } else {
                    // Jika kembali ke paling atas, hilangkan warna hijaunya
                    navbar.classList.remove('navbar-scrolled');
                    // Kembalikan border bawah
                    navbar.classList.add('border-bottom');
                }
            });
        });
    </script>
</body>

</html>