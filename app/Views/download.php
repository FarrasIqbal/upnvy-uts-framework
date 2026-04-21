<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<style>
    /* Styling agar Accordion Bootstrap mirip dengan gambar Anda */
    .accordion-button:not(.collapsed) {
        color: #212529;
        background-color: #fff;
        box-shadow: none;
    }

    .accordion-button:focus {
        border-color: rgba(0, 0, 0, .125);
        box-shadow: none;
    }

    .accordion-item {
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: 0;
        margin-bottom: 10px;
    }

    .btn-download-orange {
        background-color: #f38f1a;
        /* Warna orange UPN */
        color: white;
        font-size: 0.75rem;
        letter-spacing: 0.5px;
        padding: 6px 20px;
    }

    .btn-download-orange:hover {
        background-color: #d67a14;
        color: white;
    }
</style>

<div class="container my-5 py-2">

    <div class="bg-light py-2 px-3 mb-4 rounded-1" style="font-size: 0.85rem;">
        <span class="text-secondary">Home</span>
        <span class="mx-2 text-muted">&rsaquo;</span>
        <span class="text-secondary">Download</span>
    </div>

    <div class="row">

        <div class="col-lg-8 pe-lg-5 mb-5 mb-lg-0">

            <?php if (!empty($downloads)) : ?>
                <div class="accordion" id="accordionDownload">

                    <?php $i = 1;
                    foreach ($downloads as $kategori => $items) : ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?= $i ?>">
                                <button class="accordion-button <?= ($i == 1) ? '' : 'collapsed' ?> fw-bold py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $i ?>" aria-expanded="<?= ($i == 1) ? 'true' : 'false' ?>" aria-controls="collapse<?= $i ?>">
                                    <?= esc($kategori) ?>
                                </button>
                            </h2>
                            <div id="collapse<?= $i ?>" class="accordion-collapse collapse <?= ($i == 1) ? 'show' : '' ?>" aria-labelledby="heading<?= $i ?>" data-bs-parent="#accordionDownload">
                                <div class="accordion-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <?php foreach ($items as $item) : ?>
                                            <li class="list-group-item d-flex justify-content-between align-items-center py-3 px-4">
                                                <span class="text-secondary" style="font-size: 0.95rem;"><?= esc($item['judul']) ?></span>
                                                <a href="<?= base_url('assets/files/' . $item['file_unduhan']) ?>" class="btn btn-download-orange rounded-pill fw-bold" download>
                                                    DOWNLOAD
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php $i++;
                    endforeach; ?>

                </div>
            <?php else : ?>
                <div class="alert alert-warning text-center">Belum ada file dokumen yang diunggah.</div>
            <?php endif; ?>

        </div>

        <div class="col-lg-4">
            <h5 class="fw-bold mb-4" style="color: #4CAF50; letter-spacing: 0.5px;">RILIS BERITA</h5>

            <ul class="list-unstyled">
                <?php foreach ($berita_lain as $lain) : ?>
                    <li class="border-bottom pb-3 mb-3">
                        <a href="<?= base_url('berita/' . $lain['slug']) ?>" class="text-decoration-none text-secondary">
                            <h6 class="fw-bold text-dark mb-1 hover-success" style="font-size: 0.95rem; line-height: 1.4;">
                                <?= esc($lain['judul']) ?>
                            </h6>
                            <small class="text-muted" style="font-size: 0.8rem;">
                                <?= date('d F Y', strtotime($lain['tanggal'])) ?> &bull; By <?= esc($lain['penulis']) ?>
                            </small>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
</div>

<?= $this->endSection() ?>