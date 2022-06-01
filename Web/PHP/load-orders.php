<?php
    require 'connection.php';
    $currentDate = date('Y-m-d');

    if(isset($_SESSION['userLoged'])){
        $iduser = $_SESSION['ID'];

        $sqlOrders = mysqli_query($conn, "SELECT * FROM orders WHERE id_user = $iduser");
        while($temp = mysqli_fetch_assoc($sqlOrders)){
            $listOrders[] = $temp;
            $idMetodePembayaran = $temp['metode_pembayaran'];
            $sqlMetodePembayaran = mysqli_query($conn, "SELECT * FROM pembayaran WHERE id = $idMetodePembayaran");
            $metodePembayaran[] = mysqli_fetch_assoc($sqlMetodePembayaran);
            
        }
    }else{
        // header('location: index.php');
    }
?>