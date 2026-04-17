<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h3 class="fw-bold text-dark mb-4">Edit Pengumuman</h3>

            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <form action="<?= base_url('/admin/pengumuman/update/' . $pengumuman['id']) ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="gambarLama" value="<?= $pengumuman['gambar'] ?>">

                        <div class="mb-4">
                            <label class="form-label fw-bold">Judul Pengumuman</label>
                            <input type="text" class="form-control" name="judul" value="<?= esc($pengumuman['judul']) ?>" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="<?= $pengumuman['tanggal'] ?>" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Status Tayang</label>
                            <select class="form-select" name="status" required>
                                <option value="aktif" <?= ($pengumuman['status'] == 'aktif') ? 'selected' : '' ?>>Aktif (Tampilkan)</option>
                                <option value="nonaktif" <?= ($pengumuman['status'] == 'nonaktif') ? 'selected' : '' ?>>Nonaktif (Sembunyikan/Draft)</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold d-block">Gambar/Poster Saat Ini</label>
                            <?php if ($pengumuman['gambar'] != 'default-pengumuman.jpg') : ?>
                                <img src="<?= base_url('assets/img/pengumuman/' . $pengumuman['gambar']) ?>" width="120" class="mb-2 img-thumbnail border">
                            <?php else : ?>
                                <span class="badge bg-secondary mb-2">Tidak ada poster</span>
                            <?php endif; ?>
                            <input type="file" class="form-control" name="gambar" accept="image/*">
                            <div class="form-text">Biarkan kosong jika tidak ingin mengganti gambar poster.</div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Isi Detail Pengumuman</label>
                            <textarea class="form-control" name="isi_pengumuman" rows="8" required><?= $pengumuman['isi_pengumuman'] ?></textarea>
                        </div>

                        <hr class="my-4">

                        <div class="d-flex justify-content-end gap-2">
                            <a href="<?= base_url('admin/pengumuman') ?>" class="btn btn-light px-4">Batal</a>
                            <button type="submit" class="btn btn-primary px-4 fw-bold">Update Pengumuman</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>