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
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()."index.php/welcome" ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#iklan">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#pendaftaran">Daftar</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url()."index.php/welcome/login" ?>">Login</a>
            </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar End -->
    <br>
    <!-- Login -->
    <div class="container">
    <p class="h3">Login</p>
    <hr>
        <form action="<?php echo base_url()."index.php/welcome/proses_login";?>" method="POST">
            <div class="form-row">
                <div class="col-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="col-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-danger">Login</button>
        </form>
    </div>
    <footer class="page-footer font-small blue pt-4">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="#">Pristi Dwi Pangesti:A12.2018.06090</a>
        </div>
        <!-- Copyright -->
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>bootstrap/js/bootstrap.min.js"></script>
</body>
</html>