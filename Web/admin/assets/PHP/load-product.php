<?php
    require 'connection.php';

    $queryBarang = mysqli_query($conn,"SELECT * FROM barang");
    $listBarang = [];

    while ($barang = mysqli_fetch_assoc($queryBarang)) {
        $listBarang[] = $barang;
    }
?>