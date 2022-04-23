<?php
    require 'connection.php';

    if(isset($_GET['hapus'])){
        $idorder = $_GET['order'];
        $idDetailCart = intval($_GET['id']);
        
        $sqlDeleteDetailCart = mysqli_query($conn, "DELETE FROM detail_cart WHERE id_order = '$idorder' AND id = $idDetailCart");
        if($sqlDeleteDetailCart){
            $sqlDetailCart = mysqli_query($conn, "SELECT * FROM detail_cart WHERE id_order = '$idorder'");
            $cekDetialCart = mysqli_num_rows($sqlDetailCart);
            if($cekDetialCart < 1){
                $sqlDeletCart = mysqli_query($conn, "DELETE FROM cart WHERE id_order = '$idorder'");
                if($sqlDeletCart){
                    header('location: ../cart.php');
                }
            }
            header('location: ../cart.php');
        }
    }elseif(isset($_GET['update'])){
        $idorder = $_GET['order'];
        $idDetailCart = intval($_GET['id']);
        $msg = $_POST['printedMessage'];
        $msgFrom = $_POST['printedSender'];

        $sqlUpdateDetailCart = mysqli_query($conn, "UPDATE detail_cart SET msg = '$msg', msg_from = '$msgFrom' WHERE id_order = '$idorder' AND id = $idDetailCart");
        if($sqlUpdateDetailCart){
            header('location: ../cart.php');
        }
    }elseif(isset($_GET['load'])){
        $idorder = $_POST['id_order'];
        $idDetailCart = $_POST['id'];
        
        $sqlDetailCart = mysqli_query($conn, "SELECT * FROM detail_cart WHERE id_order = '$idorder' AND id = $idDetailCart");
        $detailCart = mysqli_fetch_assoc($sqlDetailCart);

        echo json_encode($detailCart);
    }else
?>