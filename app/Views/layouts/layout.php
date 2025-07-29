<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter 4 Application</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
   
   <style>
        body {
            background-color: #1e1e2f;
            color: #ffffff;
        }

        .navbar,
        footer,
        header {
            background-color: #006d77 !important;
        }

        .nav-link {
            color: #ffffff !important;
        }

        .content-container {
            padding: 2rem;
            background-color: #2c2c3c;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="d-flex flex-column min-vh-100">
        <header class="text-white text-center py-3">
            <h3>Tugas Praktikum Web Programming</h3>
        </header>

        <nav class="navbar navbar-expand-lg navbar-dark px-3">
            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-3">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('profile') ?>">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('experience') ?>">Experience</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid flex-grow-1 d-flex justify-content-center align-items-center py-4">
            <div class="content-container w-100" style="max-width: 800px;">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
        <footer class="text-white text-center py-3">
            &copy; Steepen
        </footer>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>