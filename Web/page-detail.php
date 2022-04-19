<?php
    session_start();
    require 'PHP/detail-product.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="Asset/css/style.css" />
    <script src="https://kit.fontawesome.com/54c91e5a63.js" crossorigin="anonymous"></script>
    <title><?= $barang['nama']." | "."Holy Florist" ?></title>
</head>

<body>
    <!-- Navbar -->
    <?php include 'navbar.php' ?>
    <!-- /Navbar -->

    <!-- Body -->
    <section class="section-1-page-detail mb-5 pt-5">
        <div class="container-page-detail mx-auto">
            <form  method="post" action="PHP/add-cart.php?id=<?=$idbarang?>" id="form-pesan-barang">
                <div class="row gx-5">
                    <div class="col-md-7">
                        <img src="Asset/img/barang/<?= $barang['gambar'] ?>" alt="" class="w-100">
                    </div>
                    <div class="col-md-5">
                        <h2 class="item-name-title">
                            <?= $barang['nama'] ?>
                        </h2>
                        <h3 class="item-price">
                            Rp. <?= number_format($barang['harga']) ?>
                        </h3>
                        <div class="accordion" id="accordionExample">
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <!--PICKUP /--> DELIVERY DETAIL <!-- bisa berubah sesuai jenis --->
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h5 class="accordion-title-detail">
                                            Delivery Option
                                        </h5>
                                        <!-- <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1" checked>
                                            <div class="radio-button-content">
                                                <p>
                                                    Delivery
                                                </p>
                                                <i class="fas fa-truck"></i>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault2">
                                            <div class="radio-button-content">
                                                <p>
                                                    Pickup
                                                </p>
                                                <i class="fas fa-store-alt"></i>
                                            </div>
                                        </div> -->
                                        <p class="delivery-detail-text">
                                            Surabaya surrounding area only
                                        </p>
                                        <h5 class="accordion-title-detail">
                                            Delivery Date:
                                        </h5>
                                        <div class="row">
                                            <div class="col">
                                                <input type="date" id="tanggal-pengiriman" class="form-control" name="tanggal" min="" required>
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
                                        <label for="">
                                            *Note Muncul Disini
                                        </label>
                                        <h5 class="accordion-title-detail mt-2">
                                            Sender Name
                                        </h5>
                                        <input type="text" class="form-control w-100" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="sender name" name="senderName" required>
                                        <h5 class="accordion-title-detail mt-2">
                                            Sender Phone
                                        </h5>
                                        <input type="number" class="form-control w-100 mb-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="sender number" name="senderNumber" required>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Message on board to be printed
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h5 class="accordion-title-detail mt-2">
                                            message
                                        </h5>
                                        <textarea class="form-control mb-2" id="exampleFormControlTextarea1" rows="3" name="printedMessage" required></textarea>
                                        <h5 class="accordion-title-detail mt-2">
                                            From
                                        </h5>
                                        <input type="text" class="form-control w-100 mb-5" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="printedSender" required>
                                        <!-- <h5 class="accordion-title-detail mt-2">
                                            Sender Phone
                                        </h5>
                                        <input type="email" class="form-control w-100 mb-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> -->
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="w-100 button-accordion-confirmation">
                                Add To Cart
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="section-2-related-item mt-5 pt-5">
        <div class="container-md">
            <h4 class="section-2-title">
                YOU MAY ALSO LIKE
            </h4>
            <div class="row">
                <div class="col-md-3">
                    <div class="container-related-item">
                        <a href="#">
                            <img src="Asset/img/related-item-1.jpg" alt="" class="w-100">
                            <h2 class="item-name-title">
                                VAPORESSO GEN-S
                            </h2>
                            <h3 class="item-price">
                                Rp 390.000
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="container-related-item">
                        <a href="#">
                            <img src="Asset/img/related-item-1.jpg" alt="" class="w-100">
                            <h2 class="item-name-title">
                                VAPORESSO GEN-S
                            </h2>
                            <h3 class="item-price">
                                Rp 390.000
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="container-related-item">
                        <a href="#">
                            <img src="Asset/img/related-item-1.jpg" alt="" class="w-100">
                            <h2 class="item-name-title">
                                VAPORESSO GEN-S
                            </h2>
                            <h3 class="item-price">
                                Rp 390.000
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="container-related-item">
                        <a href="#">
                            <img src="Asset/img/related-item-1.jpg" alt="" class="w-100">
                            <h2 class="item-name-title">
                                VAPORESSO GEN-S
                            </h2>
                            <h3 class="item-price">
                                Rp 390.000
                            </h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="Asset/js/jquery-3.6.0.js"></script>
    <!-- script untuk form -->
    <script src="Asset/js/page-detail-form.js"></script>
</body>

</html>