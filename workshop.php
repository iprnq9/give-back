<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<meta name="theme-color" content="#2196F3" />

<title>Arduino Workshop Full Details - Give Back</title>

<?php

$workshop_id = htmlspecialchars($_GET["workshop_id"]);

if(!$workshop_id)
    $workshop_id = 1;

include 'workshop_obj.php';

include 'dbconnect.php';

if ($db->connect_errno) {
    $connection_error = "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}

include('session.php');

$sql = "SELECT * FROM workshops WHERE id = $workshop_id";
$result = mysqli_query($db,$sql);

include 'pull_single_workshop.php';
include 'pull_single_user.php';

$workshopObj = pullWorkshop($workshop_id);
$author_id = $workshopObj->getAuthorId();
$userObj = pullUser($author_id);


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
            <div class="col s12">
                <div class="row">
                    <div class="col s12 l8 workshop-full-details card">
                        <span class="workshop-title"><?php echo $workshopObj->getTitle(); ?></span>
                        <span class="workshop-author"><?php echo pullUser($author_id)->getFullName(); ?></span>
                        <span class="workshop-posted-date topcorner grey-text deep-orange lighten-4"><?php echo $workshopObj->getPublishDate(); ?></span>
                        <p>
                            <?php echo $workshopObj->getFullDescription(); ?>
                        </p>
                        <hr class="object-hr"/>
                        <h5>Downloads</h5>
                        <ul class="document-download">
                            <li><i class="material-icons left">chevron_right</i>Arduino Program (.ino)</li>
                        </ul>
                    </div>
                    <div class="col s12 l4 workshop-quick-facts">
                        <div class="card-panel black-text white workshop-overview">
                            <ul>
                                <li><i class="material-icons circle left">school</i>Grade Level: Middle School</li>
                                <li><i class="material-icons circle left">access_time</i>Time: 1 hour</li>
                                <li><i class="material-icons circle left">event</i>Frequency: 10 sessions (10 hours)</li>
                                <li><i class="material-icons circle left">memory</i>Hardware + Software</li>
                            </ul>
                        </div>
                    </div>
                    <?php if($userObj->getUserId() !== $login_session): ?>
                    <div class="col s12 l4 workshop-quick-facts">
                        <div class="card-panel black-text white workshop-overview">
                            <div class="row">
                                <div class="col s4 offset-s4 l3 center-align">
                                    <img src="images/<?php echo $userObj->getProfilePicture();?>" class="responsive-img circle">
                                </div>
                                <div class="col s6 push-s3 l7 center-align">
                                    <h5>About the Author</h5>
                                    <h6><?php echo $userObj->getFullName(); ?></h6>
                                </div>
                            </div>
                            <p><?php echo pullUser($author_id)->getDescription(); ?></p>
                            <div class="valign-wrapper object-tags">
                                <div class="chip"><i class="material-icons">code</i>Programming</div>
                                <div class="chip"><i class="material-icons">public</i>Science</div>
                                <div class="chip"><i class="material-icons">memory</i>Electronics</div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($userObj->getUserId() == $login_session): ?>
                    <div class="col s12 l4 workshop-quick-facts">
                        <div class="card-panel black-text white workshop-overview">
                            <h5>Interested in this project:</h5>
                            <ul>
                                <li><a href="institution_profile.php">West Lane Elementary</a><span class="float-right">07/16/2016</span></li>
                                <li><a href="institution_profile.php">Jackson Middle School</a><span class="float-right">07/17/2016</span></li>
                                <li><a href="institution_profile.php">John Smith Elementary</a><span class="float-right">07/18/2016</span></li>
                            </ul>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>

<?php include 'bottom-script.php'; ?>

</body>
</html>