<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            padding-top: 20px;
        }
        .sidebar {
            background-color: #f8f9fa;
            height: 100vh;
            position: fixed;
            padding-top: 20px;
            border-right: 1px solid #dee2e6;
        }
        .sidebar-header {
            padding: 0 15px 20px;
            border-bottom: 1px solid #dee2e6;
            margin-bottom: 15px;
        }
        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .sidebar-menu li {
            margin-bottom: 10px;
        }
        .sidebar-menu li a {
            display: block;
            padding: 10px 15px;
            color: #333;
            text-decoration: none;
            border-radius: 4px;
        }
        .sidebar-menu li a:hover {
            background-color: #e9ecef;
        }
        .sidebar-menu li a.active {
            background-color: #007bff;
            color: white;
        }
        .sidebar-menu li a i {
            margin-right: 10px;
        }
        .main-content {
            margin-left: 0;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar Navigation -->
            <div class="col-md-3 col-lg-2 sidebar">
                <div class="sidebar-header">
                    <h3>Admin</h3>
                </div>
                <ul class="sidebar-menu">
                    <li>
                        <a href="">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('blog');?>" class="active">
                            <i class="fas fa-users"></i> Data Orang
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('blog/add');?>">
                            <i class="fas fa-user-plus"></i> Tambah orang
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('logout');?>">
                            <i class="fas fa-sign-out-alt"></i> Keluar
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 ml-sm-auto main-content">
                <div class="container">
                    <div class="row">
                        <h1><?php echo $content;?></h1>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Depan</th>
                                <th scope="col">Nama Tengah</th>
                                <th scope="col">Nama Belakang</th>
                                <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Fatkhurrochman</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>
                                        <a href="<?php echo site_url('blog/edit/1');?>" class="btn btn-sm btn-success"><i></i> Edit</a>
                                        <a href="<?php echo site_url('blog/delete/1');?>" class="btn btn-sm btn-warning" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Wahyu</td>
                                    <td>-</td>
                                    <td>Priyoatmoko</td>
                                    <td>
                                        <a href="<?php echo site_url('blog/edit/2');?>" class="btn btn-sm btn-success"><i></i> Edit</a>
                                        <a href="<?php echo site_url('blog/delete/2');?>" class="btn btn-sm btn-warning" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Muhammad</td>
                                    <td>Abdul</td>
                                    <td>Muin</td>
                                    <td>
                                        <a href="<?php echo site_url('blog/edit/3');?>" class="btn btn-sm btn-success"><i></i> Edit</a>
                                        <a href="<?php echo site_url('blog/delete/3');?>" class="btn btn-sm btn-warning" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer text-muted text-center">
        <small>&copy; 2025.2233049.</small>
    </div>
    <script type="text/javascript" src="<?php echo base_url('asset/js/jquery.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>
</body>
</html>