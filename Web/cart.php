<?php
    session_start();
    require "PHP/load-cart.php";
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
    <title>Document</title>
</head>

<body>
    <div>
        <!-- navbar start -->
        <?php include 'navbar.php' ?>
        <!-- navbar end -->
        <section class="section-1-cart">
            <div class="container-md mx-auto">
                <table class="w-100 table=cart">
                    <tr>
                        <th class="image-container-cart">
                        </th>
                        <th class="text-area item-container-cart">
                            Nama Barang
                        </th>
                        <th class="text-area price-container-cart">
                            Harga
                        </th>
                    </tr>
                    <?php $totalHarga=0;$i=0;foreach ($listCart as $cart):?>
                    <tr>
                        <td class="text-center">
                            <img src="Asset/img/barang/<?= $barang[$i]['gambar'] ?>" class="item-image-home"></img>
                        </td>
                        <td>
                            <?= $barang[$i]['nama'] ?>
                        </td>
                        <td>
                            <label for="">Rp</label>
                            <p>
                                <?= number_format($barang[$i]['harga']) ?>
                            </p>
                        </td>
                    </tr>
                    <?php $totalHarga+=$barang[$i]['harga'];$i++;endforeach; ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <label for="">Rp</label>
                            <p>
                                <?= number_format($totalHarga) ?>
                            </p>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td class="text-center">
                            <img src="Asset/img/img_1-1.jpg" class="item-image-home"></img>
                        </td>
                        <td>
                            Bunga Cavendish
                        </td>
                        <td>
                            <label for="">Rp</label>
                            <p>
                                250.000
                            </p>
                        </td>
                    </tr> -->
                </table>
                <div class="text-right button-area">
                    <a href="#" class="succes-button">
                        Beli
                    </a>
                    <a href="#" class="cancel-button">
                        Batal
                    </a>
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
</body>

</html>