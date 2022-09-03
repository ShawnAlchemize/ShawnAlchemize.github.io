<header class="l-header">
    <nav class="nav bd-grid">
        <div>
            <a href="index.php" title="Logo" class="nav__logo" >AGDA</a>
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-menu'></i>
        </div>

        <div class="nav__menu" id="nav-menu">
            <div class="nav__close" id="nav-close">
                <i class='bx bx-x'></i>
            </div>

            <ul class="nav__list">
                <li class="nav__item"><a href="index.php" title="Home Navigation" class="nav__link active">Home</a></li>
                <li class="nav__item"><a href="about_us.php" title="About Navigation" class="nav__link">About Us</a></li>
                <li class="nav__item"><a href="catalogue.php" title="Shop Navigation" class="nav__link">Shop</a></li>


                <?php //if when user successfully logs in, will change nav links
                if (isset($_SESSION['userid'])) {
                    echo "<li class='nav__item'><a href='cart.php' title='Cart Navigation' class='nav__link'>Cart</a></li>";
                    echo "<li class='nav__item'><a href='purchaseconfirmed.php' title='Subscriptions' class='nav__link'>Subscriptions</a></li>";
                    echo "<li class='nav__item'><a href='account.php' title='Profile' class='nav__link'>Profile</a></li>";
                    echo "<li class='nav__item'><a href='logout.php' title='Logout' class='nav__link'>Logout</a></li>";
                } else {
                    echo "<li class='nav__item'><a href='login.php' class='nav__link'>Login/Register</a></li>";
                }
                ?>



            </ul>
        </div>
    </nav>
</header>