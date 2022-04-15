<?php
    require "connection.php";

    $id = $_GET["id"];
    global $conn;

    $barang = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM barang WHERE id_Barang = $id"));
    
    if($barang["status"] > 0){
        $editDB = mysqli_query($conn, "UPDATE barang SET status = 0 WHERE id_Barang = $id");
    }elseif($barang["status"] < 1){
        $editDB = mysqli_query($conn, "UPDATE barang SET status = 1 WHERE id_Barang = $id");
    };

    header('Location: ../../produk.php');
?>