<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Admin Panel - UPNYK' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f4f6f9;
            /* Warna background abu-abu terang khas dashboard */
        }

        .admin-navbar {
            background-color: #1f2d3d;
            /* Warna biru gelap / slate */
        }

        .nav-link.active {
            color: #ffda1a !important;
            /* Warna kuning jika menu sedang aktif */
            font-weight: bold;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark admin-navbar sticky-top shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?= base_url('admin/berita') ?>">
                <i class="fas fa-user-shield me-2 text-warning" style="font-size: 1.5rem;"></i>
                Admin Panel
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="adminNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item me-3">
                        <a class="nav-link <?= (url_is('admin/berita*')) ? 'active' : '' ?>" href="<?= base_url('admin/berita') ?>">
                            <i class="fas fa-newspaper me-1"></i> Manajemen Berita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (url_is('admin/pengumuman*')) ? 'active' : '' ?>" href="<?= base_url('admin/pengumuman') ?>">
                            <i class="fas fa-bullhorn me-1"></i> Manajemen Pengumuman
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= (url_is('admin/sejarah*')) ? 'active' : '' ?>" href="<?= base_url('admin/sejarah') ?>">
                            <i class="fa-solid fa-book"></i> Manajemen Sejarah
                        </a>
                    </li>
                </ul>

                <div class="d-flex">
                    <a href="<?= base_url('/') ?>" class="btn btn-outline-light btn-sm px-3 rounded-pill" target="_blank">
                        <i class="fas fa-external-link-alt me-1"></i> Lihat Website Asli
                    </a>

                    <a href="<?= base_url('logout') ?>" class="btn btn-danger btn-sm px-3 mx-2 rounded-pill fw-bold">
                        <i class="fas fa-sign-out-alt me-1"></i> Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <?= $this->renderSection('content') ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>