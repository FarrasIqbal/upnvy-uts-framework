<?= $this->extend('layout/main.php'); ?>

<?= $this->section('content'); ?>

<style>
    .faculty-card {
        border-radius: 8px;
        /* Lengkungan ujung kartu */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .faculty-card:hover {
        transform: translateY(-5px);
        /* Efek naik saat di-hover */
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15) !important;
    }

    .faculty-title-box {
        background-color: #1f3044;
        /* Warna biru gelap / slate khas */
        padding: 15px 10px;
    }
</style>

<div class="container my-5 py-4">

    <div class="row mb-5 align-items-center">
        <div class="col-lg-4 mb-4 mb-lg-0">
            <h3 class="fw-bold mb-3 text-dark">Pendidikan</h3>
            <div style="width: 40px; height: 3px; background-color: #ffda1a; margin-bottom: 25px;"></div>
            <p class="text-secondary" style="font-size: 0.95rem;">Pendidikan</p>
        </div>

        <div class="col-lg-8">
            <img src="images/gedung-upn.png" class="img-fluid w-100 shadow-sm" alt="Gedung UPNYK">
        </div>
    </div>

    <div class="container my-5 py-3">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

            <?php foreach ($fakultas as $f) : ?>
                <div class="col">
                    <a href="<?= base_url('pendidikan/' . $f['slug']) ?>" class="text-decoration-none">
                        <div class="card h-100 border-0 rounded-0 shadow-sm overflow-hidden" style="border-radius: 8px;">
                            <img src="<?= base_url('assets/img/fakultas/' . $f['gambar_fakultas']) ?>" class="card-img" style="height: 220px; object-fit: cover;" alt="<?= esc($f['singkatan']) ?>">

                            <div class="card-footer text-white text-center py-3" style="background-color: #1a2a3a; border-top: none;">
                                <h6 class="mb-0 fw-bold" style="letter-spacing: 0.5px;"><?= strtoupper($f['nama_fakultas']) ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>