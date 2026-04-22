<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="<?= base_url('images/logo-upn.png') ?>" type="image/png">
    <style>
        body {
            background-color: #f4f6f9;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="card login-card p-4">
        <div class="text-center mb-4">
            <h4 class="fw-bold text-success">Admin UPNYK</h4>
            <p class="text-muted">Silakan login untuk masuk ke dashboard</p>
        </div>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger py-2"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('pesan')): ?>
            <div class="alert alert-success py-2"><?= session()->getFlashdata('pesan') ?></div>
        <?php endif; ?>

        <form action="<?= base_url('login/process') ?>" method="post">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label class="form-label fw-bold">Username</label>
                <input type="text" name="username" class="form-control" required autofocus>
            </div>
            <div class="mb-4">
                <label class="form-label fw-bold">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success w-100 fw-bold">LOGIN</button>
            <a href="<?= base_url('/') ?>" class="btn btn-light w-100 mt-2">Kembali ke Beranda</a>
        </form>
    </div>
</body>

</html>