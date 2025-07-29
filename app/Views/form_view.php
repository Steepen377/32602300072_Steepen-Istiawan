<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
</head>
<body>
    <h2>Form Input Data Mahasiswa</h2>
    <form method="post" action="<?= base_url('submit') ?>">
        <p>
            <label>Nama:</label><br>
            <input type="text" name="nama" required>
        </p>
        <p>
            <label>NIM:</label><br>
            <input type="text" name="nim" required>
        </p>
        <p>
            <label>Kelas:</label><br>
            <input type="text" name="kelas" required>
        </p>
        <p>
            <label>Mata Kuliah:</label><br>
            <input type="text" name="matakuliah" required>
        </p>
        <p>
            <label>Dosen Pengampu:</label><br>
            <input type="text" name="dosen" required>
        </p>
        <p>
            <label>Asisten Praktikum:</label><br>
            <input type="text" name="asisten" required>
        </p>
        <p>
            <input type="submit" value="Submit">
        </p>
    </form>
</body>
</html>
