<?php
    require 'connection.php';

    $idOrder = $_GET['order'];
    $sqlUpdateOrder = mysqli_query($conn, "UPDATE orders SET status = 'Proccess' WHERE id_order = '$idOrder'");

    if($sqlUpdateOrder){
        header('location: ../../order-detail.php?order='.$idOrder);
    }
?>