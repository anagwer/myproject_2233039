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
                        <a href="<?php echo site_url('blog');?>">
                            <i class="fas fa-users"></i> Data Orang
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('blog/add');?>">
                            <i class="fas fa-user-plus"></i> Tambah Orang
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4><i></i> Update Data Orang</h4>
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo site_url('person/save');?>" method="post">
                                        <div class="form-group">
                                            <label for="nama_depan">Nama Depan <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="nama_depan" name="nama_depan" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_tengah">Nama Tengah</label>
                                            <input type="text" class="form-control" id="nama_tengah" name="nama_tengah">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_belakang">Nama Belakang</label>
                                            <input type="text" class="form-control" id="nama_belakang" name="nama_belakang">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success"><i></i> Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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