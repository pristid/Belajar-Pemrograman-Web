<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>bootstrap/css/bootstrap.min.css">
    <title>Dashboard</title>
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
                <a class="nav-link" href="<?php echo base_url()."index.php/donatur" ?>">Dashboard<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url()."index.php/donatur/donasi" ?>">Donasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()."index.php/donatur/liat_donasi/".$this->session->userdata('no_id'); ?>">List Donasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()."index.php/donatur/logout" ?>">Logout</a>
            </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="container">
        <p class="h2">Tambah Donasi</p>
        <hr>
        <form action="<?php echo base_url()."index.php/donatur/tambah_donasi/".$this->session->userdata('no_id'); ?>" method="POST">
            <div class="form-group">
                <label>Nama Donatur</label>
                <input type = "text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label>Jenis Donasi</label>
                <input type="text" class="form-control" name="jenis_donasi" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label>Jumlah</label>
                <input type="jumlah" class="form-control" name="jumlah" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" class="form-control" name="ket" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label>Tanggal Donasi</label>
                <input type="date" class="form-control" name="tgl_donasi" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Tambah</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>bootstrap/js/bootstrap.min.js"></script>
</body>
</html>