<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid py-4">
    <h3 class="fw-bold text-dark mb-4">Upload File Dokumen</h3>

    <div class="card border-0 shadow-sm" style="max-width: 600px;">
        <div class="card-body p-4">
            <form action="<?= base_url('admin/download/save') ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <div class="mb-3">
                    <label class="form-label fw-bold">Judul File (Untuk Tampilan)</label>
                    <input type="text" class="form-control" name="judul" placeholder="Contoh: Perjanjian Kinerja 2024" required autofocus>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Kategori / Kelompok</label>
                    <input type="text" class="form-control" name="kategori" placeholder="Contoh: Perjanjian Kinerja" required>
                    <div class="form-text text-muted">Ketik nama kategori dengan sama persis agar file dikelompokkan ke dalam <i>accordion</i> yang sama.</div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">File Dokumen</label>
                    <input type="file" class="form-control" name="file_unduhan" accept=".pdf,.doc,.docx,.xls,.xlsx,.zip,.rar" required>
                </div>

                <hr>

                <div class="d-flex justify-content-end gap-2 mt-3">
                    <a href="<?= base_url('admin/download') ?>" class="btn btn-light px-4">Batal</a>
                    <button type="submit" class="btn btn-success px-4 fw-bold">Upload File</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>