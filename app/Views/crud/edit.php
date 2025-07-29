<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<main>
    <div class="title">
        <h1>Edit Data Mahasiswa</h1>
    </div>
    <div class="form">
        <form action="/crud/update" method="POST">
            <div class="input">
                <label for="nim">Nim</label>
                <input type="text" name="nim" id="nim" value="<?= esc($mahasiswa['nim'] ?? '') ?>">
            </div>
            <div class="input">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="<?= esc($mahasiswa['nama'] ?? '') ?>">
            </div>
            <div class="input">
                <label for="prodi">Prodi</label>
                <input type="text" name="prodi" id="prodi" value="<?= esc($mahasiswa['prodi'] ?? '') ?>">
            </div>
            <div class="input">
                <label for="universitas">Universitas</label>
                <input type="text" name="universitas" id="universitas" value="<?= esc($mahasiswa['universitas'] ?? '') ?>">
            </div>
            <div class="input">
                <label for="nomor_handphone">Nomor Handphone</label>
                <input type="text" name="nomor_handphone" id="nomor_handphone" value="<?= esc($mahasiswa['nomor_handphone'] ?? '') ?>">
            </div>
            <input type="hidden" name="old_nim" value="<?= esc($mahasiswa['nim'] ?? '') ?>">
            <div class="button">
                <button type="submit" value="Submit">update</button>
            </div>
        </form>
    </div>
</main>

<?= $this->endSection(); ?>
