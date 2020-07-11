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
                    <a class="nav-link" href="<?php echo base_url()."index.php/donatur/donasi" ?>">Donasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url()."index.php/donatur/liat_donasi/".$this->session->userdata('no_id'); ?>">List Donasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()."index.php/donatur/logout" ?>">Logout</a>
                </li>
                </ul>
            </div>
        </nav>
    <!-- Navbar End -->
    <br>
    <div class="container">
    <p class="h3">List Donasi</p>
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Donasi</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <?php
                    $no = 1;
                    foreach ($data as $r){
                ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $r['nama']; ?></td>
                    <td><?php echo $r['jenis_donasi']; ?></td>
                    <td><?php echo $r['jumlah']; ?></td>
                    <td><?php echo $r['ket']; ?></td>
                    <td><?php echo $r['tgl_donasi']; ?></td>
                    <td><?php echo $r['status']; ?></td>
                </tr>
                <?php
                    $no++;
                    }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>bootstrap/js/bootstrap.min.js"></script>
    
</body>
</html>