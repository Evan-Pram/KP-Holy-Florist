<?php
    require "connection.php";

    $sqlOrderlist = mysqli_query($conn, "SELECT * FROM orders ORDER BY tglDibuat DESC");
    while($temp = mysqli_fetch_assoc($sqlOrderlist)){
        $ordersList[] = $temp;
        $iduser = $temp['id_user'];
        $sqlNamaUser = mysqli_query($conn, "SELECT username FROM user WHERE id_user = $iduser");
        $namaUser[] = mysqli_fetch_assoc($sqlNamaUser);
    }
?>