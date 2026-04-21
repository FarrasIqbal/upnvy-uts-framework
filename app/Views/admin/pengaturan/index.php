<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid py-4 mb-5">
    <h3 class="fw-bold text-dark mb-4">Pengaturan Website</h3>

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success"><i class="fas fa-check-circle me-2"></i> <?= session()->getFlashdata('pesan'); ?></div>
    <?php endif; ?>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <form action="<?= base_url('admin/pengaturan/update') ?>" method="POST">
                <?= csrf_field(); ?>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <h5 class="fw-bold text-success mb-3 border-bottom pb-2">Kontak Kampus I</h5>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Alamat Kampus I</label>
                            <textarea class="form-control" name="kampus_1_alamat" rows="2" required><?= esc($pengaturan['kampus_1_alamat']) ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Telepon Kampus I</label>
                            <input type="text" class="form-control" name="kampus_1_telepon" value="<?= esc($pengaturan['kampus_1_telepon']) ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Email Kampus I</label>
                            <input type="email" class="form-control" name="kampus_1_email" value="<?= esc($pengaturan['kampus_1_email']) ?>" required>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <h5 class="fw-bold text-success mb-3 border-bottom pb-2">Kontak Kampus II</h5>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Alamat Kampus II</label>
                            <textarea class="form-control" name="kampus_2_alamat" rows="2" required><?= esc($pengaturan['kampus_2_alamat']) ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Telepon Kampus II</label>
                            <input type="text" class="form-control" name="kampus_2_telepon" value="<?= esc($pengaturan['kampus_2_telepon']) ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Email Kampus II</label>
                            <input type="email" class="form-control" name="kampus_2_email" value="<?= esc($pengaturan['kampus_2_email']) ?>" required>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-2">
                    <button type="submit" class="btn btn-warning px-4 fw-bold">Update Pengaturan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>