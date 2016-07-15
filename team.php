<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<meta name="theme-color" content="#2196F3" />

<title>Our Team - Give Back</title>

<?php

include 'user_obj.php';
include 'workshop_obj.php';

include 'dbconnect.php';

if ($db->connect_errno) {
    $connection_error = "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}

include('session.php');
//
//$sql = "SELECT user_id FROM users WHERE user_id = $login_session";
//$result = mysqli_query($db,$sql);

include 'pull_single_user.php';

include 'includes.php';

?>

<body>

<header>
    <?php
    //error_reporting(E_ALL);
    //ini_set('display_errors', 'On');
    //ini_set('html_errors', 'On');
    include 'header.php'; ?>
</header>

<main>
    <div class="section container">
        <div class="row">
            <div class="col s12 l4 offset-l2">
                <div class="card">
                    <div class="card-image">
                        <img src="images/<?php echo pullUser(1)->getProfilePicture(); ?>">
                    </div>
                    <div class="card-content">
                        <span class="card-title"><?php echo pullUser(1)->getFullName(); ?>, Founder</span>
                        <p><?php echo pullUser(1)->getDescription(); ?></p>
                    </div>
                    <div class="card-action">
                        <a href="<?php echo pullUser(1)->getLinkedIn(); ?>" target="_blank">View LinkedIn</a>
                    </div>
                </div>
            </div>
            <div class="col s12 l4">
                <div class="card">
                    <div class="card-image">
                        <img src="images/<?php echo pullUser(2)->getProfilePicture(); ?>">

                    </div>
                    <div class="card-content">
                        <span class="card-title"><?php echo pullUser(2)->getFullName(); ?>, Founder</span>
                        <p><?php echo pullUser(2)->getDescription(); ?></p>
                    </div>
                    <div class="card-action">
                        <a href="<?php echo pullUser(2)->getLinkedIn(); ?>" target="_blank">View LinkedIn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php include 'footer.php'; ?>

<?php include 'bottom-script.php'; ?>

</body>
</html>