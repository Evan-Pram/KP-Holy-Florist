<?php
  session_start();
  require 'PHP/load-home.php';

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
  <link rel="shortcut icon" href="#" />
  <script src="https://kit.fontawesome.com/54c91e5a63.js" crossorigin="anonymous"></script>
  <title>Home | Holy Florist</title>
</head>

<body>
  <!-- Navbar -->
  <?php include 'navbar.php' ?>
  <!-- Body -->
  <section class="section-1-home">
    <div class="container-md mx-auto">
      <h2 class="pb-5 text-center">
        New
      </h2>
      <div class="row justify-content-center">
        <div class="col-md-10 ">
          <div class="section-home-main">
            <div class="row justify-content-center gx-4 gy-2">
              <?php 
                for ($i=0; $i < count($listBarang); $i++): { 
                  # code...
                }
              ?>
              <div class="col-md-3">
                <div class="post-container position-relative">
                  <a href="page-detail.php?id=<?= $listBarang[$i]['id_Barang'] ?>" class="">
                    <img src="Asset/img/barang/<?= $listBarang[$i]['gambar'] ?>" class="item-image-home"></img>
                    <p class="item-name pt-3 block">
                      <?php echo $listBarang[$i]['nama'] ?>
                    </p>
                    <?php if($listBarang[$i]['jenis'] == "Papan Bunga"): ?>
                    <p class="item-price mb-0 mt-2 block">
                      Model : <?php echo $listBarang[$i]['model'] ?>
                    </p>
                    <?php endif; ?>
                    <p class="item-price pb-3 block">
                      Rp. <?= number_format($listBarang[$i]["harga"]) ?>
                    </p>
                  </a>
                </div>
              </div>
              <?php
                endfor;
              ?>
            </div>
            <div class="page-number">
              <ul>
                <li>
                  <a href="#" class="active-page">
                    1
                  </a>
                </li>
                <li>
                  <a href="#" class="">
                    2
                  </a>
                </li>
                <li>
                  <a href="#" class="">
                    3
                  </a>
                </li>
                <li>
                  <a href="#" class="">
                    ...
                  </a>
                </li>
                <li>
                  <a href="#" class="">
                    12
                  </a>
                </li>
                <li>
                  <a href="#" class="">
                    >
                  </a>
                </li>
              </ul>
            </div>
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
  <script src="Asset/js/home.js"></script>
</body>

</html>