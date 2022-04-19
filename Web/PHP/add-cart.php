<?php
    session_start();
    require 'connection.php';
    $idbarang = $_GET['id'];
    $iduser = $_SESSION['ID'];
    $sqlCekCart = mysqli_query($conn, "SELECT * FROM cart WHERE id_user = $iduser");
    $cekCart = mysqli_num_rows($sqlCekCart);

    // cek jika sudah ada order id nya
    if($cekCart > 0){
        $cart = mysqli_fetch_array($sqlCekCart);
        $orderID = $cart['id_order'];
        // cek barang serupa
        $sqlCekBarang = mysqli_query($conn, "SELECT * FROM detail_cart WHERE id_produk = $idbarang AND id_order = '$orderID'");
        $cekBarang = mysqli_num_rows($sqlCekBarang);

        if($cekBarang > 0){
            // jika barang sudah ada
            $barang = mysqli_fetch_array($sqlCekBarang);
            $qty = $barang['qty'];
            $qtyBaru = $qty+1;

            $updateQty = mysqli_query($conn, "UPDATE detail_cart SET qty = $qtyBaru WHERE id_order = '$orderID' AND id_produk = $idbarang");
            if($updateQty){
                header('location: ../cart.php');
            }else{
                echo 
                "
                    <div class='alert alert-success'>
                        Gagal menambahkan ke keranjang
                    </div>
                    <meta http-equiv='refresh' content='3; url= ../page-detail.php?id=".$idbarang."'/>
                ";
            }
        }else{
            // jika barang belum ada
            $sqlAddCart = mysqli_query($conn, "INSERT INTO detail_cart (id_order, id_produk, qty) VALUES ('$orderID', $idbarang, 1)");
            if($sqlAddCart){
                header('location: ../cart.php');
            }else{
                echo 
                "
                    <div class='alert alert-success'>
                        Gagal menambahkan ke keranjang
                    </div>
                    <meta http-equiv='refresh' content='3; url= ../page-detail.php?id=".$idbarang."'/>
                ";
            }
        }
    }else{
        // jika belum ada order id
    }

    var_dump($updateQty);



?>