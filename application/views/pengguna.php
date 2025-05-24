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
    <a class="logout-btn" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
					<i class="fas fa-sign-out-alt"></i> Keluar
			</a>
</nav>

<!-- Main Content -->
<div class="container-fluid main-content p-5">
    <h2>Daftar Pengguna</h2><hr>
    <a href="<?php echo site_url('user/add_new');?>" class="btn btn-primary mb-3">+ Tambah</a>
    <div class="table-responsive">
        <table id="productTable" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 0; foreach ($users->result() as $row): $count++; ?>
                <tr>
                    <td><?= $count ?></td>
                    <td><?= $row->username ?></td>
                    <td>
                        <a href="<?= site_url('user/get_edit/'.$row->id) ?>" class="btn btn-sm btn-success">Edit</a>
                        <a href="<?= site_url('user/delete/'.$row->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Logout Confirmation Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header bg-warning text-dark">
            <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Logout</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
            Apakah Anda yakin ingin keluar dari aplikasi?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <a href="<?php echo site_url('auth/logout');?>" class="btn btn-danger">Keluar</a>
        </div>
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
