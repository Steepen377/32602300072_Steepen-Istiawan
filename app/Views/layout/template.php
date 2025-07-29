<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Mahasiswa</title>
    <!-- Menghubungkan ke file CSS eksternal -->
    <link rel="stylesheet" href="<?= base_url('assets/css/crud.css'); ?>">
</head>
<body>
    <header>
        <div class="identity">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>Steepen Istiawan / TIF B / Web Programming</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><b>32602300072</b></td>
                </tr>
            </table>
        </div>
    </header>

    <main>
        <?php if (session()->getFlashdata('message')): ?>
            <div class="alert-success">
                <?= session()->getFlashdata('message') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert-danger">
                <ul class="error-list">
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?= $this->renderSection('content') ?>
    </main>
</body>
</html>
