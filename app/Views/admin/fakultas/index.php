<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-dark">Manajemen Fakultas</h3>
        <a href="<?= base_url('admin/fakultas/create') ?>" class="btn btn-success fw-bold">
            <i class="fas fa-plus me-2"></i> Tambah Fakultas
        </a>
    </div>

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success"><i class="fas fa-check-circle me-2"></i> <?= session()->getFlashdata('pesan'); ?></div>
    <?php endif; ?>


    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama Fakultas</th>
                <th>Singkatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($fakultas as $f) : ?>
                <tr>
                    <td><?= $i++; ?></td>

                    <td>
                        <img src="<?= base_url('assets/img/fakultas/' . $f['gambar_fakultas']) ?>"
                            width="80">
                    </td>

                    <td><?= esc(is_array($f['nama_fakultas']) ? implode(', ', $f['nama_fakultas']) : $f['nama_fakultas']); ?></td>

                    <td>
                        <span class="badge bg-secondary">
                            <?= esc($f['singkatan']); ?>
                        </span>
                    </td>

                    <td>
                        <a href="<?= base_url('admin/fakultas/edit/' . $f['id']) ?>"
                            class="btn btn-sm btn-warning">Edit</a>

                        <form action="<?= base_url('admin/fakultas/' . $f['id']) ?>"
                            method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit"
                                class="btn btn-sm btn-danger"
                                onclick="return confirm('Yakin ingin menghapus?');">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?= $this->endSection() ?>