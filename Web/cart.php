<?php
    session_start();
    require "PHP/load-cart.php";
    require "PHP/load-pembayaran.php";
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
        <section class="section-1-cart">
            <div class="container-md mx-auto">
                <table class="w-100 table=cart">
                    <tr class="table-head">
                        <th class="image-container-cart">
                            Gambar
                        </th>
                        <th class="text-area item-container-cart">
                            Barang
                        </th>
                        <th class="text-area printed-msg-container">
                            Pesan
                        </th>
                        <th class="text-area printed-sender-container">
                            Dari
                        </th>
                        <th class="text-area price-container-cart">
                            Harga
                        </th>
                        <th class="action-button-container">
                            Aksi
                        </th>
                    </tr>
                    <?php if($noCart): ?>
                    <tr>
                        <td colspan='6' class="text-center no-cart">
                            Tidak ada barang dalam Keranjang
                        </td>
                    </tr>
                    <?php else: ?>
                    <?php $totalHarga=0;$i=0;foreach ($listCart as $cart):?>
                    <tr>
                        <td class="text-center">
                            <img src="Asset/img/barang/<?= $barang[$i]['gambar'] ?>" class="item-image-home"></img>
                        </td>
                        <td>
                            <?= $barang[$i]['nama'] ?>
                            <?php if($barang[$i]['jenis'] == 'Papan Bunga'): ?>
                            <br>model : <?= $barang[$i]['model'] ?>
                            <?php endif; ?>
                        </td>
                        <td>
                            <p style="white-space:pre-line">
                                <?= $cart['msg'] ?>
                            </p>
                        </td>
                        <td>
                            <?= $cart['msg_from'] ?>
                        </td>
                        <td>
                            <label for="">Rp</label>
                            <p>
                                <?= number_format($barang[$i]['harga']) ?>
                            </p>
                        </td>
                        <td>
                            <div class="rem">
                                <button class="btn-update" data-bs-toggle="modal" data-bs-target="#modalDetailCart"
                                    onclick="fillModalDetailCart('<?=$orderID?>', '<?=$cart['id']?>')">update</button>
                                <a href="PHP/update-cart.php?order=<?=$orderID?>&id=<?=$cart['id']?>&hapus"
                                    onclick="return confirm('Apakah anda yakin menghapus item dari keranjang')">
                                    <button class="btn-hapus">hapus</button>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php $totalHarga+=$barang[$i]['harga'];$i++;endforeach; ?>
                    <tr>
                        <td colspan='4' class='total-harga'>
                            <label for="">Total Harga</label>
                        </td>
                        <td colspan='2' class="nominal-total-harga">
                            <label for="">Rp</label>
                            <p>
                                <?= number_format($totalHarga) ?>
                            </p>
                        </td>
                    </tr>
                    <?php endif; ?>
                </table>
                <div class="text-right button-area">
                    <?php if($noCart): ?>
                    <a href="index.php" class="succes-button">
                        Kembali Belanja
                    </a>
                    <?php else: ?>
                    <button type="button" class="btn succes-button" data-bs-toggle="modal"
                        data-bs-target="#modalDeliveryDetail" onclick="resetInputFormCheckout()">
                        check-out
                    </button>
                    <a href="#" class="cancel-button">
                        Batal
                    </a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- modal delivey detail -->
            <div class="modal fade" id="modalDeliveryDetail" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form id="form-delivery-detail" action="PHP/check-out-cart.php?id_order=<?=$cart['id_order']?>" method="POST">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delivery Detail</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5 class="accordion-title-detail">
                                    Delivery Date:
                                </h5>
                                <div class="row">
                                    <div class="col">
                                        <input type="date" id="tanggal-pengiriman" class="form-control" name="tanggal"
                                            min="" required>
                                    </div>
                                    <div class="col">
                                        <select class="form-select " aria-label="Default select example" name="jam">
                                            <option hidden selected>Pilih Jam Disiini</option>
                                            <option value="1pm - 22pm">1pm - 22 pm</option>
                                            <option value="1pm - 22pm">1pm - 22 pm</option>
                                            <option value="1pm - 22pm">1pm - 22 pm</option>
                                        </select>
                                    </div>
                                </div>
                                <label for="" class="mb-1">
                                    *Note Muncul Disini
                                </label>
                                <h5 class="accordion-title-detail mt-2">
                                    Nama Pengirim
                                </h5>
                                <input type="text" class="form-control w-100 mb-3" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Nama Pengirim" name="namaPengirim"
                                    required>
                                <h5 class="accordion-title-detail mt-2">
                                    Nomor HP Pengirim
                                </h5>
                                <input type="number" class="form-control w-100 mb-3" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Telp. Pengirim" name="telpPengirim"
                                    required>
                                <h5 class="accordion-title-detail mt-2 feedback-pembayaran">
                                    Metode Pembayaran
                                </h5>
                                <select class="form-select metode-pembayaran" aria-label="Default select example" name="metodePembayaran">
                                    <option hidden selected value="">Metode Pembayaran</option>
                                    <?php foreach($listPembayaran as $metode): ?>
                                        <option value="<?=$metode['id']?>"><?= $metode['metode'] ?> | <?= $metode['noRek'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <h5 class="accordion-title-detail mt-2">
                                    Alamat Tujuan
                                </h5>
                                <input type="text" class="form-control w-100 mb-3" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Alamat Tujuan" name="alamat" required>
                                <h5 class="accordion-title-detail mt-2">
                                    Nama Penerima
                                </h5>
                                <input type="text" class="form-control w-100 mb-4" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Nama Penerima" name="namaPenerima"
                                    required>
                                <input type="hidden" name="totalHarga" value="<?= $totalHarga ?>">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Done</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- modal edit detail cart -->
            <div class="modal fade" id="modalDetailCart" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="" method='POST' id="form-edit-detail-cart">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Barang Dalam Keranjang</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5 class="accordion-title-detail mt-2">
                                    message
                                </h5>
                                <textarea class="form-control mb-2 msg" id="exampleFormControlTextarea1" rows="3"
                                    name="printedMessage" required></textarea>
                                <h5 class="accordion-title-detail mt-2">
                                    From
                                </h5>
                                <input type="text" class="form-control w-100 mb-5 msg-from" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email" name="printedSender"
                                    required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

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
    <!-- script untuk form di modal -->
    <script src="Asset/js/form-delivery-detail.js"></script>
    <!-- script untuk cart.php -->
    <script src="Asset/js/cart.js"></script>
</body>

</html>