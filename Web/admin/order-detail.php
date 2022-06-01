<?php 
	date_default_timezone_set("Asia/Bangkok");
    require "assets/PHP/load-detail-order.php";
    $currentDate = date('Y-m-d');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kelola Pesanan - Tokopekita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <script src="https://kit.fontawesome.com/54c91e5a63.js" crossorigin="anonymous"></script>

    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">

    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li><a href="index.php"><span>Home</span></a></li>
                            <li><a href="../"><span>Kembali ke Toko</span></a></li>
                            <li class="active">
                                <a href="manageorder.php"><i class="ti-dashboard"></i><span>Kelola Pesanan</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout"></i><span>Kelola
                                        Toko
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="kategori.php">Kategori</a></li>
                                    <li><a href="produk.php">Produk</a></li>
                                    <li><a href="pembayaran.php">Metode Pembayaran</a></li>
                                </ul>
                            </li>
                            <li><a href="customer.php"><span>Kelola Pelanggan</span></a></li>
                            <li><a href="user.php"><span>Kelola Staff</span></a></li>
                            <li>
                                <a href="../logout.php"><span>Logout</span></a>

                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li>
                                <h3>
                                    <div class="date">
                                        <script type='text/javascript'>
                                            <!--
                                            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                                                'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
                                            ];
                                            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat',
                                                'Sabtu'
                                            ];
                                            var date = new Date();
                                            var day = date.getDate();
                                            var month = date.getMonth();
                                            var thisDay = date.getDay(),
                                                thisDay = myDays[thisDay];
                                            var yy = date.getYear();
                                            var year = (yy < 1000) ? yy + 1900 : yy;
                                            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                                            //
                                            -->
                                        </script></b>
                                    </div>
                                </h3>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->


            <!-- page title area end -->
            <div class="main-content-inner">

                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h2>Detail Tranksaksi</h2>
                                </div>
                                <div class="prelative">
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <!-- left column -->
                                                <div class="col-md-12">
                                                    <!-- general form elements -->
                                                    <div class="card card-success">
                                                        <div class="card-header">
                                                            <h3 class="card-title"><?=$orders['id_order']?></h3>
                                                            <?php if($detailPengiriman['tgl_pengiriman'] <= $currentDate): ?>
                                                            <a href="#" class="content-table mb-3">
                                                                <i class="fas fa-circle bayaren"></i>
                                                                Kadaluarsa
                                                            </a>
                                                            <?php elseif($orders['status'] == "Payment"): ?>
                                                            <a href="#" class="content-table mb-3">
                                                                <i class="fas fa-circle bayaren"></i>
                                                                Menunggu Bukti Transfer
                                                            </a>
                                                            <?php endif; ?>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <!-- form start -->

                                                        <div class="row invoice-info p-3">
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
                                                                </b> <?=$metodePembayaran['metode']?> || No. Rek
                                                                (<?=$metodePembayaran['noRek']?>)<br>
                                                                <b>Payment Due:</b>
                                                                <?=$detailPengiriman['tgl_pengiriman']?>
                                                            </div>
                                                            <!-- /.col -->
                                                        </div>
                                                        <div class="row p-3">
                                                            <div class="col-12 table-responsive">
                                                                <table class="table table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Barang</th>
                                                                            <th>Pesan Tercetak</th>
                                                                            <th>Pengirim Tercetak</th>
                                                                            <th>Harga</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($listDetailOrder as $key => $detailOrder):?>
                                                                        <tr>
                                                                            <td>
                                                                                <?=$listProduk[$key]['nama']?>
                                                                                <?php if($listProduk[$key]['jenis'] == 'Papan Bunga'): ?>
                                                                                <br>Model :
                                                                                <?=$listProduk[$key]['model']?>
                                                                                <?php endif; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?=$detailOrder['msg']?>
                                                                            </td>
                                                                            <td>
                                                                                <?=$detailOrder['msg_from']?>
                                                                            </td>
                                                                            <td>
                                                                                Rp.
                                                                                <?=number_format($listProduk[$key]['harga'])?>
                                                                            </td>
                                                                        </tr>
                                                                        <?php endforeach; ?>
                                                                        <tr>
                                                                            <td colspan='3'>
                                                                                Total Harga
                                                                            </td>
                                                                            <td>
                                                                                Rp.
                                                                                <?=number_format($orders['total_harga'])?>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- /.col -->
                                                        </div>
                                                        <div class="card-body row">
                                                            <div class="col-md-6">
                                                                <div class="container row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="exampleInputEmail1">Status</label>
                                                                        <input type="text" class="form-control"
                                                                            id="exampleInputEmail1" name="Status" value="<?php 
                                                                                    if($orders['status'] == "Payment"){
                                                                                        echo "Menunggu Pembayaran";
                                                                                    }elseif($orders['status'] == "Confirm"){
                                                                                        echo "Menunggu Konfirmasi";
                                                                                    }elseif($orders['status'] == "Proccess"){
                                                                                        echo "Sedang Dalam Proses";
                                                                                    }
                                                                                ?>" disabled>
                                                                    </div>
                                                                    <div class="form-group col-md-2">
                                                                        <label for="konfirm">Aksi</label>
                                                                        <?php if($orders['status'] == 'Payment'): ?>
                                                                        <button id="konfirm" type="button"
                                                                            class="btn btn-primary" disabled>Konfirmasi
                                                                            Pembayaran</button>
                                                                        <?php elseif($orders['status'] == 'Confirm'): ?>
                                                                        <form action="assets/PHP/konfirm-pembayaran.php?order=<?=$orders['id_order']?>" method="post">
                                                                        <button type="submit" name="konfirm-pembayaran"
                                                                            onclick="return confirm('Konfirmasi Pembayaran??')"
                                                                            class="btn btn-primary">Konfirmasi
                                                                            Pembayaran</button>
                                                                        </form>
                                                                        <?php elseif($orders['status'] == 'Proccess'): ?>
                                                                        <button type="button"
                                                                            class="btn btn-primary">Kirim Pesanan</button>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                </div>
                                                                <?php if($orders['status'] == 'Proccess'): ?>
                                                                <!-- <div class="container row">
                                                                    <div class="form-group col-md-12">
                                                                        <label for="exampleInputEmail1">Nomor
                                                                            Resi</label>
                                                                        <input type="text" class="form-control"
                                                                            id="exampleInputEmail1"
                                                                            placeholder="Masukan Data" name="noResi">
                                                                    </div>
                                                                </div> -->
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <?php if($orders['bukti_transfer'] != null): ?>
                                                                <label>Gambar Bukti Transfer</label>
                                                                <img src="../Asset/img/bukti-transfer/<?=$orders['bukti_transfer']?>"
                                                                    alt="" class="w-100">
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="form-check">
                                                            </div>
                                                        </div>
                                                        <!-- /.card-body -->

                                                        <!-- <div class="card-footer">
                                                                <button type="submit" class="btn btn-primary"
                                                                    name="updateDetailTransaksi">Edit</button>
                                                            </div> -->
                                                    </div>
                                                    <!-- /.card -->

                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </div><!-- /.container-fluid -->
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- row area start-->
        </div>
    </div>
    <!-- main content area end -->
    <!-- footer area start-->
    <footer>
        <div class="footer-area">
            <p>By Richard's Lab</p>
        </div>
    </footer>
    <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <script>
        $(document).ready(function () {
            $('#dataTable3').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            });
        });
    </script>

    <!-- jquery latest version -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>

</body>

</html>