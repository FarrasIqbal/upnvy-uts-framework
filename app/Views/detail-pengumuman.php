<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<style>
    /* Styling untuk meta info dan tombol share (sama dengan berita) */
    .meta-info {
        font-size: 0.8rem;
        color: #6c757d;
    }

    .meta-info i {
        margin-right: 4px;
    }

    .share-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        color: white;
        text-decoration: none;
        margin-left: 8px;
        font-size: 0.9rem;
        transition: transform 0.2s ease;
    }

    .share-btn:hover {
        transform: scale(1.1);
        color: white;
    }

    .bg-facebook {
        background-color: #3b5998;
    }

    .bg-twitter {
        background-color: #1da1f2;
    }

    .bg-whatsapp {
        background-color: #25d366;
    }

    .text-share-icon {
        color: #6c757d;
        font-size: 1rem;
        margin-right: 5px;
    }
</style>

<div class="container my-5 py-2">

    <div class="bg-light py-2 px-3 mb-4 rounded-1" style="font-size: 0.85rem;">
        <span class="text-secondary">Home</span>
        <span class="mx-2 text-muted">&rsaquo;</span>
        <span class="text-secondary">Pengumuman</span>
        <span class="mx-2 text-muted">&rsaquo;</span>
        <span class="text-muted"><?= esc($pengumuman['judul']) ?></span>
    </div>

    <div class="row">

        <div class="col-lg-8 pe-lg-5 mb-5 mb-lg-0">

            <h3 class="fw-bold text-dark mb-3" style="line-height: 1.4;">
                <?= esc($pengumuman['judul']) ?>
            </h3>

            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 pb-3 border-bottom">
                <div class="meta-info d-flex flex-wrap align-items-center gap-3 mb-2 mb-md-0 text-muted" style="font-size: 0.85rem;">
                    <span><i class="far fa-clock"></i> <?= date('l, d F Y', strtotime($pengumuman['tanggal'])) ?></span>
                    <span><i class="far fa-user"></i> Oleh: Admin</span>
                    <span><i class="far fa-eye"></i> 1381</span>
                </div>

                <div class="d-flex align-items-center">
                    <i class="fas fa-share-alt text-share-icon me-2 text-muted"></i>
                    <a href="#" class="share-btn bg-facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="share-btn bg-twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="share-btn bg-whatsapp"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <?php if ($pengumuman['gambar'] && $pengumuman['gambar'] != 'default-pengumuman.jpg') : ?>
                <img src="<?= base_url('assets/img/pengumuman/' . $pengumuman['gambar']) ?>" class="img-fluid w-100 mb-4 rounded-1 shadow-sm" alt="<?= esc($pengumuman['judul']) ?>">
            <?php endif; ?>

            <div class="article-content text-secondary" style="font-size: 0.95rem; line-height: 1.8; text-align: justify;">
                <?= $pengumuman['isi_pengumuman'] ?>
            </div>

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