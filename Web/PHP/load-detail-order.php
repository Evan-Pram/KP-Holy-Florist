<?php
    require "connection.php";
    $POKadaluarsa = false;

    if(isset($_GET['order'])){
        $idorder = $_GET['order'];
        $sqlDetailPengiriman = mysqli_query($conn, "SELECT * FROM detail_pengiriman WHERE id_order = '$idorder'");
        $sqlDetailOrder = mysqli_query($conn, "SELECT * FROM detail_orders WHERE id_order = '$idorder'");
        $sqlOrders = mysqli_query($conn, "SELECT * FROM orders WHERE id_order = '$idorder'");
        $currentDate = date('Y-m-d');
        $totalHarga = 0;

        $detailPengiriman = mysqli_fetch_assoc($sqlDetailPengiriman);
        $orders = mysqli_fetch_assoc($sqlOrders);
        $idMetodePembayaran = $orders['metode_pembayaran'];
        $sqlPembayaranOrders = mysqli_query($conn, "SELECT * FROM pembayaran WHERE id = $idMetodePembayaran");
        $metodePembayaranOrders = mysqli_fetch_assoc($sqlPembayaranOrders);

        while($temp = mysqli_fetch_assoc($sqlDetailOrder)){
            $listDetailOrder[] = $temp;
            $idproduk = $temp['id_produk'];
            $sqlProduk = mysqli_query($conn, "SELECT * FROM barang WHERE id_Barang = $idproduk");
            $produk[] = mysqli_fetch_assoc($sqlProduk);
        }
        
        $date = "2022-04-27";
        if($detailPengiriman['tgl_pengiriman'] >= $currentDate){
            echo "belom tenggat waktu || ";
        }else{
            echo "tenggat waktu || ";
        }
        var_dump($currentDate);
    }
?>