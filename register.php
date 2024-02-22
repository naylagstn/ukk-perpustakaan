
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register Perpustakaan Digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Registrasi Akun Perpustakaan</h3></div>
                                    <div class="card-body">
                                        <?php
                                        if(isset ($_SESSION['login'])) {
                                            $username = $_POST(['username']);
                                            $password = $_POST(['password']);
                                            $email = $_POST(['email']);
                                            $nama_lengkap = $_POST(['nama_lengkap']);
                                            $alamat = $_POST(['alamat']);
                                            $level = $_POST(['level']);

                                            $insert = mysqli_query($koneksi, "INSERT INTO user ('username', 'password', 'email', 'nama_lengkap', 'alamat', 'level') VALUES ('$username', '$password', '$email', '$nama_lengkap', '$alamat', '$level') ");

                                            if($insert) {
                                                $_SESSION['user'] = mysqli_fetch_array($insert);
                                                echo '<script>alert("Login berhasil, Masuk ke Halaman Login")location.href="login.php"</script>';
                                            }else{
                                                echo '<script>alert("Login gagal")';
                                            }
                                            }
                                        
                                        ?>
                                        <form>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputNamalengkap" type="text" placeholder="Masukkan nama lengkap" />
                                                        <label for="inputFirstName">Nama Lengkap</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputUsername" type="text" placeholder="Masukkan username" />
                                                        <label for="inputLastName">Username</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="password" placeholder="Masukkan password" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                    <br>
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputAlamat" type="alamat" placeholder="Masukkan alamat anda" />
                                                        <label for="inputAlamat">Alamat</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="mt-4 mb-0">
                                                <div class="d-grid"><a class="btn btn-primary btn-block" href="login.php">Create Account</a></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">&copy; Perpustakaan Digital 2024</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
