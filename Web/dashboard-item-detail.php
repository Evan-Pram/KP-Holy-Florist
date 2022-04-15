<?php
    require 'PHP/dashboard-item-detail.php';
    require 'PHP/dashboard-session.php';

    // button edit barang diklik
    if (isset($_POST['editBarang'])) {
        $insert = editBarang($_POST);
        header("location:".$_SERVER['REQUEST_URI']);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="Asset/css/adminlte.css">
    <link rel="stylesheet" href="Asset/css/style-admin.css">
    <script src="https://kit.fontawesome.com/54c91e5a63.js" crossorigin="anonymous"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed edit-item-detail">
    <div class="wrapper">


        <!-- Navbar -->
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="Asset//img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Super Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="../Web/dashboard.html" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="../Web/dashboard-list-item.php" class="nav-link active">
                                <i class="nav-icon fas fa-clipboard-list"></i>
                                <p>
                                    List Item
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../Web/dashboard-add-item.php" class="nav-link">
                                <i class="nav-icon fas fa-plus-square"></i>
                                <p>Add Item</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../Web/dashboard-transaction-list.html" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice-dollar"></i>
                                <p>Transcaction List</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Data Barang</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="" method="post" enctype="multipart/form-data" id="formBarang">
                                    <div class="card-body row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Nama Barang</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Data" name="name" value="<?= $barang['nama'] ?>">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Jenis</label>
                                            <select class="form-control" id="jenisBarang" name="jenis">
                                                <?php if($barang['jenis'] == "Papan Bunga"): ?>
                                                    <option value="Papan Bunga" selected>Papan Bunga</option>
                                                    <option value="Buket">Buket</option>
                                                <?php elseif($barang['jenis'] == "Buket"): ?>
                                                    <option value="Papan Bunga">Papan Bunga</option>
                                                    <option value="Buket" selected>Buket</option>
                                                <?php else: ?>
                                                    <option value="Papan Bunga">Papan Bunga</option>
                                                    <option value="Buket">Buket</option>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="exampleInputEmail1">Ukuran Barang (Cm)</label>
                                                </div>
                                                <div class="row">
                                                    <?php if($barang['jenis'] == "Papan Bunga"): ?>
                                                        <div class="col-md-6">
                                                        <input type="text" class="form-control numberOnly" id="panjangBarang" placeholder="Panjang" name="panjang" value="<?= $panjang ?>">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control numberOnly" id="lebarBarang" placeholder="Lebar" name="lebar" value="<?= $lebar ?>">
                                                        </div>    
                                                    <?php else: ?>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control numberOnly" id="panjangBarang" placeholder="Panjang" name="panjang" value="lol">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control numberOnly" id="lebarBarang" placeholder="Lebar" name="lebar">
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputFile">Gambar Barang</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="gambarBarang" name="gambarBarang">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                            <div class="feedback" style="display:none;color:#dc3545">
                                                
                                            </div>
                                            <img src="Asset/img/barang/<?= $barang["gambar"] ?>" alt="" class="image-box w-100 mt-3">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Harga Barang</label>
                                            <input type="text" class="form-control numberOnly" id="exampleInputEmail1" placeholder="Masukan Data" name="harga" value="<?= $barang['harga'] ?>">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Model</label>
                                            <select class="form-control" id="modelBarang" name="model">
                                                <?php if($barang['model'] == "Printing/Cetak"): ?>
                                                    <option value="Printing/Cetak" selected>Printing/Cetak</option>
                                                    <option value="Foam(Gabus)">Foam(Gabus)</option>
                                                <?php elseif($barang['model'] == "Foam(Gabus)"): ?>
                                                    <option value="Printing/Cetak">Printing/Cetak</option>
                                                    <option value="Foam(Gabus)" selected>Foam(Gabus)</option>
                                                <?php else: ?>
                                                    <option value="Printing/Cetak">Printing/Cetak</option>
                                                    <option value="Foam(Gabus)">Foam(Gabus)</option>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Deskripsi Barang</label>
                                            <textarea class="form-control" rows="5" placeholder="Enter ..." name="description"></textarea>
                                        </div>
                                        <div class="form-check">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary" name="editBarang">Masukan</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->

                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            Sekali Lagi Ini Footer
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Javascript for Form -->
    <script src="Asset/js/form-edit-item.js"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>