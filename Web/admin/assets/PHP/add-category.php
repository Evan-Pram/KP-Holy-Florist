<?php
    require 'connection.php';
    $namaKat = $_POST['namakategori'];

    $sql = mysqli_query($conn, "INSERT INTO kategori (nama) VALUES ('$namaKat')");
    header('location: ../../kategori.php');
?>