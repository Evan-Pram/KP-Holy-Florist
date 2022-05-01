<?php
    session_start();
    require 'PHP/load-orders.php';
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
        <section class="section-1-order">
            <div class="container-md mx-auto">
                <table class="w-100 table=cart">
                    <tr class="table-head">
                        <th class="text-area nomor-urut">
                            no
                        </th>
                        <th class="text-area text-center kode-order-container">
                            Kode Order
                        </th>
                        <th class="text-area text-center tanggal-pengiriman-container">
                            Tanggal Pengiriman
                        </th>
                        <th class="text-area text-center total-harga-container">
                            Total Harga
                        </th>
                        <th class="text-area text-center metode-pembayaran-container">
                            Metode Pembayaran
                        </th>
                        <th class="text-area text-center status-container">
                            Status
                        </th>
                    </tr>
                    <?php $i=0;foreach ($listOrders as $orders):
                            $idorder = $orders['id_order'];
                            $sqlDetailPengiriman = mysqli_query($conn, "SELECT * FROM detail_pengiriman WHERE id_order = '$idorder'");
                            $detailPengiriman = mysqli_fetch_assoc($sqlDetailPengiriman);
                    ?>
                    <tr class="list-order" onclick="window.location.href='orders-detail.php?order=<?=$orders['id_order']?>'">
                        <td>
                            <?=$i+1?>
                        </td>
                        <td class="text-center">
                            <?=$orders['id_order']?>
                        </td>
                        <td class="text-center">
                            <?=$detailPengiriman['tgl_pengiriman']?>
                        </td>
                        <td class="text-center">
                            Rp. <?=number_format($orders['total_harga'])?>
                        </td>
                        <td class="text-center">
                            <?=$metodePembayaran[$i]['metode']?><br>
                            no.Rek : <?=$metodePembayaran[$i]['noRek']?>
                        </td>
                        <td class="text-center">
                            <?php if($orders['status'] == 'Payment'): ?>
                                Menunggu Pembayaran
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php $i++;endforeach;?>
                </table>
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