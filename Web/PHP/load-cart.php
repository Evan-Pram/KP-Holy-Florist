<?php
    require "connection.php";

    if(isset($_SESSION['userLoged'])){
        $iduser = $_SESSION['ID'];
        $sqlCart = mysqli_query($conn, "SELECT * FROM cart WHERE id_user = $iduser");
        $cekCart = mysqli_num_rows($sqlCart);
        $noCart = false;
        if($cekCart > 0){
            $cart = mysqli_fetch_array($sqlCart);
            $orderID = $cart['id_order'];
            $sqlDetailCart = mysqli_query($conn, "SELECT * FROM detail_cart WHERE id_order = '$orderID'");
            while($temp = mysqli_fetch_assoc($sqlDetailCart)){
                $listCart[] = $temp;
                $idbarang = $temp['id_produk'];
                $sqlBarang = mysqli_query($conn, "SELECT * FROM barang WHERE id_Barang = $idbarang");
                $barang[] = mysqli_fetch_assoc($sqlBarang);
            }
        }else{
            $noCart = true;
        }
    }else{
        header('location: index.php');
    }
?>