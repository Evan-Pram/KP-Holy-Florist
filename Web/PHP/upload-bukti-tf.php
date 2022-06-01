<?php
    require 'connection.php';

    $namaFile = $_FILES['buktiTransfer']['name'];
    $ext = pathinfo($namaFile, PATHINFO_EXTENSION);
    $ukuranFile = $_FILES['buktiTransfer']['size'];
    $tipeFile = $_FILES['buktiTransfer']['type'];
    $tmpFile = $_FILES['buktiTransfer']['tmp_name'];
    $path = "../Asset/img/bukti-transfer/";
    $error = $_FILES['buktiTransfer']['error'];
    $idOrder = $_POST['orders-id'];

    if($tipeFile == "image/jpeg" || $tipeFile == "image/png"){
        if($ukuranFile <= 5000000){
            $namaGambar = uniqid().".".$ext;
            if(move_uploaded_file($tmpFile,$path.$namaGambar)){
                $sqlUploadBukti = mysqli_query($conn, "UPDATE orders SET bukti_transfer = '$namaGambar' WHERE id_order = '$idOrder'");
                // update status
                $sqlUpdateStatus = mysqli_query($conn, "UPDATE orders SET status = 'Confirm' WHERE id_order = '$idOrder'");
            }
        }else{
            // jika ukuran gambar melebihi 1Mb
            echo 'size';
        }
    }else{
        // jika tipe file bukan gambar
        echo 'type';
    }
    var_dump($_POST,$_FILES);
?>