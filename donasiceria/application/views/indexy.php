<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>bootstrap/css/bootstrap.min.css">
    <title>Donasi Ceria</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Donasi Ceria</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url()."index.php/welcome" ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#iklan">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#pendaftaran">Daftar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()."index.php/welcome/login" ?>">Login</a>
            </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar End -->
    <br>
    <div class="container-fluid">
        <div class="container-sm">
            <!-- List Donasi -->
            <section id="iklan">
                <p class="h2">News</p>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <div class="card mb-3">
                            <img class="card-img-top" src="<?php echo base_url()."assets/";?>img/slide/1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Penyaluran Donasi di Tokopedia untuk Membangun Kembali Palu</h5>
                                <p class="card-text">Jakarta, 19 Oktober 2018 – Dalam kurun waktu satu minggu (30 September – 7 Oktober 2018), Tokopedia telah mengumpulkan donasi untuk bencana di Palu dan sekitarnya,-</p>
                                <p class="card-text"><small class="text-muted">Last updated 1 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mb-3">
                            <img class="card-img-top" src="<?php echo base_url()."assets/";?>img/slide/2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Kitabisa Gelar Hari Donasi Online Nasional, Apa Itu?</h5>
                                <p class="card-text">Liputan6.com, Jakarta - Kitabisa sebagai platform penggalangan dana terbesar di Indonesia mencatat peningkatan orang berdonasi sebesar 90 persen pada Ramadan dibanding bulan lainnya.</p>
                                <br>
                                <p class="card-text"><small class="text-muted">Last updated 2 days ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- List Ends -->
        </div>
    </div>
        
        <br><br>

        <!-- Pendaftaran -->
    <section class="p-4" id="pendaftaran" style="background-color:#383838;">
        <p class="h2 text-center text-light">Daftar Akun</p>
        <br>
        <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-sm">
            <form action="<?php echo base_url()."index.php/welcome/proses_daftar"; ?>" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="no_id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nomer Identitas">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Masukkan Password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Daftar</button>
            </form>
            </div>
            <div class="col-sm">
        </div>
    <br>
    </section>
        <!-- Pendaftaran Ends -->
    <footer class="page-footer font-small blue pt-4">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="#">Pristi Dwi Pangesti:A12.2018.06090</a>
        </div>
        <!-- Copyright -->
    </footer>

    <!-- <h1>Login</h1>
    <form action=" <?php echo base_url()."index.php/welcome/proses_login";?>" method="POST">
        Email:<br>
        <input type="email" name="email" required>
        <br><br>
        Password:<br>
        <input type="password" name="password" required>
        <br><br>
        <input type="submit" value="Login">
    </form> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>bootstrap/js/bootstrap.min.js"></script>
</body>
</html>