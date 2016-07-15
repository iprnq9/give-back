<footer class="page-footer deep-orange">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">About Give Back</h5>
                <p class="grey-text text-lighten-4">We were inspired by math and science at a young age and believe every child should have the same opportunity.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Quick Links</h5>
                <ul>

                    <li>
                        <?php if(isset($_SESSION['username'])): ?>
                            <a href="logout.php" class="grey-text text-lighten-3">
                                Sign Out
                            </a>
                        <?php else: ?>
                            <a href="login.php" class="grey-text text-lighten-3">
                                Sign In
                            </a>
                        <?php endif; ?>

                    </li>
                    <li><a class="grey-text text-lighten-3" href="#!">Legal Stuff</a></li>
                    <li><a class="grey-text text-lighten-3" href="example_workshops.php">Example Workshops</a></li>
                    <li><a class="grey-text text-lighten-3" href="team.php">Our Team</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2016 Give Back
        </div>
    </div>
</footer>