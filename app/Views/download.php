<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<style>
    /* Styling Custom untuk Accordion agar mirip dengan desain UPN */
    .upn-accordion .accordion-item {
        border: none;
        border-bottom: 1px solid #e0e0e0;
        border-radius: 0;
    }

    .upn-accordion .accordion-button {
        background-color: transparent;
        color: #333;
        font-weight: 600;
        font-size: 0.95rem;
        padding: 1rem 0;
        box-shadow: none;
    }

    /* Warna teks hijau saat accordion terbuka (aktif) */
    .upn-accordion .accordion-button:not(.collapsed) {
        color: #4CAF50;
        /* Hijau UPN */
        background-color: transparent;
        box-shadow: none;
    }

    /* Menghilangkan border biru bawaan Bootstrap saat di-klik */
    .upn-accordion .accordion-button:focus {
        border-color: transparent;
        box-shadow: none;
    }

    /* Mengubah warna icon panah accordion bawaan Bootstrap menjadi lebih gelap */
    .upn-accordion .accordion-button::after {
        filter: brightness(0) invert(0);
        /* Hitam */
    }

    /* List item dokumen yang bisa di-download */
    .download-list-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 0;
        border-bottom: 1px solid #f5f5f5;
        font-size: 0.9rem;
        color: #555;
    }

    .download-list-item:last-child {
        border-bottom: none;
    }

    /* Tombol Download warna Oranye Khas */
    .btn-download-orange {
        background-color: #f7931e;
        color: white;
        font-size: 0.75rem;
        font-weight: 700;
        border-radius: 20px;
        padding: 6px 18px;
        border: none;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn-download-orange:hover {
        background-color: #e67e22;
        color: white;
    }
</style>

<div class="container my-3 py-2">

    <div class="bg-light py-2 px-3 mb-4 rounded-1" style="font-size: 0.85rem;">
        <span class="text-secondary">Home</span> <span class="mx-2 text-muted">&rsaquo;</span> <span class="text-secondary">Download</span>
    </div>

    <div class="row">

        <div class="col-lg-8 pe-lg-5 mb-5 mb-lg-0">
            <div class="accordion upn-accordion" id="accordionDownload">

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSkm">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSkm" aria-expanded="true" aria-controls="collapseSkm">
                            Survey Kepuasan Masyarakat
                        </button>
                    </h2>
                    <div id="collapseSkm" class="accordion-collapse collapse show" aria-labelledby="headingSkm" data-bs-parent="#accordionDownload">
                        <div class="accordion-body px-0 pt-0 pb-3">
                            <div class="download-list-item">
                                <span>SKM 2021</span>
                                <a href="#" class="btn-download-orange">DOWNLOAD</a>
                            </div>
                            <div class="download-list-item">
                                <span>SKM 2022</span>
                                <a href="#" class="btn-download-orange">DOWNLOAD</a>
                            </div>
                            <div class="download-list-item">
                                <span>SKM 2023</span>
                                <a href="#" class="btn-download-orange">DOWNLOAD</a>
                            </div>
                            <div class="download-list-item">
                                <span>SKM 2024</span>
                                <a href="#" class="btn-download-orange">DOWNLOAD</a>
                            </div>
                            <div class="download-list-item">
                                <span>SKM 2025</span>
                                <a href="#" class="btn-download-orange">DOWNLOAD</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingRenstra">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRenstra" aria-expanded="false" aria-controls="collapseRenstra">
                            Renstra
                        </button>
                    </h2>
                    <div id="collapseRenstra" class="accordion-collapse collapse" aria-labelledby="headingRenstra" data-bs-parent="#accordionDownload">
                        <div class="accordion-body px-0 pt-0 pb-3">
                            <div class="download-list-item">
                                <span>Renstra 2021-2025</span>
                                <a href="#" class="btn-download-orange">DOWNLOAD</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingPK">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePK" aria-expanded="false" aria-controls="collapsePK">
                            Perjanjian Kinerja
                        </button>
                    </h2>
                    <div id="collapsePK" class="accordion-collapse collapse" aria-labelledby="headingPK" data-bs-parent="#accordionDownload">
                        <div class="accordion-body px-0 pt-0 pb-3">
                            <p class="text-muted small">Data file tidak tersedia atau dalam proses unggah.</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingLK">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLK" aria-expanded="false" aria-controls="collapseLK">
                            Laporan Kinerja
                        </button>
                    </h2>
                    <div id="collapseLK" class="accordion-collapse collapse" aria-labelledby="headingLK" data-bs-parent="#accordionDownload">
                        <div class="accordion-body px-0 pt-0 pb-3">
                            <div class="download-list-item">
                                <span>Laporan Kinerja Tahun 2023</span>
                                <a href="#" class="btn-download-orange">DOWNLOAD</a>
                            </div>
                            <div class="download-list-item">
                                <span>Laporan Kinerja Tahun 2024</span>
                                <a href="#" class="btn-download-orange">DOWNLOAD</a>
                            </div>
                            <div class="download-list-item">
                                <span>Laporan Kinerja Tahun 2025</span>
                                <a href="#" class="btn-download-orange">DOWNLOAD</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingKeuangan">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKeuangan" aria-expanded="false" aria-controls="collapseKeuangan">
                            Laporan Keuangan
                        </button>
                    </h2>
                    <div id="collapseKeuangan" class="accordion-collapse collapse" aria-labelledby="headingKeuangan" data-bs-parent="#accordionDownload">
                        <div class="accordion-body px-0 pt-0 pb-3">
                            <div class="download-list-item">
                                <span>Laporan Keuangan 2023</span>
                                <a href="#" class="btn-download-orange">DOWNLOAD</a>
                            </div>
                            <div class="download-list-item">
                                <span>Laporan Keuangan 2024</span>
                                <a href="#" class="btn-download-orange">DOWNLOAD</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingKerjasama">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKerjasama" aria-expanded="false" aria-controls="collapseKerjasama">
                            Laporan Kerjasama
                        </button>
                    </h2>
                    <div id="collapseKerjasama" class="accordion-collapse collapse" aria-labelledby="headingKerjasama" data-bs-parent="#accordionDownload">
                        <div class="accordion-body px-0 pt-0 pb-3">
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingLain">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLain" aria-expanded="false" aria-controls="collapseLain">
                            Lain - Lain
                        </button>
                    </h2>
                    <div id="collapseLain" class="accordion-collapse collapse" aria-labelledby="headingLain" data-bs-parent="#accordionDownload">
                        <div class="accordion-body px-0 pt-0 pb-3">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-4">
            <h5 class="fw-bold mb-4" style="color: #4CAF50; letter-spacing: 0.5px;">RILIS BERITA</h5>

            <ul class="list-unstyled">
                <li class="border-bottom pb-3 mb-3">
                    <a href="#" class="text-decoration-none text-secondary">
                        <h6 class="fw-bold text-dark mb-1 hover-success" style="font-size: 0.95rem; line-height: 1.4;">Bank Indonesia Buka Beasiswa Untuk Mahasiswa UPN "Veteran" Yogyakarta 2026</h6>
                        <small class="text-muted" style="font-size: 0.8rem;">15 April 2026 &bull; By Dewi</small>
                    </a>
                </li>

                <li class="border-bottom pb-3 mb-3">
                    <a href="#" class="text-decoration-none text-secondary">
                        <h6 class="fw-bold text-dark mb-1 hover-success" style="font-size: 0.95rem; line-height: 1.4;">UPN "Veteran" Yogyakarta Gelar Wawancara Online Mahasiswa Jalur SNBP2026</h6>
                        <small class="text-muted" style="font-size: 0.8rem;">14 April 2026 &bull; By Dewi</small>
                    </a>
                </li>

                <li class="border-bottom pb-3 mb-3">
                    <a href="#" class="text-decoration-none text-secondary">
                        <h6 class="fw-bold text-dark mb-1 hover-success" style="font-size: 0.95rem; line-height: 1.4;">UPN "Veteran" Yogyakarta Kembali Gandeng Djarum Foundation Dalam Seleksi Beswan Djarum 2026/2027</h6>
                        <small class="text-muted" style="font-size: 0.8rem;">10 April 2026 &bull; By Dewi</small>
                    </a>
                </li>

                <li class="border-bottom pb-3 mb-3">
                    <a href="#" class="text-decoration-none text-secondary">
                        <h6 class="fw-bold text-dark mb-1 hover-success" style="font-size: 0.95rem; line-height: 1.4;">UPN "Veteran" Yogyakarta Dorong Dosen Perkuat Branding Kampus Lewat Publikasi Inovasi</h6>
                        <small class="text-muted" style="font-size: 0.8rem;">07 April 2026 &bull; By Dewi</small>
                    </a>
                </li>

                <li class="pb-3">
                    <a href="#" class="text-decoration-none text-secondary">
                        <h6 class="fw-bold text-dark mb-1 hover-success" style="font-size: 0.95rem; line-height: 1.4;">UPN Veteran Yogyakarta Catat Persaingan Ketat Di SNBP 2026, Teknik Pertambangan Paling Diminati</h6>
                        <small class="text-muted" style="font-size: 0.8rem;">02 April 2026 &bull; By Dewi</small>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>

<?= $this->endSection() ?>