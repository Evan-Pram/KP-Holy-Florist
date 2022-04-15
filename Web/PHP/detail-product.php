<?php
    require 'connection.php';
    $idbarang = $_GET['id'];

    $queryBarang = mysqli_query($conn,"SELECT * FROM barang WHERE id_Barang = $idbarang");
    $barang = mysqli_fetch_assoc($queryBarang);
?>