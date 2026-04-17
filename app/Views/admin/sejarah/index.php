<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Manajemen Sejarah</h3>
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
                <th>Tentang</th>
                <th>Sejarah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($sejarah as $s) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $s['tentang']; ?></td>
                    <td><?= $s['sejarah']; ?></td>
                    <td>
                        <a href="<?= base_url('admin/sejarah/edit/' . $s['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>