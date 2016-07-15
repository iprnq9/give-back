<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<meta name="theme-color" content="#2196F3" />

<title>Volunteer - Give Back</title>

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

//include 'pull_data.php';
include 'pull_single_user.php';
//include 'pull_data_workshop.php';
include 'pull_single_workshop.php';
include 'pull_tags.php';

$profile_id = htmlspecialchars($_GET["profile"]);
if(!$profile_id)
    $profile_id = $login_session;

$userObj = pullUser($profile_id);

//$sql = "SELECT id FROM workshops WHERE author_id = $user_id";
//$result = mysqli_query($db, $sql);
//$workshopCount  = $result->num_rows;
//
//$workshopIDs = array();
//while($row = mysqli_fetch_array($result))
//{
//    $workshopIDs[] = $row;
//}
//
//$workshopArray = array();
//
//for($i=0; $i < $workshopCount; $i++){
//    $workshopArray[$i] = pullWorkshop($workshopIds[$i]);
//}


//$first_name = $userObj->getFirstName();
//$last_name  = $userObj->getLastName();
//$user_id = $userObj->getUserId();
//$username = $userObj->getUsername();
//$user_location = $userObj->getLocation();
//$user_about = $userObj->getAbout();
//$user_email = $userObj->getEmail();
//$user_dob = $userObj->getDOB();
//$user_age = $userObj->getAge();
//$profile_picture = $userObj->getProfilePicture();
//$user_description = $userObj->getDescription();


?>

