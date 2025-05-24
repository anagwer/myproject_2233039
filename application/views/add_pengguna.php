<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar {
            background-color: rgb(92, 34, 0); /* Warna coklat tua */
            border-bottom: 1px solid #dee2e6;
            position: relative;
        }
        .navbar-brand {
            font-weight: bold;
            color: #ffffff !important;
        }
        .navbar-nav .nav-link {
            color: #f8f9fa; /* Warna putih untuk link navbar */
        }
        .navbar-nav .nav-link:hover {
            color: #ffc107; /* Hover kuning */
        }
        .navbar-nav .nav-link.active {
            color: #ffc107; /* Link aktif berwarna kuning */
            font-weight: bold;
        }
        .main-content {
            padding: 30px 15px;
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }
        .card-header {
            background-color: #28a745; /* Header hijau */
            color: white;
            font-size: 1.25rem;
            font-weight: bold;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }
        .form-group label {
            font-weight: bold;
            color: #333;
        }
        .form-control {
            border-radius: 8px;
            border: 1px solid #ccc;
            padding: 15px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            border-color: #167df2;
            box-shadow: 0 0 5px rgba(22, 125, 242, 0.5);
        }
        .input-group-prepend .input-group-text {
            background-color: #28a745; /* Warna hijau */
            color: white;
            font-weight: bold;
        }
        .btn-success {
            background-color: #28a745; /* Warna hijau */
            color: white;
            border-radius: 8px;
            padding: 10px 20px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }
        .btn-success:hover {
            background-color: #218838; /* Warna hijau lebih gelap */
            border-color: #218838;
        }
        .logout-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #ffffff;
            font-size: 1rem;
            text-decoration: none;
        }
        .logout-btn:hover {
            color: #f8f9fa;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">CI Dasar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('product');?>">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo site_url('user');?>">Pengguna</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Logout Button Positioned at the Top Right -->
    <a class="logout-btn" href="<?php echo site_url('auth/logout');?>">
        <i class="fas fa-sign-out-alt"></i> Keluar
    </a>
</nav>
<div class="container main-content mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4 text-center">Tambah Pengguna</h2>
            <hr>
            <form action="<?= site_url('user/store') ?>" method="post">
                <!-- Username -->
                <div class="form-group mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" required>
                </div>

                <!-- Password -->
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
                </div>

                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                
                <!-- Back Button -->
                <div class="mt-3 text-center">
                    <a href="<?= site_url('user') ?>" class="btn btn-link text-decoration-none text-muted">Kembali ke Daftar</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#productTable').DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.13.6/i18n/id.json" // Bahasa Indonesia
                }
            });
        });
    </script>
    
</body>
</html>

