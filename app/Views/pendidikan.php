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

    <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">

        <div class="col">
            <a href="<?= base_url('pendidikan/feb') ?>" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm overflow-hidden faculty-card">
                    <img src="images/FEB.png" class="card-img-top rounded-0" alt="FEB" style="height: 220px; object-fit: cover;">
                    <div class="faculty-title-box text-center">
                        <h6 class="text-white fw-bold mb-0" style="font-size: 0.85rem; letter-spacing: 0.5px;">FAKULTAS EKONOMI DAN BISNIS</h6>
                    </div>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="#" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm overflow-hidden faculty-card">
                    <img src="images/FISIP.png" class="card-img-top rounded-0" alt="FISIP" style="height: 220px; object-fit: cover;">
                    <div class="faculty-title-box text-center">
                        <h6 class="text-white fw-bold mb-0" style="font-size: 0.85rem; letter-spacing: 0.5px;">FAKULTAS ILMU SOSIAL DAN ILMU POLITIK</h6>
                    </div>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="#" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm overflow-hidden faculty-card">
                    <img src="images/FAPET.png" class="card-img-top rounded-0" alt="Fakultas Pertanian" style="height: 220px; object-fit: cover;">
                    <div class="faculty-title-box text-center">
                        <h6 class="text-white fw-bold mb-0" style="font-size: 0.85rem; letter-spacing: 0.5px;">FAKULTAS PERTANIAN</h6>
                    </div>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="#" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm overflow-hidden faculty-card">
                    <img src="images/TEKDUS.png" class="card-img-top rounded-0" alt="FTI" style="height: 220px; object-fit: cover;">
                    <div class="faculty-title-box text-center">
                        <h6 class="text-white fw-bold mb-0" style="font-size: 0.85rem; letter-spacing: 0.5px;">FAKULTAS TEKNIK INDUSTRI</h6>
                    </div>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="#" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm overflow-hidden faculty-card">
                    <img src="images/FT.png" class="card-img-top rounded-0" alt="FTM" style="height: 220px; object-fit: cover;">
                    <div class="faculty-title-box text-center">
                        <h6 class="text-white fw-bold mb-0" style="font-size: 0.85rem; letter-spacing: 0.5px;">FAKULTAS TEKNOLOGI MINERAL DAN ENERGI</h6>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>
<?= $this->endSection(); ?>