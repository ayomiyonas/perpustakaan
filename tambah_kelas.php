<?php include 'navbar.php'?>
<html> 
<div class="container-fluid mt-3">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>perpustakaan</title>
    </head>
    <body>
        <h3>Tambah kelas</h3>
        <form action="proses_tambah_kelas.php" method="post">
            nama kelas :
            <input type="text" name="nama_kelas" value="" class="form-control">
            kelompok : 
            <input type="text" name="kelompok" value="" class="form-control">
            angkatan :
            <input type="text" name="angkatan" value="" class="form-control"> </br>
            <input type="submit" name="simpan" value="tambah kelas" class="btn btn-primary">
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha3
        84-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>