<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid py-4 mb-5">
    <h3 class="fw-bold text-dark mb-4">Tambah Data Fakultas</h3>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <form action="<?= base_url('admin/fakultas/save') ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label class="form-label fw-bold">Nama Fakultas Lengkap</label>
                        <input type="text" class="form-control" name="nama_fakultas" placeholder="Contoh: Fakultas Ekonomi dan Bisnis" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-bold">Singkatan</label>
                        <input type="text" class="form-control" name="singkatan" placeholder="Contoh: FEB" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Gambar Gedung/Banner</label>
                    <input type="file" class="form-control" name="gambar_fakultas" accept="image/*" required>
                </div>

                <hr class="my-4">
                <h5 class="fw-bold text-secondary mb-3">Detail Akademik</h5>

                <div class="mb-3">
                    <label class="form-label fw-bold">Keunggulan</label>
                    <textarea class="form-control" name="keunggulan" rows="3" required></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Prodi Sarjana (S1)</label>
                        <small class="d-block text-muted mb-2">Gunakan format list HTML: <code>&lt;ul&gt;&lt;li&gt;Nama Prodi&lt;/li&gt;&lt;/ul&gt;</code></small>
                        <textarea class="form-control" name="prodi_sarjana" rows="4"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Prodi Magister (S2)</label>
                        <textarea class="form-control" name="prodi_magister" rows="4"></textarea>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Prospek Karir</label>
                    <textarea class="form-control" name="prospek_karir" rows="2"></textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Capaian Prestasi</label>
                    <textarea class="form-control" name="capaian_prestasi" rows="2"></textarea>
                </div>

                <hr class="my-4">
                <h5 class="fw-bold text-secondary mb-3">Informasi Kontak</h5>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label class="form-label fw-bold">Alamat Lengkap</label>
                        <input type="text" class="form-control" name="kontak_alamat">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" name="kontak_email">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-bold">Telepon</label>
                        <input type="text" class="form-control" name="kontak_telepon">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-bold">Link Website (URL)</label>
                        <input type="text" class="form-control" name="link_website" placeholder="https://...">
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="<?= base_url('admin/fakultas') ?>" class="btn btn-light px-4">Batal</a>
                    <button type="submit" class="btn btn-success px-4 fw-bold">Simpan Fakultas</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>