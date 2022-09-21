<?php

$conn = mysqli_connect('localhost','root','','db_perpustakaan');

/* check connection */

if (mysqli_connect_error()) {

    printf("Connect failed: %s\n", mysqli_connect_error());

    exit();

}

?>

