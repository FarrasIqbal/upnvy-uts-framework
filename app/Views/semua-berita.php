<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<style>
    .hover-success {
        transition: color 0.3s ease;
    }

    .hover-success:hover {
        color: #4CAF50 !important;
    }

    .meta-icon i {
        color: #888;
        margin-right: 4px;
    }
</style>

<div class="container my-5 py-2">

    <div class="bg-light py-2 px-3 mb-5 rounded-1" style="font-size: 0.85rem;">
        <span class="text-secondary">Home</span>
        <span class="mx-2 text-muted">&rsaquo;</span>
        <span class="text-secondary">Semua Berita</span>
    </div>

    <div class="row">

        <div class="col-lg-8 pe-lg-5 mb-5 mb-lg-0">

            <?php if (!empty($berita)) : ?>
                <?php foreach ($berita as $b) : ?>
                    <div class="row mb-4 pb-4 border-bottom align-items-center">
                        <div class="col-md-5 mb-3 mb-md-0">
                            <a href="<?= base_url('berita/' . $b['slug']) ?>">
                                <img src="<?= base_url('assets/img/berita/' . $b['gambar']) ?>" class="img-fluid w-100 rounded-1 shadow-sm border" alt="<?= esc($b['judul']) ?>" style="height: 180px; object-fit: cover;">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="<?= base_url('berita/' . $b['slug']) ?>" class="text-decoration-none">
                                <h5 class="fw-bold text-dark hover-success mb-2" style="line-height: 1.4; font-size: 1.1rem;">
                                    <?= esc($b['judul']) ?>
                                </h5>
                            </a>
                            <div class="text-muted mb-3 meta-icon" style="font-size: 0.8rem;">
                                <span class="me-3"><i class="far fa-clock"></i> <?= date('d F Y', strtotime($b['tanggal'])) ?></span>
                                <span class="me-3"><i class="far fa-user"></i> <?= esc($b['penulis']) ?></span>
                                <span><i class="far fa-folder"></i> Seputar Kampus</span>
                            </div>
                            <p class="text-secondary mb-0" style="font-size: 0.9rem; line-height: 1.6; text-align: justify;">
                                <?= esc(substr(strip_tags($b['isi_berita']), 0, 220)) ?>...
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>

                <?= $pager->links('berita', 'bs5_pager') ?>

            <?php else : ?>
                <div class="alert alert-warning text-center">Belum ada berita yang diterbitkan.</div>
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