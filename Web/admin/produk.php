<?php
    require "assets/PHP/load-product.php";
    require "assets/PHP/load-kategori.php";
?>
<doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
	<link rel="icon" 
      type="image/png" 
      href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kelola Produk - Tokopekita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
	
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
	<!-- Start datatable css -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
	
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
							<li>
                                <a href="manageorder.php"><i class="ti-dashboard"></i><span>Kelola Pesanan</span></a>
                            </li>
							<li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout"></i><span>Kelola Toko
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="kategori.php">Kategori</a></li>
                                    <li class="active"><a href="produk.php">Produk</a></li>
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
                            <li><h3><div class="date">
								<script type='text/javascript'>
						<!--
						var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
						var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
						var date = new Date();
						var day = date.getDate();
						var month = date.getMonth();
						var thisDay = date.getDay(),
							thisDay = myDays[thisDay];
						var yy = date.getYear();
						var year = (yy < 1000) ? yy + 1900 : yy;
						document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);		
						//-->
						</script></b></div></h3>

						</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            
            <!-- page title area end -->
            <div class="main-content-inner">
               
                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Daftar Produk</h2>
									<button style="margin-bottom:20px" id="btnModalTambah" data-toggle="modal" data-target="#modalTambahBarang" class="btn btn-info col-md-2" onclick="resetFormTambahBarang()">Tambah Produk</button>
                                </div>
                                    <div class="data-tables datatable-dark">
										 <table id="dataTable3" class="display" style="width:100%"><thead class="thead-dark">
											<tr>
												<th>No.</th>
												<th>Gambar</th>
												<th>Nama Produk</th>
												<th>Kategori</th>
												<th>Model</th>
												<th>Ukuran(cm)</th>
												<th>Harga</th>
												<th>aksi</th>
											</tr></thead>
											<tbody>
                                                <?php $i=1; foreach($listBarang as $barang): ?>
                                                    <tr class="konten-table">
                                                        <td><?= $i ?></td>
                                                        <td width='10%'><img src="../Asset/img/barang/<?= $barang['gambar'] ?>" alt="<?= $barang['nama'] ?>"></td>
                                                        <td><?= $barang['nama'] ?></td>
                                                        <td><?= $barang['jenis'] ?></td>
                                                        <?php if($barang['jenis'] == 'Papan Bunga'): ?>
                                                            <td><?= $barang['model'] ?></td>
                                                            <td><?= $barang['ukuran'] ?></td>
                                                        <?php else: ?>
                                                            <td> ---- </td>
                                                            <td> ---- </td>
                                                        <?php endif; ?>
                                                        <td><?= number_format($barang['harga'],0,',','.') ?></td>
                                                        <?php if($barang['status'] == 0): ?>
                                                            <td width="17%">
                                                                <div class="row justify-content-arround">
                                                                    <div class="col">
                                                                        <a href="assets/PHP/rubah-status-barang.php?id=<?= $barang['id_Barang'] ?>" class="d-flex justify-content-start btn-rubah" >
                                                                            <button type="button" class="btn btn-warning" name="btn-rubah-status">non-aktif</button>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col">
                                                                        <button type="button" class="btn btn-success"  onclick="getDataBarang(<?= $barang['id_Barang'] ?>)" data-toggle="modal" data-target="#modalEditBarang">edit</button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <?php else: ?>
                                                                <td width="17%">
                                                                    <div class="row justify-content-arround">
                                                                        <div class="col">
                                                                            <a href="assets/PHP/rubah-status-barang.php?id=<?= $barang['id_Barang'] ?>" class="d-flex justify-content-start btn-rubah" onclick="return confirm('Apakah Anda Yakin Menonaktifkan Item?')">
                                                                                <button type="button" class="btn btn-primary" name="btn-rubah-status">aktif</button>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col">
                                                                            <button type="button" class="btn btn-success"  onclick="getDataBarang(<?= $barang['id_Barang'] ?>)" data-toggle="modal" data-target="#modalEditBarang">edit</button>
                                                                        </div>
                                                                </div>
                                                            </td>
                                                        <?php endif; ?>
                                                    </tr>
                                                <?php $i++;endforeach; ?>
											</tbody>
										</table>
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
	
	<!-- modal input -->
			<div id="modalTambahBarang" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Tambah Produk</h4>
						</div>
						
						<div class="modal-body">
						<form id="form-tambah-barang" action="" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label>Nama Produk</label>
									<input name="namaproduk" type="text" class="form-control input-tambah-nama" required autofocus>
								</div>
								<div class="form-group">
									<label>Nama Kategori</label>
									<select name="kategori" class="form-control input-tambah-kategori" required>
                                        <option value="hidden" hidden selected>--Pilih Kategori--</option>
                                        <?php foreach($listKategori as $kategori): ?>
                                            <option value="<?= $kategori['nama'] ?>"><?= $kategori['nama'] ?></option>
                                        <?php endforeach; ?>
									</select>
								</div>
                                <div class="slide-modal-tambah">
                                    <div class="form-group">
                                        <label>Model</label>
                                        <input name="model" type="text" class="form-control input-tambah-model" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Ukuran</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input name="panjang" type="number" class="form-control input-tambah-panjang" placeholder="panjang" required>
                                            </div>
                                            <div class="col-md-6">
                                                <input name="lebar" type="number" class="form-control input-tambah-lebar" placeholder="Lebar" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="form-group">
									<label>Harga</label>
									<input name="harga" type="number" class="form-control input-tambah-harga" required>
								</div>
                                <div class="form-group">
									<label class="feedback-tambah-gambar">Gambar</label>
									<input name="uploadgambar" type="file" class="form-control input-tambah-gambar">
								</div>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
								<input name="addproduct" type="submit" id="addProduct" class="btn btn-primary" value="Tambah">
							</div>
						</form>
					</div>
				</div>
			</div>

    <!-- model edit barang -->
    <div id="modalEditBarang" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Edit Produk</h4>
						</div>
						
						<div class="modal-body">
						<form id="form-edit-barang" action="" method="post" enctype="multipart/form-data" >
								<div class="form-group">
									<label>Nama Produk</label>
									<input name="namaproduk" type="text" class="form-control edit-input-nama" required autofocus>
                                    <input type="hidden" name="idBarang" class="edit-input-id">
								</div>
								<div class="form-group">
									<label>Nama Kategori</label>
									<select name="kategori" class="form-control edit-input-kategori">
                                        <option hidden selected>--Pilih Kategori--</option>
                                        <?php foreach($listKategori as $kategori): ?>
                                            <option value="<?= $kategori['nama'] ?>"><?= $kategori['nama'] ?></option>
                                        <?php endforeach; ?>
									</select>
								</div>
								<div class="form-group input-model">
									<label>Model</label>
									<input name="model"  type="text" class="form-control edit-input-model" required>
								</div>
								<div class="form-group input-ukuran">
                                    <label>Ukuran (cm)</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input name="panjang" type="number" class="form-control edit-input-panjang" placeholder="panjang" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input name="lebar" type="number" class="form-control edit-input-lebar" placeholder="Lebar" required>
                                        </div>
                                    </div>
								</div>
                                <div class="form-group input-harga">
									<label>Harga (Rp.)</label>
									<input name="harga"  type="number" class="form-control edit-input-harga" required>
								</div>
								<div class="form-group">
									<label class="feedback-edit-gambar">Gambar</label>
									<input name="uploadgambar" type="file" class="form-control edit-input-gambar">
								</div>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
								<input name="editProduct" type="submit" id="editProduct" class="btn btn-primary" value="Ubah Barang">
							</div>
						</form>
					</div>
				</div>
			</div>
	
	<script>
	$(document).ready(function() {
    $('#dataTable3').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
	} );
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
    <!-- custom produk js -->
    <script src="assets/js/produk-modal-fill.js"></script>
    <script src="assets/js/edit-item-process.js"></script>
    <script src="assets/js/form-add-item.js"></script>
	
</body>
</html>
