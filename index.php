<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Siswa - Aplikasi Pembayaran SPP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h4 class="text-center">LOGIN SISWA</h4>
                <div class="card">
                    <div class="card-header">
                        <img src="logo-spp.png" width="100%" alt="">
                    </div>
                    <div class="card-body">
                        <form action="proses-login-siswa.php" method="post">
                            <div class="form-group mb-2">
                                <label for="">NISN</label>
                                <input type="number" name="nisn" class="form-control" placeholder="Masukkan NISN Anda...." required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">NIS</label>
                                <input type="number" name="nis" class="form-control" placeholder="Masukkan NIS Anda...." required>
                            </div>
                            <div class="form-group mb-2">
                                <button type="submit" class="btn btn-primary">LOGIN</button>
                            </div>
                            <a href="index2.php" class="text-decoration-none"> Login Sebagai Administrator / Petugas </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>