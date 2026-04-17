<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="container mt-5 mb-5">
    <h3>Tambah Berita Baru</h3>
    <hr>

    <form action="<?= base_url('/admin/berita/save') ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?> <div class="mb-3">
            <label class="form-label">Judul Berita</label>
            <input type="text" class="form-control" name="judul" required autofocus>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Penulis</label>
                <input type="text" class="form-control" name="penulis" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Tanggal Rilis</label>
                <input type="date" class="form-control" name="tanggal" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Status Tayang</label>
            <select class="form-select" name="status" required>
                <option value="aktif" <?= ($berita['status'] == 'aktif') ? 'selected' : '' ?>>Aktif (Tampilkan)</option>
                <option value="nonaktif" <?= ($berita['status'] == 'nonaktif') ? 'selected' : '' ?>>Nonaktif (Sembunyikan/Draft)</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Status Tayang</label>
            <select class="form-select" name="status" required>
                <option value="aktif">Aktif (Tampilkan)</option>
                <option value="nonaktif">Nonaktif (Sembunyikan/Draft)</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Upload Gambar Banner</label>
            <input class="form-control" type="file" id="gambar" name="gambar">
        </div>

        <div class="mb-3">
            <label class="form-label">Isi Berita</label>
            <textarea class="form-control" name="isi_berita" rows="10" required></textarea>
        </div>

        <button type="submit" class="btn btn-success px-4">Simpan Berita</button>
        <a href="<?= base_url('/admin/berita') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<?= $this->endSection() ?>