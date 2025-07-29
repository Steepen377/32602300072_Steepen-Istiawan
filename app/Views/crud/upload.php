<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="title">
    <h1>Tambah Data Mahasiswa</h1>
</div>
<?php if (isset($errors) && !empty($errors)): ?>
    <div class="alert alert-danger" style="color:red;">
        <ul>
        <?php foreach ($errors as $err): ?>
            <li><?= esc($err) ?></li>
        <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
<div class="form">
    <form action="<?= base_url('/tambah'); ?>" method="post">
        <div class="input">
            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim" value="<?= old('nim'); ?>" required>
        </div>
        <div class="input">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="<?= old('nama'); ?>" required>
        </div>
        <div class="input">
            <label for="prodi">Prodi</label>
            <input type="text" name="prodi" id="prodi" value="<?= old('prodi'); ?>" required>
        </div>
        <div class="input">
            <label for="universitas">Universitas</label>
            <input type="text" name="universitas" id="universitas" value="<?= old('universitas'); ?>" required>
        </div>
        <div class="input">
            <label for="nomor_handphone">Nomor HP</label>
            <input type="text" name="nomor_handphone" id="nomor_handphone" value="<?= old('nomor_handphone'); ?>" required>
        </div>
        <div class="button">
            <button type="submit" class="btn-update">Submit</button>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>
