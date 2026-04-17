<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h3 class="fw-bold text-dark mb-4">Edit Sejarah Kampus</h3>

            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">

                    <form action="<?= base_url('/admin/sejarah/update/' . $sejarah['id']) ?>" method="POST">
                        <?= csrf_field(); ?>

                        <!-- Tentang -->
                        <div class="mb-4">
                            <label class="form-label fw-bold">Tentang Kampus</label>
                            <textarea
                                class="form-control"
                                name="tentang"
                                rows="5"
                                style="line-height: 1.8; text-align: justify;"
                                required><?= esc($sejarah['tentang']) ?></textarea>
                        </div>

                        <!-- Sejarah -->
                        <div class="mb-4">
                            <label class="form-label fw-bold">Sejarah Kampus</label>
                            <textarea
                                class="form-control"
                                name="sejarah"
                                rows="8"
                                style="line-height: 1.8; text-align: justify;"
                                required><?= esc($sejarah['sejarah']) ?></textarea>
                        </div>

                        <hr class="my-4">

                        <div class="d-flex justify-content-end gap-2">
                            <a href="<?= base_url('admin/sejarah') ?>" class="btn btn-light px-4">Batal</a>
                            <button type="submit" class="btn btn-primary px-4 fw-bold">
                                Update Data
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection() ?>