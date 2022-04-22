<section class="section-navbar text-center pt-3 mb-5">
    <div class="container-md mx-auto position-relative">
        <img src="Asset/img/Logo-index-730_190x.png" alt=""></img>
        <div class="navbar-feature">
            <ul class="mb-0 d-flex justify-content-end">
                <li>
                    <a href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </li>
                <!-- <li>
                    <?php if(isset($_SESSION['userLoged'])): ?>
                        <a href="cart.php">
                            <i class="fas fa-shopping-bag"></i>
                        </a>
                    <?php endif; ?>
                </li> -->
                <li>
                    <?php if(isset($_SESSION["ownerLoged"]) || isset($_SESSION["adminLoged"]) || isset($_SESSION["userLoged"])): ?>
                        <?php if(isset($_SESSION["userLoged"])): ?>
                            <a href="PHP/logout-session.php" class="user-logout-button">
                                log-out
                            </a>
                        <?php else: ?>
                            <a href="dashboard.html" class="dashboard-button">
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
            </ul>
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
                <a href="">
                    MY ORDER
                </a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</section>