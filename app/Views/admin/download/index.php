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

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0 table-responsive">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th class="ps-4">No</th>
                        <th>Judul Dokumen</th>
                        <th>Kategori Kelompok</th>
                        <th>File Tersimpan</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($downloads as $d) : ?>
                        <tr>
                            <td class="ps-4"><?= $i++; ?></td>
                            <td class="fw-bold"><?= esc($d['judul']); ?></td>
                            <td><span class="badge bg-info text-dark"><?= esc($d['kategori']); ?></span></td>
                            <td><small class="text-muted"><i class="fas fa-file-alt me-1"></i> <?= esc($d['file_unduhan']); ?></small></td>
                            <td class="text-center">
                                <a href="<?= base_url('admin/download/edit/' . $d['id']) ?>" class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></a>
                                <form action="<?= base_url('admin/download/' . $d['id']) ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus dokumen ini?');"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>