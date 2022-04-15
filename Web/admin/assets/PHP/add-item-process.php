<?php
    require 'connection.php';

    $namaBarang = htmlspecialchars($_POST['namaproduk']);
    $jenis = htmlspecialchars($_POST['kategori']);
    $harga = htmlspecialchars($_POST['harga']);

    $namaFile = $_FILES['uploadgambar']['name'];
    $ext = pathinfo($namaFile, PATHINFO_EXTENSION);
    $ukuranFile = $_FILES['uploadgambar']['size'];
    $tipeFile = $_FILES['uploadgambar']['type'];
    $tmpFile = $_FILES['uploadgambar']['tmp_name'];
    $path = "../Asset/img/barang/";
    $error = $_FILES['uploadgambar']['error'];

    if($tipeFile == "image/jpeg" || $tipeFile == "image/png"){
        if($ukuranFile <= 5000000){
            if($jenis == 'Papan Bunga'){
                $model = htmlspecialchars($_POST['model']);
                $ukuran = htmlspecialchars($_POST['panjang']."x".$_POST['lebar']);
                //upload gambar
                $namaGambar = uniqid().".".$ext;
                move_uploaded_file($tmpFile,$path.$namaGambar);
                //upload barang ke db
                $sql = mysqli_query($conn, "INSERT INTO barang (nama, jenis, model, ukuran, harga, gambar) VALUES ('$namaBarang', '$jenis', '$model', '$ukuran', $harga, '$namaGambar')");
                echo 'true';
            }else{
                //upload gambar;
                $namaGambar= uniqid().'.'.$ext;
                move_uploaded_file($tmpFile,$path.$namaGambar);
                //upload barang ke db
                $sql = mysqli_query($conn, "INSERT INTO barang (nama, jenis, harga, gambar) VALUES ('$namaBarang', '$jenis', $harga, '$namaGambar')");
                echo 'true';
            }
        }else{
            //jika ukuran gambar melebihi 1MB
            echo 'size';
        }
    }else{
        //jika file yang diupload bukan JPG/JPEG/PNG
        echo 'type';
    }

?>