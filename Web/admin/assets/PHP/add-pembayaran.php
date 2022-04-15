<?php
    require 'connection.php';
    
    $metode = $_POST['metode'];
    $norek = $_POST['norek'];
    $an = $_POST['an'];
    $logo = $_POST['logo'];

    $sql = mysqli_query($conn, "INSERT INTO pembayaran (metode, noRek, logo, an) VALUES ('$metode', '$norek', '$logo', '$an')");
    header('location: ../../pembayaran.php');
?>