<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Manajemen Berita</h3>
        <a href="<?= base_url('/admin/berita/create') ?>" class="btn btn-success">+ Tambah Berita</a>
    </div>

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul Berita</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($berita as $b) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><img src="<?= base_url('/assets/img/berita/' . $b['gambar']) ?>" width="80"></td>
                    <td><?= $b['judul']; ?></td>
                    <td><?= $b['tanggal']; ?></td>
                    <td><?php if ($b['status'] == 'aktif'): ?>
                            <span class="badge bg-success">Aktif</span>
                        <?php else: ?>
                            <span class="badge bg-secondary">Nonaktif</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?= base_url('admin/berita/edit/' . $b['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="<?= base_url('/admin/berita/' . $b['id']) ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>