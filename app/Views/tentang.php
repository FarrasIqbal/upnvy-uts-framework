<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>

<div class="container my-5 py-4">

    <div class="row mb-5 pb-4 align-items-center">
        <div class="col-lg-6 pe-lg-5 mb-4 mb-lg-0">
            <h3 class="fw-bold mb-3 text-dark">Tentang UPN</h3>
            <div style="width: 40px; height: 3px; background-color: #ffda1a; margin-bottom: 25px;"></div>

            <p class="text-secondary" style="line-height: 1.8; text-align: justify; font-size: 0.95rem;">
                <?= esc($sejarah['tentang']) ?>
            </p>

        </div>

        <div class="col-lg-6 position-relative">
            <img src="images/gedung-upn.png" class="img-fluid w-100 shadow-sm" alt="Gedung UPNYK">

            <a href="https://www.youtube.com/watch?v=qSGv6f61bGw" target="_blank" class="position-absolute top-50 start-50 translate-middle text-decoration-none">
                <div class="rounded-circle d-flex align-items-center justify-content-center shadow transition hover-shadow" style="width: 70px; height: 70px; background-color: #ffc107; opacity: 0.95;">
                    <i class="fas fa-play text-white fs-3 ms-1"></i>
                </div>
            </a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-8 pe-lg-5 mb-5 mb-lg-0">
            <h3 class="fw-bold mb-3 text-dark">Sejarah UPN</h3>
            <div style="width: 40px; height: 3px; background-color: #ffda1a; margin-bottom: 25px;"></div>

            <p class="text-secondary" style="line-height: 1.8; text-align: justify; font-size: 0.95rem;">
                <?= esc(substr($sejarah['sejarah'], 0, 420)) ?>...
            </p>

            <a href="<?= base_url('detail-sejarah') ?>" class="text-secondary text-decoration-none border-bottom border-secondary pb-1 mt-2 d-inline-block hover-success" style="font-size: 0.9rem;">Baca Selengkapnya</a>
        </div>

        <div class="col-lg-4">
            <div class="p-4 h-100" style="background-color: #fbfbfb; border: 1px solid #f1f1f1;">
                <h5 class="fw-normal mb-4 text-dark">Manajemen</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-3"><a href="#" class="text-decoration-none text-secondary d-flex align-items-center hover-success" style="font-size: 0.95rem;"><i class="fas fa-chevron-right me-3" style="font-size: 0.6rem; color: #a0a0a0;"></i> Sejarah UPN</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-secondary d-flex align-items-center hover-success" style="font-size: 0.95rem;"><i class="fas fa-chevron-right me-3" style="font-size: 0.6rem; color: #a0a0a0;"></i> Pimpinan Universitas</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-secondary d-flex align-items-center hover-success" style="font-size: 0.95rem;"><i class="fas fa-chevron-right me-3" style="font-size: 0.6rem; color: #a0a0a0;"></i> Ketua Lembaga</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-secondary d-flex align-items-center hover-success" style="font-size: 0.95rem;"><i class="fas fa-chevron-right me-3" style="font-size: 0.6rem; color: #a0a0a0;"></i> Dekan</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-secondary d-flex align-items-center hover-success" style="font-size: 0.95rem;"><i class="fas fa-chevron-right me-3" style="font-size: 0.6rem; color: #a0a0a0;"></i> Visi Dan Misi</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-secondary d-flex align-items-center hover-success" style="font-size: 0.95rem;"><i class="fas fa-chevron-right me-3" style="font-size: 0.6rem; color: #a0a0a0;"></i> Arti Lambang</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-secondary d-flex align-items-center hover-success" style="font-size: 0.95rem;"><i class="fas fa-chevron-right me-3" style="font-size: 0.6rem; color: #a0a0a0;"></i> Renstra</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-secondary d-flex align-items-center hover-success" style="font-size: 0.95rem;"><i class="fas fa-chevron-right me-3" style="font-size: 0.6rem; color: #a0a0a0;"></i> Peta Kampus</a></li>
                    <li class="mb-3"><a href="#" class="text-decoration-none text-secondary d-flex align-items-center hover-success" style="font-size: 0.95rem;"><i class="fas fa-chevron-right me-3" style="font-size: 0.6rem; color: #a0a0a0;"></i> Kerja Sama</a></li>
                    <li><a href="#" class="text-decoration-none text-secondary d-flex align-items-center hover-success" style="font-size: 0.95rem;"><i class="fas fa-chevron-right me-3" style="font-size: 0.6rem; color: #a0a0a0;"></i> Struktur Organisasi</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>