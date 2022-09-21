<?php include "header.php";?>
<h2>Daftar Buku</h2>
<div class="row">
    <?php
    include "koneksi.php";
    $qry_buku=mysqli_query($conn,"select * from buku");
    while ($data_buku = mysqli_fetch_array($qry_buku)) {
        ?>
        <div class="col-md-3">
            <div class="card">
                <img src="imgbuku/<?=$data_buku['foto']?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?=$data_buku['nama_buku']?></h5>
                    <p class="card-text"><?=substr($data_buku['deskripsi'],0,20)?></p>
                    <a href="pinjam_buku.php?id_buku=<?=$data_buku['id_buku']?>" class="btn btn-success">Pinjam</a>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<?php include "footer.php"?>