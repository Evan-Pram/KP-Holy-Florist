<?php
    require 'connection.php';

    $queryBarang = mysqli_query($conn,"SELECT * FROM barang WHERE status = 1");
    $listBarang = [];

    while ($barang = mysqli_fetch_assoc($queryBarang)) {
        $listBarang[] = $barang;
    }
?>