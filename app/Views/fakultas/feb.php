<?= $this->extend('/layout/main') ?>

<?= $this->section('content') ?>

<style>
    /* Styling Banner Hero Fakultas */
    .faculty-hero {
        position: relative;
        background: url('<?= base_url("images/FEB.png") ?>') no-repeat center center;
        background-size: cover;
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
        /* Efek gelap transparan */
        z-index: 1;
    }

    .faculty-hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
    }

    /* Garis bawah kuning khas UPN */
    .title-underline {
        width: 35px;
        height: 3px;
        background-color: #ffda1a;
        margin-top: 8px;
        margin-bottom: 20px;
    }

    /* Styling Kotak Kontak */
    .contact-box {
        background-color: #f4f5f7;
        border-radius: 4px;
        padding: 30px;
    }

    .contact-icon {
        color: #6c757d;
        width: 20px;
        text-align: center;
        margin-right: 10px;
    }
</style>

<div class="container-fluid p-0">
    <div class="faculty-hero">
        <div class="faculty-hero-overlay"></div>
        <div class="faculty-hero-content w-100">
            <h1 class="fw-bold mb-0" style="font-size: 6rem; color: #d4af37; text-shadow: 2px 4px 8px rgba(0,0,0,0.5); letter-spacing: 5px;">FEB</h1>

            <h2 class="text-white fw-bold mt-2" style="letter-spacing: 1px;">Fakultas Ekonomi Dan Bisnis</h2>
        </div>
    </div>
</div>

<div class="container my-4 pb-5">

    <div class="py-2 mb-4" style="font-size: 0.85rem;">
        <span class="text-muted">Home</span>
        <span class="mx-2 text-muted">&rsaquo;</span>
        <span class="text-muted">Pendidikan</span>
        <span class="mx-2 text-muted">&rsaquo;</span>
        <span class="text-success">Fakultas Ekonomi Dan Bisnis</span>
    </div>

    <div class="row">

        <div class="col-lg-8 pe-lg-5 mb-5 mb-lg-0">

            <div class="mb-5">
                <h5 class="fw-normal text-dark">Keunggulan</h5>
                <p class="text-secondary mt-3" style="font-size: 0.95rem; line-height: 1.8; text-align: justify;">
                    Fakultas Ekonomi dan Bisnis (FEB) merupakan salah satu fakultas di UPN "Veteran" Yogyakarta yang berkontribusi untuk kemajuan pengetahuan bidang ekonomi dan bisnis melalui pembelajaran berkualitas yang diakui di tingkat Internasional dengan dilandasi jiwa bela negara. FEB terdiri dari Jurusan Manajemen, Akuntansi, dan Ilmu Ekonomi dengan total 6 program studi yang terdiri dari 3 Program Sarjana dan 3 Program Magister dengan 3 prodi memperoleh akreditasi Unggul (Program Sarjana Manajemen, Program Sarjana Akuntansi, dan Program Magister Manajemen) dan 2 prodi menyelenggarakan joint degree (Program Sarjana Manajemen dan Program Magister Manajemen).
                </p>
            </div>

            <div class="mb-5">
                <h5 class="fw-bold text-dark mb-0">Program Studi</h5>
                <div class="title-underline"></div>

                <div class="row mt-4">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <h6 class="fw-bold text-dark mb-3">Magister (S2)</h6>
                        <ul class="text-secondary" style="font-size: 0.95rem; line-height: 1.8;">
                            <li>Magister Manajemen</li>
                            <li>Magister Akuntansi</li>
                            <li>Magister Ilmu Ekonomi</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold text-dark mb-3">Sarjana (S1)</h6>
                        <ul class="text-secondary" style="font-size: 0.95rem; line-height: 1.8;">
                            <li>Manajemen</li>
                            <li>Akuntansi</li>
                            <li>Ekonomi Pembangunan</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mb-5">
                <h5 class="fw-normal text-dark mb-3">Prospek Karir</h5>
                <p class="text-secondary" style="font-size: 0.95rem; line-height: 1.8;">
                    Instansi pemerintah, BUMN, sektor swasta, dan internasional di bidang manajemen, akuntansi, dan ekonomi.
                </p>
            </div>

            <div class="row mt-5 pt-3">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h5 class="fw-bold text-dark mb-0">Program Studi</h5>
                    <div class="title-underline"></div>
                    <h6 class="text-dark mt-3">Sarjana (S1)</h6>
                    <ul class="text-success mt-2" style="font-size: 0.9rem; list-style-type: square;">
                        <li class="text-success"><span class="text-secondary">AKUNTANSI</span></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5 class="fw-bold text-dark mb-0">Capaian Prestasi</h5>
                    <div class="title-underline"></div>
                    <p class="text-secondary mt-3" style="font-size: 0.9rem; line-height: 1.6;">
                        Dosen dan mahasiswa FEB berhasil berprestasi dalam berbagai ajang, baik tingkat nasional maupun internasional.
                    </p>
                </div>
            </div>

        </div>

        <div class="col-lg-4">
            <div class="contact-box shadow-sm border-0">
                <h6 class="fw-normal text-dark mb-4">Contact Info :</h6>

                <div class="d-flex mb-3">
                    <i class="fas fa-paper-plane contact-icon mt-1"></i>
                    <span class="text-secondary" style="font-size: 0.9rem; line-height: 1.6;">Jl. SWK No.104, Ngropoh, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55283</span>
                </div>

                <div class="d-flex mb-3">
                    <i class="fas fa-envelope contact-icon"></i>
                    <a href="mailto:info@upnyk.ac.id" class="text-secondary text-decoration-none" style="font-size: 0.9rem;">info@upnyk.ac.id</a>
                </div>

                <div class="d-flex mb-4">
                    <i class="fas fa-phone-alt contact-icon"></i>
                    <span class="text-secondary" style="font-size: 0.9rem;">0274486733</span>
                </div>

                <a href="#" class="btn w-100 text-white fw-bold rounded-1 py-2" style="background-color: #4CAF50; font-size: 0.85rem;">
                    KUNJUNGAN LAMAN
                </a>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>