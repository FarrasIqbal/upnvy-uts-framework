<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<style>
    .faculty-hero {
        position: relative;
        /* Gambar Banner Dinamis */
        background-size: cover;
        background-position: center;
        height: 450px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .faculty-hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.6);
        z-index: 1;
    }

    .faculty-hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
    }

    .title-underline {
        width: 40px;
        height: 3px;
        background-color: #ffda1a;
        margin-top: 8px;
        margin-bottom: 20px;
    }

    .contact-box {
        background-color: #f8f9fa;
        border-radius: 6px;
        padding: 30px;
    }

    .contact-icon {
        color: #6c757d;
        width: 25px;
        text-align: center;
        margin-right: 10px;
    }
</style>

<div class="container-fluid p-0">
    <div class="faculty-hero" style="background-image: url('<?= base_url("assets/img/fakultas/" . $fakultas['gambar_fakultas']) ?>');">
        <div class="faculty-hero-overlay"></div>
        <div class="faculty-hero-content w-100">
            <h1 class="fw-bold mb-0" style="font-size: 6rem; color: #d4af37; text-shadow: 2px 4px 8px rgba(0,0,0,0.5); letter-spacing: 5px;">
                <?= esc($fakultas['singkatan']) ?>
            </h1>
            <h2 class="text-white fw-bold mt-2" style="letter-spacing: 1px;">
                <?= esc($fakultas['nama_fakultas']) ?>
            </h2>
        </div>
    </div>
</div>

<div class="container my-5">

    <div class="py-2 mb-4" style="font-size: 0.85rem;">
        <span class="text-muted">Home</span> <span class="mx-2 text-muted">&rsaquo;</span>
        <span class="text-muted">Pendidikan</span> <span class="mx-2 text-muted">&rsaquo;</span>
        <span class="text-success"><?= esc($fakultas['nama_fakultas']) ?></span>
    </div>

    <div class="row">
        <div class="col-lg-8 pe-lg-5 mb-5">

            <div class="mb-5">
                <h4 class="fw-normal text-dark mb-4">Keunggulan</h4>
                <div class="text-secondary" style="font-size: 0.95rem; line-height: 1.8; text-align: justify;">
                    <?= $fakultas['keunggulan'] ?>
                </div>
            </div>

            <div class="mb-5">
                <h4 class="fw-bold text-dark mb-0">Program Studi</h4>
                <div class="title-underline"></div>
                <div class="row mt-4">
                    <div class="col-md-6 mb-4">
                        <h6 class="fw-bold text-dark mb-3">Magister (S2)</h6>
                        <div class="text-secondary" style="font-size: 0.95rem; line-height: 1.8;">
                            <?= $fakultas['prodi_magister'] ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold text-dark mb-3">Sarjana (S1)</h6>
                        <div class="text-secondary" style="font-size: 0.95rem; line-height: 1.8;">
                            <?= $fakultas['prodi_sarjana'] ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-5">
                <h4 class="fw-normal text-dark mb-3">Prospek Karir</h4>
                <div class="text-secondary" style="font-size: 0.95rem; line-height: 1.8;">
                    <?= $fakultas['prospek_karir'] ?>
                </div>
            </div>

            <div class="mb-5">
                <h4 class="fw-bold text-dark mb-0">Capaian Prestasi</h4>
                <div class="title-underline"></div>
                <div class="text-secondary mt-3" style="font-size: 0.95rem; line-height: 1.8;">
                    <?= $fakultas['capaian_prestasi'] ?>
                </div>
            </div>

        </div>

        <div class="col-lg-4">
            <div class="contact-box shadow-sm border">
                <h6 class="fw-bold text-dark mb-4">Contact Info :</h6>

                <div class="d-flex mb-3">
                    <i class="fas fa-paper-plane contact-icon mt-1"></i>
                    <span class="text-secondary" style="font-size: 0.9rem; line-height: 1.6;"><?= esc($fakultas['kontak_alamat']) ?></span>
                </div>

                <div class="d-flex mb-3">
                    <i class="fas fa-envelope contact-icon"></i>
                    <a href="mailto:<?= esc($fakultas['kontak_email']) ?>" class="text-secondary text-decoration-none" style="font-size: 0.9rem;"><?= esc($fakultas['kontak_email']) ?></a>
                </div>

                <div class="d-flex mb-4">
                    <i class="fas fa-phone-alt contact-icon"></i>
                    <span class="text-secondary" style="font-size: 0.9rem;"><?= esc($fakultas['kontak_telepon']) ?></span>
                </div>

                <?php if ($fakultas['link_website']) : ?>
                    <a href="<?= esc($fakultas['link_website']) ?>" target="_blank" class="btn w-100 text-white fw-bold py-2" style="background-color: #4CAF50; font-size: 0.9rem; border-radius: 4px;">
                        KUNJUNGAN LAMAN
                    </a>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>