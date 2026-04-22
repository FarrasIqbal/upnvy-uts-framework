<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Admin Panel - UPNYK' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="icon" href="<?= base_url('images/logo-upn.png') ?>" type="image/png">
    <style>
        body {
            background-color: #f4f6f9;
            /* Warna background abu-abu terang khas dashboard */
        }

        /* --- STYLING KHUSUS SIDEBAR --- */
        .sidebar {
            width: 260px;
            background-color: #1f2d3d;
            /* Warna biru gelap / slate */
            color: #fff;
            height: 100vh;
            position: fixed;
            /* Membuat sidebar tidak ikut ter-scroll */
            display: flex;
            flex-direction: column;
            transition: all 0.3s;
        }

        .sidebar-brand {
            padding: 20px;
            font-size: 1.25rem;
            text-decoration: none;
            color: #fff;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-nav {
            padding: 15px 0;
            flex-grow: 1;
            /* Mendorong area footer ke bawah */
        }

        .sidebar-nav .nav-link {
            color: #c2c7d0;
            padding: 12px 20px;
            transition: all 0.2s;
            border-left: 4px solid transparent;
        }

        .sidebar-nav .nav-link:hover {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.05);
        }

        .sidebar-nav .nav-link.active {
            color: #ffda1a !important;
            /* Warna kuning khas */
            background-color: rgba(255, 255, 255, 0.05);
            border-left: 4px solid #ffda1a;
            font-weight: 600;
        }

        .sidebar-footer {
            padding: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* --- STYLING AREA KONTEN UTAMA --- */
        .main-content {
            margin-left: 260px;
            /* Memberi ruang untuk sidebar di kiri */
            padding: 30px;
            min-height: 100vh;
        }

        /* Responsif untuk layar HP/Tablet (Sidebar sembunyi) */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

    <div class="d-flex">
        <nav class="sidebar shadow">
            <a href="<?= base_url('admin/berita') ?>" class="sidebar-brand fw-bold d-flex align-items-center">
                <i class="fas fa-user-shield text-warning me-3" style="font-size: 1.8rem;"></i>
                <span>Admin Panel</span>
            </a>

            <div class="sidebar-nav">
                <div class="text-uppercase text-secondary fw-bold mb-2 px-3" style="font-size: 0.75rem; letter-spacing: 1px;">Menu Utama</div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link <?= (url_is('admin/berita*')) ? 'active' : '' ?>" href="<?= base_url('admin/berita') ?>">
                            <i class="fas fa-newspaper me-2" style="width: 20px;"></i> Manajemen Berita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (url_is('admin/pengumuman*')) ? 'active' : '' ?>" href="<?= base_url('admin/pengumuman') ?>">
                            <i class="fas fa-bullhorn me-2" style="width: 20px;"></i> Manajemen Pengumuman
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (url_is('admin/sejarah*')) ? 'active' : '' ?>" href="<?= base_url('admin/sejarah') ?>">
                            <i class="fa-solid fa-book me-2" style="width: 20px;"></i> Manajemen Sejarah
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= (url_is('admin/fakultas*')) ? 'active' : '' ?>" href="<?= base_url('admin/fakultas') ?>">
                            <i class="fas fa-university me-2" style="width: 20px;"></i> Manajemen Fakultas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= (url_is('admin/download*')) ? 'active' : '' ?>" href="<?= base_url('admin/download') ?>">
                            <i class="fas fa-file-download me-2" style="width: 20px;"></i> Manajemen Download
                        </a>
                    </li>

                    <li class="nav-item mt-3">
                        <a class="nav-link <?= (url_is('admin/pengaturan*')) ? 'active' : '' ?>" href="<?= base_url('admin/pengaturan') ?>">
                            <i class="fas fa-cog me-2" style="width: 20px;"></i> Pengaturan Web
                        </a>
                    </li>
                </ul>
            </div>

            <div class="sidebar-footer d-flex flex-column gap-2">
                <a href="<?= base_url('/') ?>" class="btn btn-outline-light btn-sm text-start" target="_blank">
                    <i class="fas fa-external-link-alt me-2"></i> Lihat Website
                </a>
                <a href="<?= base_url('logout') ?>" class="btn btn-danger btn-sm text-start fw-bold" onclick="return confirm('Apakah Anda yakin ingin logout?');">
                    <i class="fas fa-sign-out-alt me-2"></i> Logout
                </a>
            </div>
        </nav>

        <main class="main-content w-100">
            <?= $this->renderSection('content') ?>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>