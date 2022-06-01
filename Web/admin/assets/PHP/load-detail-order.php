<?php
    require "connection.php";

    if(isset($_GET['order'])){
        $idorder = $_GET['order'];
        $sqlorder = mysqli_query($conn, "SELECT * FROM orders WHERE id_order = '$idorder'");
        $orders = mysqli_fetch_assoc($sqlorder);
        $sqlDetailPengiriman = mysqli_query($conn, "SELECT * FROM detail_pengiriman WHERE id_order = '$idorder'");
        $detailPengiriman = mysqli_fetch_assoc($sqlDetailPengiriman);
        $sqlDetailOrder = mysqli_query($conn, "SELECT * FROM detail_orders WHERE id_order = '$idorder'");
        $idMetodePembayaran = $orders['metode_pembayaran'];
        $sqlMetodePembayaran = mysqli_query($conn, "SELECT * FROM pembayaran WHERE id = $idMetodePembayaran");
        $metodePembayaran = mysqli_fetch_assoc($sqlMetodePembayaran);

        while($temp = mysqli_fetch_assoc($sqlDetailOrder)){
            $listDetailOrder[] = $temp;
            $idbarang = $temp['id_produk'];
            $sqlProduk = mysqli_query($conn, "SELECT * FROM barang WHERE id_Barang = $idbarang");
            $listProduk[] = mysqli_fetch_assoc($sqlProduk);
        }

        var_dump($orders, $listDetailOrder, $listProduk);
    }else{
        $noData = true;
    }
?>