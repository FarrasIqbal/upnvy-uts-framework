<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<style>
    .share-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        color: white;
        text-decoration: none;
        margin-left: 5px;
        font-size: 0.8rem;
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
</style>

<div class="container my-5 py-2">

    <div class="bg-light py-2 px-3 mb-4 rounded-1" style="font-size: 0.85rem;">
        <span class="text-secondary">Home</span>
        <span class="mx-2 text-muted">&rsaquo;</span>
        <span class="text-secondary">Tentang UPN</span>
        <span class="mx-2 text-muted">&rsaquo;</span>
        <span class="text-success">Sejarah UPN</span>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-12 mb-5">

            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                <div class="text-muted" style="font-size: 0.85rem;">
                    <i class="far fa-clock me-1"></i> Diupdate pada 08 Desember 2020
                </div>

                <div class="d-flex align-items-center">
                    <i class="fas fa-share-alt text-muted me-2" style="font-size: 0.9rem;"></i>
                    <a href="#" class="share-btn bg-facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="share-btn bg-twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="share-btn bg-whatsapp"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <img src="<?= base_url('images/gedung-upn.png') ?>" class="img-fluid w-100 mb-5 rounded-1" style="max-height: 550px; object-fit: cover;" alt="Gedung Rektorat UPN Veteran Yogyakarta">

            <div class="article-content text-secondary" style="font-size: 0.95rem; line-height: 1.9; text-align: justify;">

                <?= $sejarah['sejarah'] ?>

            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>