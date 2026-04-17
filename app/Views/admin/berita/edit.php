<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="container mt-5 mb-5">
    <h3>Edit Berita</h3>
    <hr>

    <form action="<?= base_url('/admin/berita/update/' . $berita['id']) ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>

        <input type="hidden" name="gambarLama" value="<?= $berita['gambar'] ?>">

        <div class="mb-3">
            <label class="form-label">Judul Berita</label>
            <input type="text" class="form-control" name="judul" value="<?= esc($berita['judul']) ?>" required>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Penulis</label>
                <input type="text" class="form-control" name="penulis" value="<?= esc($berita['penulis']) ?>" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Tanggal Rilis</label>
                <input type="date" class="form-control" name="tanggal" value="<?= $berita['tanggal'] ?>" required>
            </div>
        </div>

        <div class="mb-4">
            <label class="form-label fw-bold">Status Tayang</label>
            <select class="form-select" name="status" required>
                <option value="aktif" <?= ($berita['status'] == 'aktif') ? 'selected' : '' ?>>Aktif (Tampilkan)</option>
                <option value="nonaktif" <?= ($berita['status'] == 'nonaktif') ? 'selected' : '' ?>>Nonaktif (Sembunyikan/Draft)</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label d-block">Gambar Banner Saat Ini</label>
            <img src="<?= base_url('assets/img/berita/' . $berita['gambar']) ?>" width="150" class="mb-2 img-thumbnail">
            <input class="form-control" type="file" name="gambar" accept="image/*">
            <small class="text-muted">Biarkan kosong jika tidak ingin mengganti gambar.</small>
        </div>

        <div class="mb-3">
            <label class="form-label">Isi Berita</label>
            <textarea class="form-control" name="isi_berita" rows="10" required><?= $berita['isi_berita'] ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary px-4">Update Berita</button>
        <a href="<?= base_url('/admin/berita') ?>" class="btn btn-secondary">Batal</a>
    </form>
</div>
<?= $this->endSection() ?>