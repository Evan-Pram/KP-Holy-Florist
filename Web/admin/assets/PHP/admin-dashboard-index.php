<?php
    $sqlStatusOrder = mysqli_query($conn, "SELECT status, id_order FROM orders");
    $currentDate = date('Y-m-d');
    $pesananBaru = 0;
    $konfirmasiPembayaran = 0;
    while($temp = mysqli_fetch_assoc($sqlStatusOrder)){
        $idorder = $temp['id_order'];
        $sqlDetailPengiriman = mysqli_query($conn, "SELECT * FROM detail_pengiriman WHERE id_order = '$idorder'");
        $detailPengiriman = mysqli_fetch_assoc($sqlDetailPengiriman);
        if($temp['status'] == 'Payment'){
            if($detailPengiriman['tgl_pengiriman'] <= $currentDate){

            }else{
                $pesananBaru += 1;
            }
        }elseif($temp['status'] == 'Confirm'){
            $konfirmasiPembayaran += 1; 
        }
    }
?>