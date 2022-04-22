<?php
    session_start();
    date_default_timezone_set('Asia/Bangkok');
    require 'connection.php';
    $idbarang = $_GET['id'];
    $iduser = $_SESSION['ID'];
    $sqlCekCart = mysqli_query($conn, "SELECT * FROM cart WHERE id_user = $iduser");
    $cekCart = mysqli_num_rows($sqlCekCart);
    $printedMsg = $_POST['printedMessage'];
    $printedSender = $_POST['printedSender'];

    // var_dump($_POST);exit();

    // cek jika sudah ada order id nya
    if($cekCart > 0){
        $cart = mysqli_fetch_array($sqlCekCart);
        $orderID = $cart['id_order'];
        $sqlAddCart = mysqli_query($conn, "INSERT INTO detail_cart (id_order, id_produk, msg, msg_from) VALUES ('$orderID', $idbarang, '$printedMsg', '$printedSender')");

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
    }else{
        // jika belum ada order id
        $time = date('YmdHms');
        $newOrderID = "PO-".$time;
        
        $sqlCartBaru = mysqli_query($conn, "INSERT INTO cart (id_order, id_user) VALUES ('$newOrderID', '$iduser')");

        if($sqlCartBaru){
            $sqlDetailCart = mysqli_query($conn, "INSERT INTO detail_cart (id_order, id_produk, msg, msg_from) VALUES ('$newOrderID', $idbarang, '$printedMsg', '$printedSender')");

            if($sqlDetailCart){
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
            echo 
                "
                    <div class='alert alert-success'>
                        Gagal menambahkan ke keranjang
                    </div>
                    <meta http-equiv='refresh' content='3; url= ../page-detail.php?id=".$idbarang."'/>
                ";
        }
    }
?>