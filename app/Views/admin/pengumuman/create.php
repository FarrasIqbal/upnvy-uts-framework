<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h3 class="fw-bold text-dark mb-4">Buat Pengumuman Baru</h3>

            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <form action="<?= base_url('admin/pengumuman/save') ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Judul Pengumuman</label>
                            <input type="text" class="form-control" name="judul" placeholder="Masukkan judul pengumuman..." required autofocus>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="<?= date('Y-m-d') ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Status Tayang</label>
                            <select class="form-select" name="status" required>
                                <option value="aktif">Aktif (Tampilkan)</option>
                                <option value="nonaktif">Nonaktif (Sembunyikan/Draft)</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Gambar/Poster Pengumuman</label>
                            <input type="file" class="form-control" name="gambar" accept="image/*">
                            <div class="form-text">Format: JPG, PNG, JPEG. Maks: 2MB.</div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Isi Detail Pengumuman</label>
                            <textarea class="form-control" name="isi_pengumuman" rows="8" placeholder="Tuliskan detail informasi pengumuman di sini..." required></textarea>
                        </div>

                        <hr class="my-4">

                        <div class="d-flex justify-content-end gap-2">
                            <a href="<?= base_url('admin/pengumuman') ?>" class="btn btn-light px-4">Batal</a>
                            <button type="submit" class="btn btn-success px-4 fw-bold">Simpan Pengumuman</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>