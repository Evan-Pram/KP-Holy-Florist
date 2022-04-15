<?php
    require "connection.php";

    $id = $_GET["id"];
    global $conn;

    $metode = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM pembayaran WHERE id = $id"));
    
    if($metode["status"] > 0){
        $editDB = mysqli_query($conn, "UPDATE pembayaran SET status = 0 WHERE id = $id");
    }elseif($metode["status"] < 1){
        $editDB = mysqli_query($conn, "UPDATE pembayaran SET status = 1 WHERE id = $id");
    };

    header('Location: ../../pembayaran.php');
?>