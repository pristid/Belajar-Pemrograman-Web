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
    <nav class="navbar navbar-expand-md navbar-dark bg-danger">
            <a class="navbar-brand" href="#">Donasi Ceria</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url()."index.php/admin" ?>">Admin<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url()."index.php/admin/donasi" ?>">Donasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()."index.php/admin/logout" ?>">Logout</a>
                </li>
                </ul>
            </div>
        </nav>
    <!-- Navbar End -->
    <br>
    <div class="container">
        <h3>List Donatur</h3>
        <hr>
        <form action="<?php echo base_url()."index.php/admin/cek_donasi"; ?>" method="POST">
            <select name="donatur" id="donatur" class="form-control">
            <?php
                foreach($data as $d){
            ?>
            <option value="<?php echo $d['no_id']; ?>"><?php echo $d['nama']." ; ".$d['no_id']; ?></option>
            <?php 
                }
            ?>
            </select>
            <br>
            <button type="submit" class="btn btn-primary">Cari</button> 
        </form>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>bootstrap/js/bootstrap.min.js"></script>
</body>
</html>