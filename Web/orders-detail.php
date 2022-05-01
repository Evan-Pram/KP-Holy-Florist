<?php
    session_start();

    if(isset($_SESSION['userLoged'])){
        require "PHP/load-detail-order.php";
    }else{
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Asset/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/54c91e5a63.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Keranjang Belanja | Holy Florist</title>
</head>

<body>
    <div>
        <!-- navbar start -->
        <?php include 'navbar.php' ?>
        <!-- navbar end -->

        <!-- section content -->
        <section class="section-1-order-detail">
            <div class="prelative">
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-12">
                                <!-- general form elements -->
                                <?php if(isset($_GET['order'])): ?>
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Data Tranksaksi</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="row invoice-info p-3">
                                            <?php if($detailPengiriman['tgl_pengiriman'] <= $currentDate):?>
                                            <a href="#" class="content-table mb-3">
                                                <i class="fas fa-circle kadaluarsa"></i>
                                                PO Kadaluarsa
                                            </a>
                                            <?php elseif($orders['status'] == 'Payment'): ?>
                                            <a href="#" class="content-table mb-3">
                                                <i class="fas fa-circle bayaren"></i>
                                                Menunggu Bukti Transfer
                                            </a>
                                            <?php endif; ?>
                                            <div class="col-sm-4 invoice-col">
                                                From
                                                <address>
                                                    <strong>Admin, Holy Florist.</strong><br>
                                                    Jl. Kayoon, Embong Kaliasin,<br>
                                                    Surabaya Pusat, Kota SBY, Jawa Timur 60271,<br>
                                                    Indonesia<br>
                                                    Phone: +62 851-0021-4853<br>
                                                    Email: example@email.com
                                                </address>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-4 invoice-col">
                                                To
                                                <address>
                                                    <strong><?=$detailPengiriman['nama_penerima']?>.</strong><br>
                                                    <?=$detailPengiriman['alamat_tujuan']?>
                                                </address>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-4 invoice-col">
                                                <b>Order ID:</b> <?=$idorder?><br>
                                                <br>
                                                <b>Metode Pembayaran : <br>
                                                </b> <?=$metodePembayaranOrders['metode']?> || No. Rek (<?=$metodePembayaranOrders['noRek']?>)<br>
                                                <b>Payment Due:</b> <?=$detailPengiriman['tgl_pengiriman']?>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <div class="row p-3">
                                            <div class="col-12 table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th class="item-container">
                                                                Barang
                                                            </th>
                                                            <th class="printed-msg-container">
                                                                Pesan Tercetak
                                                            </th>
                                                            <th class="printed-sender-container">
                                                                Pengirim Tercetak
                                                            </th>
                                                            <th class="harga-container">
                                                                Harga
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i=0;foreach ($listDetailOrder as $DetailOrder):?>
                                                        <tr>
                                                            <td>
                                                                <?=$produk[$i]['nama']?>
                                                                <?php if($produk[$i]['jenis'] == 'Papan Bunga'): ?>
                                                                <br>Model : <?=$produk[$i]['model']?>
                                                                <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <p style="white-space:pre-line">
                                                                    <?= $DetailOrder['msg'] ?>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <?=$DetailOrder['msg_from']?>
                                                            </td>
                                                            <td>
                                                                Rp. <?=number_format($produk[$i]['harga'])?>
                                                            </td>
                                                        </tr>
                                                        <?php $totalHarga+=$produk[$i]['harga'];$i++;endforeach; ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan='3'>
                                                                Total Harga 
                                                            </td>
                                                            <td>
                                                                Rp. <?=number_format($totalHarga)?>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <div class="card-body row">
                                            <div class="form-group col-md-4">
                                                <label for="exampleInputFile">Gambar Barang</label>
                                                <img src="dist/img/img-src-barang/" alt="" class="image-box mb-3">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="exampleInputFile" name="buktiTransfer">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <?php if($orders['status'] != 'Payment'): ?>
                                                    <label>Gambar Bukti Transfer</label>
                                                    <img src=""
                                                        alt="" class="w-100">
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-check">
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <!-- Buttonnya nanti hanya diperuntukan admin -->
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary"
                                                name="addBuktiTransfer">Edit</button>
                                        </div>
                                    </form>
                                </div>
                                <?php else: ?>
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Tranksaksi tidak ditemukan</h3>
                                    </div>
                                    <!-- /.card-header -->
                                </div>
                                <?php endif; ?>
                                <!-- /.card -->

                            </div>
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
            </div>
        </section>
        <!-- section content end -->

        <!-- footer start -->
        <section class="footer-section">
            <ul class="footer-menu">
                <li>
                    <a href="#">
                        Guide
                    </a>
                </li>
                <li>
                    <a href="#">
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="#">
                        Term & Condition
                    </a>
                </li>
            </ul>
            <ul class="footer-socmed">
                <li>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
            <p class="footer-payment-title">
                We Accept
            </p>
            <ul class="footer-payment-choice">
                <li>
                    <a href="#">
                        <i class="fab fa-cc-visa"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-cc-visa"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-cc-visa"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-cc-visa"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-cc-visa"></i>
                    </a>
                </li>
            </ul>
            <p class="copyright-footer">
                © Copyright Meduntenz Corp
            </p>
        </section>
        <!-- footer end -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="Asset/js/jquery-3.6.0.js"></script>
    <script src="Asset/js/home.js"></script>
</body>

</html>