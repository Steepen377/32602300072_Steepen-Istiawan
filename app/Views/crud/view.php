<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<style>
.header-info {
    background: #e74c3c;
    color: #fff;
    padding: 18px 20px;
    font-size: 1.2em;
    font-weight: bold;
    margin-bottom: 20px;
    border-radius: 5px;
}
.title {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}
.btn-tambah {
    background: #27ae60;
    color: #fff;
    border: none;
    padding: 8px 18px;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
    font-size: 1em;
}
.btn-tambah:hover { background: #219150; }
.table table {
    width: 100%;
    border-collapse: collapse;
    background: #fff;
    box-shadow: 0 2px 8px #eee;
}
.table th, .table td {
    padding: 10px 12px;
    text-align: center;
}
.table th {
    background: #f5f5f5;
    font-weight: bold;
}
.btn-update {
    background: #2980ff;
    color: #fff;
    border: none;
    padding: 6px 14px;
    border-radius: 4px;
    margin-right: 5px;
    cursor: pointer;
}
.btn-update:hover { background: #1761c7; }
.btn-delete {
    background: #e74c3c;
    color: #fff;
    border: none;
    padding: 6px 14px;
    border-radius: 4px;
    cursor: pointer;
}
.btn-delete:hover { background: #c0392b; }
</style>



<main>
    <div class="title">
        <h1>Data Mahasiswa</h1>
        <a href="<?= base_url('/tambah'); ?>"><button class="btn-tambah">Tambah Data</button></a>
    </div>

    <div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Prodi</th>
                    <th>Universitas</th>
                    <th>Nomor HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php if (!empty($mahasiswa) && is_array($mahasiswa)): ?>
                    <?php foreach ($mahasiswa as $mhs): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= esc($mhs['nama']); ?></td>
                            <td><?= esc($mhs['nim']); ?></td>
                            <td><?= esc($mhs['prodi']); ?></td>
                            <td><?= esc($mhs['universitas']); ?></td>
                            <td><?= esc($mhs['nomor_handphone']); ?></td>
                            <td>
                                <a href="<?= base_url('/edit/' . esc($mhs['nim'])); ?>"><button class="btn-update">Update</button></a>
                                <form action="<?= base_url('/hapus/' . esc($mhs['nim'])); ?>" method="post" style="display:inline;">
                                    <?= csrf_field(); ?>
                                    <button type="submit" class="btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">Tidak ada data mahasiswa ditemukan.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</main>
<?= $this->endSection(); ?>
