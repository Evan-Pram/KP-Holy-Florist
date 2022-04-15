<?php
    require 'connection.php';

    $queryPembayaran = mysqli_query($conn,"SELECT * FROM pembayaran");
    $listPembayaran = [];

    while ($metodePembayaran = mysqli_fetch_assoc($queryPembayaran)) {
        $listPembayaran[] = $metodePembayaran;
    }
?>