<?php include 'includes.php'; ?>

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
                    <div class="col s6 offset-s3 l2 push-l2 profile-picture valign-wrapper"><img src="images/<?php echo $userObj->getProfilePicture(); ?>" class="responsive-img materialboxed valign" data-caption="<?php echo $userObj->getFirstName(); ?>'s Profile Picture"/></div>
                    <div class="col s12 l6 push-l2">
                        <span class="profile-name"><?php echo $userObj->getFullName(); ?></span>
                        <span class="profile-about"><?php echo $userObj->getDescription(); ?></span>
                        <span class="profile-skills">
                            <div class="chip">Programming</div>
                            <div class="chip">Science</div>
                            <div class="chip">Electronics</div>
                        </span>
                    </div>
                    <div class="col s12 l4 profile-score-box hide">
                        <div class="card-panel light-blue">
                            Give Back Points
                            <span class="profile-score-points">52</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l8 push-l2">
                        <ul class="tabs">
                            <li class="tab col s4"><a href="#workshop-ideas" onclick="Materialize.fadeInImage('#workshop-ideas')">Ideas (<?php echo $userObj->getWorkshopCount(); ?>)</a></li>
                            <li class="tab col s4"><a href="#workshop-history" onclick="Materialize.fadeInImage('#workshop-history')">Completed (1)</a></li>
                            <li class="tab col s4"><a href="#about" onclick="Materialize.fadeInImage('#about')">About</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row" id="workshop-ideas">
                    <div class="col s12 l8 push-l2">
                        <div class="profile-ideas">
                            <?php echo $userObj->getFirstName(); ?>'s Workshop Ideas
                            <?php
                                for($i=0; $i<$userObj->getWorkshopCount(); $i++){
                                    $workshopObj = pullWorkshop($userObj->getWorkshopId($i));
                                    echo "                             <div class=\"row object-card card\">\n";
                                    echo "                                <div class=\"topcorner deep-orange lighten-4 grey-text\">".$workshopObj->getPublishDate()."</div>\n";
                                    echo "                                <div class=\"col s12\">\n";
                                    echo "                                    <span class=\"object-title\">".$workshopObj->getTitle()."<span class=\"object-details\">&nbsp;".$workshopObj->getLocation()."</span></span>\n";
                                    echo "                                    <span class=\"object-author\">".pullUser($workshopObj->getAuthorId())->getFullName()."</span>\n";
                                    echo "                                </div>\n";
                                    echo "                                <div class=\"col s12 object-description\">".$workshopObj->getShortDescription()."</div>\n";
                                    echo "                                <div class=\"col s8 valign-wrapper object-tags\">\n";
                                    for($j=0; $j<$workshopObj->getTagCount();$j++){
                                        echo "                                    <div class=\"chip\">".$tagArray[$workshopObj->getTag($j)]."</div>\n";
                                    }
                                    echo "                                </div>\n";
                                    echo "                                <div class=\"col s4 object-button right-align\">\n";
                                    echo "                                    <a class=\"waves-effect btn-flat white-text deep-orange darken-2\" href=\"workshop.php?workshop_id=".$workshopObj->getWorkshopId()."\" target=\"\"><i class=\"material-icons left\">exit_to_app</i>Full Details</a>\n";
                                    echo "                                    <a class=\"waves-effect btn-flat white-text deep-orange darken-2 hide\" href=\"".$userObj->getEmail()."\" target=\"_blank\"><i class=\"material-icons left\">email</i>Contact Ian</a>\n";
                                    echo "                                </div>\n";
                                    echo "                            </div>\n\n";
                                }
                            ?>
                            <?php if($userObj->getWorkshopCount() < 5): ?>
                            <div class="center-align object-button"><a class="waves-effect btn-flat white-text deep-orange darken-2" href="example_workshops.php"><i class="material-icons left">lightbulb_outline</i>Example
                                    Workshops</a></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="row" id="workshop-history">
                    <div class="col s12 l8 push-l2">
                        <div class="profile-ideas">
                            <?php echo $userObj->getFirstName(); ?>'s Completed Workshops
                            <div class="row object-card card">
                                <div class="topcorner deep-orange lighten-4 grey-text">March 7, 2016</div>
                                <div class="col s12">
                                    <span class="object-title">Math Workshop&nbsp;<span class="object-details">Jackson, MO</span></span>
                                    <span class="object-author">Ian Roberts</span>
                                </div>
                                <div class="col s12 object-description">In this workshop, I'd like to teach students how to play with the Arduino. It's an affordable hobbyist's dream. It's great for learning and having fun with electronics!</div>
                                <div class="col s8 valign-wrapper object-tags">
                                    <div class="chip"><i class="material-icons">code</i>Programming</div>
                                    <div class="chip"><i class="material-icons">public</i>Science</div>
                                    <div class="chip"><i class="material-icons">memory</i>Electronics</div>
                                </div>
                                <div class="col s4 object-button right-align">
                                    <a class="waves-effect btn-flat white-text deep-orange darken-2" href="workshop.php" target=""><i class="material-icons left">exit_to_app</i>Full Details</a>
                                    <a class="waves-effect btn-flat white-text deep-orange darken-2 hide" href="#" target="_blank"><i class="material-icons left">email</i>Contact Ian</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="about">
                    <div class="col s12 l8">
                        <div class="about">
                            About <?php echo $userObj->getFirstName(); ?>
                            <div class="row about-description card-panel"><?php echo $userObj->getAbout(); ?></div>
                        </div>
                    </div>
                    <div class="col s12 l4 workshop-quick-facts about">
                        <div class="about">
                            Quick Facts
                            <div class="card-panel black-text white workshop-overview">
                                <ul>
                                    <li><i class="material-icons circle left">people</i>Age: <?php echo $userObj->getAge(); ?></li>
                                    <li><i class="material-icons circle left">mail</i><?php echo $userObj->getEmail(); ?></li>
                                    <li><i class="material-icons circle left">phone</i><?php echo $userObj->getPhone(); ?></li>
                                    <?php if($userObj->getLinkedIn()): ?>
                                    <li><i class="material-icons circle left">share</i><a href="<?php echo $userObj->getLinkedIn();?>" target="_blank">LinkedIn</a></li>
                                    <?php endif; ?>
                                    <li><i class="material-icons circle left">place</i>CITY, STATE</li>
                                </ul>
                                <iframe width="100%" height="auto" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo $userObj->getLocation(); ?>&key=AIzaSyA3Hnx42SaJEa7CiIPbMaj9uYrglnbl5f0"
                                allowfullscreen></iframe>
                            </div>
                        </div>
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