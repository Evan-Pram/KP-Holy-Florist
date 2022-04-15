<?php
    require 'connection.php';
    $idbarang = $_POST['idBarang'];

    $queryBarang = mysqli_query($conn,"SELECT * FROM barang WHERE id_Barang = $idbarang");
    $barang = mysqli_fetch_assoc($queryBarang);

    $namaBarang = htmlspecialchars($_POST['namaproduk']);
    $jenis = htmlspecialchars($_POST['kategori']);
    $model = htmlspecialchars($_POST['model']);
    $ukuran = htmlspecialchars($_POST['panjang']."x".$_POST['lebar']);
    $harga = htmlspecialchars($_POST['harga']);

    $namaFile = $_FILES['uploadgambar']['name'];
    $ext = pathinfo($namaFile, PATHINFO_EXTENSION);
    $ukuranFile = $_FILES['uploadgambar']['size'];
    $tipeFile = $_FILES['uploadgambar']['type'];
    $tmpFile = $_FILES['uploadgambar']['tmp_name'];
    $path = "../Asset/img/barang/";
    $error = $_FILES['uploadgambar']['error'];

    if($error === 4){
        // jika tidak ada gambar yg diupload / diganti
        if($jenis == "Papan Bunga"){
            $namaGambar = $barang['gambar'];

            $sql = mysqli_query($conn, "UPDATE barang SET nama = '$namaBarang', jenis = '$jenis', model = '$model', ukuran = '$ukuran', harga = '$harga', gambar = '$namaGambar' WHERE id_Barang = $idbarang");
            echo "true";
        }else{
            $namaGambar = $barang['gambar'];

            $sql = mysqli_query($conn, "UPDATE barang SET nama = '$namaBarang', jenis = '$jenis', model = NULL, ukuran = NULL, harga = '$harga', gambar = '$namaGambar' WHERE id_Barang = $idbarang");
            echo "true";
        }
    }else{
        if($tipeFile == "image/jpeg" || $tipeFile == "image/png"){
            if($ukuranFile <= 5000000){
                if($jenis == "Papan Bunga"){
                    $namaGambar = uniqid().".".$ext;
                    move_uploaded_file($tmpFile,$path.$namaGambar);
                    
    
                    $sql = mysqli_query($conn, "UPDATE barang SET nama = '$namaBarang', jenis = '$jenis', model = '$model', ukuran = '$ukuran', harga = '$harga', gambar = '$namaGambar' WHERE id_Barang = $idbarang");
                    echo "true";
                }else{
                    $namaGambar = uniqid().".".$ext;
                    move_uploaded_file($tmpFile,$path.$namaGambar);
                    
    
                    $sql = mysqli_query($conn, "UPDATE barang SET nama = '$namaBarang', jenis = '$jenis', model = NULL, ukuran = NULL, harga = '$harga', gambar = '$namaGambar' WHERE id_Barang = $idbarang");
                    echo "true";
                }
            }else{
                // jika ukuran file melebihi dari 1MB
                echo "size";
            }
        }else{
            // jika tipe file bukan JPEG / JPG / PNG
            echo "type";
        }
    }









    
    // if($barang['jenis'] == "Papan Bunga"){
    //     $panjang = explode("x",$barang['ukuran'])[0];
    //     $lebar = explode("x",$barang['ukuran'])[1];
    // }

    // editBarang($_POST);
    // header("location: ../admin/produk.php");
    

    // function editBarang($data)
    // {
    //     global $conn;
    //     global $barang;
    //     global $idbarang;
        
    //     $namaBarang = htmlspecialchars($data['namaproduk']);
    //     $jenis = htmlspecialchars($data['kategori'])

    //     $namaGambar = str_replace(" ", "", ucwords($namaBarang));
    //     $jenis = $data['kategori'];

    //     if($jenis == "Papan Bunga"){
    //         $namaBarang = htmlspecialchars($data['namaproduk']);
    //         $ukuran = $data['panjang'].'x'.$data['lebar'];
    //         $harga = $data['harga'];    
    //         $model = $data['model'];

    //         if($_FILES['uploadgambar']['error'] === 4){
    //             $tempHasil = $barang['gambar'];
    //         }else{
    //             $tempHasil = uploadGambarBaru();
    //         }
            
    //         $upDB = mysqli_query($conn, "UPDATE barang SET nama = '$namaBarang', jenis = '$jenis', model = '$model', ukuran = '$ukuran', harga = $harga, gambar = '$tempHasil' WHERE id_Barang = $idbarang");
    //         return mysqli_error($conn);
    //     }else if($jenis == "Buket"){
    //         if($_FILES['uploadgambar']['error'] === 4){
    //             $tempHasil = $barang['gambar'];
    //         }else{
    //             $tempHasil = uploadGambarBaru($namaGambar);
    //         }
    //         $namaBarang = htmlspecialchars($data['namaproduk']);
    //         $harga = $data['harga'];  
            
    //         $upDB = mysqli_query($conn, "UPDATE barang SET nama = '$namaBarang', jenis = '$jenis', harga = $harga, gambar = '$tempHasil' WHERE id_Barang = $idbarang");
    //         return mysqli_error($conn);
    //     }
    // }

    // function uploadGambarBaru()
    // {
    //     $tipeFile = $_FILES['uploadgambar']['name'];

    //     if($tipeFile == "image/jpeg" || $tipeFile == "image/png"){


    //     }else[{
    //         //jika tipe file bukan gambar
    //         return "false/type"
    //     }]

    //     $namaGambar = $_FILES['uploadgambar']["name"];
    //     $extenName = strtolower(explode(".", $namaGambar)[1]);
    //     $namaBarang = uniqid().".".$extenName;
    //     $tmpName = $_FILES['uploadgambar']['tmp_name'];
        
    //     move_uploaded_file($tmpName,'../Asset/img/barang/'.$namaBarang);
    //     return $namaBarang;
    // }
?>