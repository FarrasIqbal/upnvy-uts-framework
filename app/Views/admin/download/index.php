<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-dark">Manajemen File Download</h3>
        <a href="<?= base_url('admin/download/create') ?>" class="btn btn-success fw-bold">
            <i class="fas fa-plus me-2"></i> Upload File Baru
        </a>
    </div>

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success"><i class="fas fa-check-circle me-2"></i> <?= session()->getFlashdata('pesan'); ?></div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger"><i class="fas fa-exclamation-triangle me-2"></i> <?= session()->getFlashdata('error'); ?></div>
    <?php endif; ?>


    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Judul Dokumen</th>
                <th>Kategori Kelompok</th>
                <th>File Tersimpan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($downloads as $d) : ?>
                <tr>
                    <td><?= $i++; ?></td>

                    <td><?= esc($d['judul']); ?></td>

                    <td>
                        <span class="badge bg-info text-dark">
                            <?= esc($d['kategori']); ?>
                        </span>
                    </td>

                    <td>
                        <?= esc($d['file_unduhan']); ?>
                    </td>

                    <td>
                        <a href="<?= base_url('admin/download/edit/' . $d['id']) ?>"
                            class="btn btn-sm btn-warning">Edit</a>

                        <form action="<?= base_url('admin/download/' . $d['id']) ?>"
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