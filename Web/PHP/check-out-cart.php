<?php
    session_start();
    require "connection.php";

    var_dump($_POST);

    $idorder = $_GET['id_order'];
    $iduser = $_SESSION['ID'];
    $tanggalKirim = $_POST['tanggal'];
    $jamKirim = $_POST['jam'];
    $namaPengirim = $_POST['namaPengirim'];
    $telpPengirim = $_POST['telpPengirim'];
    $alamatTujuan = $_POST['alamat'];
    $namaPenerima = $_POST['namaPenerima'];
    $totalHarga = intval($_POST['totalHarga']);
    $metodePembayaran = intval($_POST['metodePembayaran']);

    // bikin PO Baru
    $sqlAddOrders = mysqli_query($conn, "INSERT INTO orders (id_order, id_user, total_harga, metode_pembayaran) 
                                                    VALUES ('$idorder', $iduser, $totalHarga, $metodePembayaran)");

    if($sqlAddOrders){
        // bikin detail pengiriman
        $sqlAddDetailPengiriman = mysqli_query($conn, "INSERT INTO detail_pengiriman (id_order, tgl_pengiriman, nama_pengirim, telp_pengirim, alamat_tujuan, nama_penerima)
                                                            VALUES ('$idorder', '$tanggalKirim', '$namaPengirim', '$telpPengirim', '$alamatTujuan', '$namaPenerima')");
        // ambil semua barang dari cart
        $sqlDetailCart = mysqli_query($conn, "SELECT * FROM detail_cart WHERE id_order = '$idorder'");
        while($temp = mysqli_fetch_assoc($sqlDetailCart)){
            $idProduk = $temp['id_produk'];
            $idDetailCart = $temp['id'];
            $msg = $temp['msg'];
            $msgFrom = $temp['msg_from'];
    
            // bikin detail order
            $sqlAddDetailOrder = mysqli_query($conn, "INSERT INTO detail_orders (id_order, id_produk, msg, msg_from)
                                                            VALUES ('$idorder', $idProduk, '$msg', '$msgFrom') ");
    
            // hapus record dari detail cart
            $sqlHapusDetailCart = mysqli_query($conn, "DELETE FROM detail_cart WHERE id = $idDetailCart");
        }
    
        // hapus record dari Cart
        $sqlHapusCart = mysqli_query($conn, "DELETE FROM cart WHERE id_order = '$idorder'");
    }else{
        var_dump(mysqli_error($conn));
    }

?>