<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - CI Dasar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .register-container {
            margin-top: 100px;
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: rgb(92, 34, 0);
            color: white;
            font-weight: bold;
            text-align: center;
            border-radius: 12px 12px 0 0;
        }
        .btn-register {
            background-color: rgb(92, 34, 0);
            color: white;
        }
        .btn-register:hover {
            background-color: #642500;
        }
    </style>
</head>
<body>
    <div class="container register-container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="<?= site_url('auth/register_process'); ?>" method="post">
                    <div class="card">
                        <div class="card-header">
                            Daftar User
                        </div>
                        <div class="card-body">
                            <?php if ($this->session->flashdata('error')): ?>
                                <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
                            <?php endif; ?>
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-register">Register</button>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            Sudah punya akun? <a href="<?= site_url('auth/login'); ?>">Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
