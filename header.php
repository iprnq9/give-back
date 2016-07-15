<div class="navbar-fixed blue">
    <nav class="deep-orange">
        <div class="nav-wrapper deep-orange">
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <a href="index.php" class="brand-logo"><i class="material-icons left">loop</i>Give Back</a>
            </ul>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="volunteer.php"><i class="material-icons circle left">account_circle</i>My Profile</a></li>
                <li><a href="institution_profile.php"><i class="material-icons circle left">location_city</i>Institution Profile</a></li>
                <li><a href="search.php"><i class="material-icons circle left">search</i>Search</a></li>
                <li class="hide">
                    <?php if(isset($_SESSION['username'])): ?>
                        <a href="logout.php">
                            <i class="material-icons left">close</i>
                            Sign Out
                        </a>
                    <?php else: ?>
                        <a href="login.php">
                            <i class="material-icons left">exit_to_app</i>
                            Sign In
                        </a>
                    <?php endif; ?>

                </li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="index.php"><i class="material-icons circle left">home</i>Home</a></li>
                <li><a href="volunteer.php">My Profile</a></li>
                <li><a href="institution_profile.php">Institution Profile</a></li>
                <li><a href="search.php">Search</a></li>
                <li>
                    <?php if(isset($_SESSION['username'])): ?>
                        <a href="logout.php">
                            Sign Out
                        </a>
                    <?php else: ?>
                        <a href="login.php">
                            Sign In
                        </a>
                    <?php endif; ?>

                </li>
            </ul>
        </div>
    </nav>
</div>