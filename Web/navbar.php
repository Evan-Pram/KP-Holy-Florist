<section class="section-navbar text-center pt-3 mb-5">
    <div class="container-md mx-auto position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6">
                    <img src="Asset/img/Logo-index-730_190x.png" alt=""></img>
                </div>
                <div class="col-md-3">
                    <div class="navbar-feature">
                        <div class="container">
                            <div class="row mb-3">
                                <div class="col-md-12 d-flex justify-content-end">
                                    <?php if(isset($_SESSION["ownerLoged"]) || isset($_SESSION["adminLoged"]) || isset($_SESSION["userLoged"])): ?>
                                    <?php if(isset($_SESSION["userLoged"])): ?>
                                    <a href="PHP/logout-session.php" class="user-logout-button">
                                        log-out
                                    </a>
                                    <?php else: ?>
                                    <a href="admin/" class="dashboard-button">
                                        dashboard
                                    </a>
                                    <a href="PHP/logout-session.php" class="admin-logout-button">
                                        log-out
                                    </a>
                                    <?php endif; ?>
                                    <?php else: ?>
                                    <a href="login.php" class="user-logout-button">
                                        log-in
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-md-10">
                                    <form action="index.php?halaman=" method="get" class="pencarian-home">
                                        <div class="input-group search-box d-none">
                                            <input type="search" class="form-control rounded keyword" placeholder="Search"
                                                aria-label="Search" aria-describedby="search-addon" name="keyword" required />
                                            <button type="submit" class="btn btn-outline-primary">search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- <ul class="mb-0 d-flex justify-content-end">
                            <li>
                                <div class="input-group search-box d-none">
                                    <input type="search" class="form-control rounded" placeholder="Search"
                                        aria-label="Search" aria-describedby="search-addon" />
                                    <button type="button" class="btn btn-outline-primary">search</button>
                                </div>
                            </li>
                            <li>
                                <?php if(isset($_SESSION["ownerLoged"]) || isset($_SESSION["adminLoged"]) || isset($_SESSION["userLoged"])): ?>
                                <?php if(isset($_SESSION["userLoged"])): ?>
                                <a href="PHP/logout-session.php" class="user-logout-button">
                                    log-out
                                </a>
                                <?php else: ?>
                                <a href="admin/" class="dashboard-button">
                                    dashboard
                                </a>
                                <a href="PHP/logout-session.php" class="admin-logout-button">
                                    log-out
                                </a>
                                <?php endif; ?>
                                <?php else: ?>
                                <a href="login.php" class="user-logout-button">
                                    log-in
                                </a>
                                <?php endif; ?>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
        <ul class="navbar-menu">
            <li>
                <a href="../Web/index.php">
                    HOME
                </a>
            </li>
            <li>
                <a href="#">
                    ABOUT US
                </a>
            </li>
            <li>
                <a href="#">
                    CONTACT
                </a>
            </li>
            <?php if(isset($_SESSION['userLoged'])): ?>
            <li>
                <a href="cart.php">
                    MY CART
                </a>
            </li>
            <li>
                <a href="myorder.php">
                    MY ORDER
                </a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</section>