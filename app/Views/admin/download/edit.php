<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid py-4">
    <h3 class="fw-bold text-dark mb-4">Edit File Dokumen</h3>

    <div class="card border-0 shadow-sm" style="max-width: 600px;">
        <div class="card-body p-4">
            <form action="<?= base_url('admin/download/update/' . $download['id']) ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <input type="hidden" name="fileLama" value="<?= $download['file_unduhan'] ?>">

                <div class="mb-3">
                    <label class="form-label fw-bold">Judul File</label>
                    <input type="text" class="form-control" name="judul" value="<?= esc($download['judul']) ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Kategori / Kelompok</label>
                    <input type="text" class="form-control" name="kategori" value="<?= esc($download['kategori']) ?>" required>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold d-block">Ganti File Dokumen (Opsional)</label>
                    <div class="mb-2 p-2 bg-light border rounded text-muted">
                        <i class="fas fa-file-alt me-2"></i> File saat ini: <strong><?= esc($download['file_unduhan']) ?></strong>
                    </div>
                    <input type="file" class="form-control" name="file_unduhan" accept=".pdf,.doc,.docx,.xls,.xlsx,.zip,.rar">
                    <div class="form-text">Biarkan kosong jika tidak ingin mengganti isi file.</div>
                </div>

                <hr>

                <div class="d-flex justify-content-end gap-2 mt-3">
                    <a href="<?= base_url('admin/download') ?>" class="btn btn-light px-4">Batal</a>
                    <button type="submit" class="btn btn-warning px-4 fw-bold">Update File</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>