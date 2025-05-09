<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar {
            background-color:rgb(92, 34, 0);
            border-bottom: 1px solid #dee2e6;
            position: relative;
        }
        .navbar-brand {
            font-weight: bold;
            color: #ffffff !important;
        }
        .navbar-nav .nav-link {
            color: #f8f9fa;
        }
        .navbar-nav .nav-link:hover {
            color: #ffc107;
        }
        .navbar-nav .nav-link.active {
            color: #ffc107;
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
        .table {
            border-radius: 8px;
            overflow: hidden;
        }
        .table thead {
            background-color: #28a745;
            color: white;
            font-weight: bold;
        }
        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }
        .btn {
            font-size: 0.875rem;
            padding: 5px 10px;
            border-radius: 8px;
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
                        <a class="nav-link" href="#">
                             Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo site_url('product');?>">
                            Product
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Logout Button Positioned at the Top Right -->
        <a class="logout-btn" href="<?php echo site_url('');?>">
            <i class="fas fa-sign-out-alt"></i> Keluar
        </a>
    </nav>
    
    <!-- Page Content -->
    <div class="container main-content mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-4 text-center">Edit Product</h2><hr>
                <form action="<?php echo site_url('product/update');?>" method="post">
                    <div class="form-group mb-3">
                        <label for="nama_produk" class="form-label">Nama Product</label>
                        <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="<?php echo $nama_produk;?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="harga_produk" class="form-label">Harga Product</label>
                        <div class="input-group">
                            <input type="number" name="harga_produk" id="harga_produk" class="form-control" value="<?php echo $harga_produk;?>" required>
                        </div>
                    </div>
                    <input type="hidden" name="id_produk" value="<?php echo $id_produk;?>">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>