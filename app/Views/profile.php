<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>
<div class="text-center">
    <h2 class="mb-4">Profile</h2>
    <img src="<?= base_url('images/steepen.jpeg') ?>" alt="Profile Picture"
        class="img-fluid rounded-circle shadow mb-3" style="width: 150px; height: 150px; object-fit: cover;">
    <p class="fs-bold mb-1">Nama: Steepen Istiawan</p>
    <p class="mb-1">NIM : 32602300072</p>
    <p class="mb-4">Mahasiswa Informatika</p>

    <div class="d-flex justify-content-center gap-3">
        <a href="https://www.instagram.com/" target="_blank" class="text-light">
            <i class="fab fa-instagram fa-2x"></i>
        </a>
        <a href="https://github.com/" target="_blank" class="text-light">
            <i class="fab fa-github fa-2x"></i>
        </a>
        <a href="https://facebook.com/" target="_blank" class="text-light">
            <i class="fab fa-facebook fa-2x"></i>
        </a>
    </div>
</div>
<?= $this->endSection() ?>
