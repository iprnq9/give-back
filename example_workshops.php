<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<meta name="theme-color" content="#2196F3" />

<title>Give Back</title>

<?php include 'includes.php'; ?>

<?php

include 'user_obj.php';
include 'workshop_obj.php';

include 'dbconnect.php';

if ($db->connect_errno) {
    $connection_error = "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}

include('session.php');

$sql = "SELECT user_id FROM users WHERE username = $login_session";
$result = mysqli_query($db,$sql);

include 'pull_single_user.php';
include 'pull_single_workshop.php';

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
            <div class="col s12 m9 l8 offset-l2">
                <div id="welcome" class="section scrollspy">
                    <h3 class="header">Example Workshops</h3>
                    <p>
                        Check out the following example workshops for some inspiration of your own! We have prepared a few workshops that would work great in most any community! Give them a try and let us know what you think!
                    </p>
                </div>
                <div id="how-it-works" class="section scrollspy">
                    <?php
                    for($i=1; $i<4; $i++){
                        $workshopObj = pullWorkshop($i);
                        echo "                             <div class=\"row object-card card\">\n";
                        echo "                                <div class=\"topcorner deep-orange lighten-4 grey-text\">".$workshopObj->getPublishDate()."</div>\n";
                        echo "                                <div class=\"col s12\">\n";
                        echo "                                    <span class=\"object-title\">".$workshopObj->getTitle()."<span class=\"object-details\">&nbsp;".$workshopObj->getLocation()."</span></span>\n";
                        echo "                                    <span class=\"object-author\">".pullUser($workshopObj->getAuthorId())->getFullName()."</span>\n";
                        echo "                                </div>\n";
                        echo "                                <div class=\"col s12 object-description\">".$workshopObj->getShortDescription()."</div>\n";
                        echo "                                <div class=\"col s8 valign-wrapper object-tags\">\n";
                        echo "                                    <div class=\"chip\"><i class=\"material-icons\">code</i>Programming</div>\n";
                        echo "                                    <div class=\"chip\"><i class=\"material-icons\">public</i>Science</div>\n";
                        echo "                                    <div class=\"chip\"><i class=\"material-icons\">memory</i>Electronics</div>\n";
                        echo "                                </div>\n";
                        echo "                                <div class=\"col s4 object-button right-align\">\n";
                        echo "                                    <a class=\"waves-effect btn-flat white-text deep-orange darken-2\" href=\"workshop.php?workshop_id=".$workshopObj->getWorkshopId()."\" target=\"\"><i class=\"material-icons left\">exit_to_app</i>Full Details</a>\n";
                        echo "                                    <a class=\"waves-effect btn-flat white-text deep-orange darken-2 hide\" href=\"".pullUser($workshopObj->getAuthorId())->getEmail()."\" target=\"_blank\"><i class=\"material-icons left\">email</i>Contact Ian</a>\n";
                        echo "                                </div>\n";
                        echo "                            </div>\n\n";
                    }
                    ?>
                </div>
                <div id="get-started" class="section scrollspy">

                </div>
                <div id="our-mission" class="section scrollspy">

                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>

<?php include 'bottom-script.php'; ?>

</body>
</html>