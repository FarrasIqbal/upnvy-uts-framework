<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold text-dark">Manajemen Pengumuman</h3>
            <p class="text-muted small">Kelola data pengumuman yang tampil di halaman depan</p>
        </div>
        <a href="<?= base_url('admin/pengumuman/create') ?>" class="btn btn-success fw-bold px-4">
            <i class="fas fa-plus me-2"></i> Tambah Pengumuman
        </a>
    </div>

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success border-0 shadow-sm" role="alert">
            <i class="fas fa-check-circle me-2"></i> <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>


    <table class="table table-bordered table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th style="width: 60px;">No</th>
                <th style="width: 100px;">Gambar</th>
                <th>Judul Pengumuman</th>
                <th style="width: 140px;">Tanggal</th>
                <th>Status</th>
                <th style="width: 150px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($pengumuman as $p) : ?>
                <tr>
                    <td><?= $i++; ?></td>

                    <td>
                        <img src="<?= base_url('assets/img/pengumuman/' . $p['gambar']) ?>"
                            width="80" height="60"
                            style="object-fit: cover; border-radius: 4px;">
                    </td>

                    <td style="max-width: 400px;">
                        <?= esc($p['judul']); ?>
                    </td>

                    <td>
                        <?= esc($p['tanggal']); ?>
                    </td>
                    <td>
                        <?php if ($p['status'] == 'aktif'): ?>
                            <span class="badge bg-success">Aktif</span>
                        <?php else: ?>
                            <span class="badge bg-secondary">Nonaktif</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="<?= base_url('admin/pengumuman/edit/' . $p['id']) ?>"
                                class="btn btn-sm btn-warning">
                                Edit
                            </a>

                            <form action="<?= base_url('admin/pengumuman/' . $p['id']) ?>" method="post">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus pengumuman ini?');">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>

            <?php if (empty($pengumuman)) : ?>
                <tr>
                    <td colspan="5" class="text-center py-3 text-muted">
                        Belum ada data pengumuman.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</div>
<?= $this->endSection() ?>