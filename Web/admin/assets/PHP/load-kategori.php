<?php
    require 'connection.php';

    $queryKategori = mysqli_query($conn,"SELECT * FROM kategori");
    $listKategori = [];

    while ($kategori = mysqli_fetch_assoc($queryKategori)) {
        $listKategori[] = $kategori;
    }
?>