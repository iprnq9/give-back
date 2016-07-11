<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<meta name="theme-color" content="#2196F3" />

<title>Volunteer Profile 2 - Give Back</title>

<?php

include 'user_obj.php';

include 'dbconnect.php';

if ($db->connect_errno) {
    $connection_error = "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}

include('session.php');

$sql = "SELECT user_id FROM users WHERE username = $login_session";
$result = mysqli_query($db,$sql);

include 'pull_data.php';

$first_name = $userObj->getFirstName();
$last_name  = $userObj->getLastName();
$user_id = $userObj->getUserId();
$username = $userObj->getUsername();
$user_location = $userObj->getLocation();
$user_description = $userObj->getDescription();
$profile_picture = $userObj->getProfilePicture();

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
                    <div class="col s6 offset-s3 l2 push-l2 profile-picture valign-wrapper"><img src="images/<?php echo $profile_picture; ?>" class="responsive-img materialboxed valign" data-caption="<?php echo $first_name; ?>'s Profile Picture"/></div>
                    <div class="col s12 l6 push-l2">
                        <span class="profile-name"><?php echo $first_name . "&nbsp;" . $last_name; ?></span>
                        <span class="profile-about"><?php echo $user_description; ?></span>
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
                            <li class="tab col s4"><a href="#workshop-ideas" onclick="Materialize.fadeInImage('#workshop-ideas')">Ideas (2)</a></li>
                            <li class="tab col s4"><a href="#workshop-history" onclick="Materialize.fadeInImage('#workshop-history')">Completed (1)</a></li>
                            <li class="tab col s4"><a href="#about" onclick="Materialize.fadeInImage('#about')">About</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row" id="workshop-ideas">
                    <div class="col s12 l8 push-l2">
                        <div class="profile-ideas">
                            <?php echo $first_name; ?>'s Workshop Ideas
                            <div class="row object-card card">
                                <div class="topcorner deep-orange lighten-4 grey-text">July 7, 2016</div>
                                <div class="col s12">
                                    <span class="object-title">Arduino Workshop&nbsp;<span class="object-details">Jackson, MO</span></span>
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
                            <div class="row object-card card">
                                <div class="topcorner deep-orange lighten-4 grey-text">July 4, 2016</div>
                                <div class="col s12">
                                    <span class="object-title">Science Workshop&nbsp;<span class="object-details">Jackson, MO</span></span>
                                    <span class="object-author">Ian Roberts</span>
                                </div>
                                <div class="col s12 object-description">Science experiments to help inspire kids to learn!</div>
                                <div class="col s8 valign-wrapper object-tags">
                                    <div class="chip"><i class="material-icons">public</i>Science</div>
                                </div>
                                <div class="col s4 object-button right-align">
                                    <a class="waves-effect btn-flat white-text deep-orange darken-2" href="workshop.php" target=""><i class="material-icons left">exit_to_app</i>Full Details</a>
                                    <a class="waves-effect btn-flat white-text deep-orange darken-2 hide" href="#" target="_blank"><i class="material-icons left">email</i>Contact Ian</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="workshop-history">
                    <div class="col s12 l8 push-l2">
                        <div class="profile-ideas">
                            Ian's Workshop History
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
                            About Ian
                            <div class="row about-description card-panel">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l4 workshop-quick-facts about">
                        <div class="about">
                            Quick Facts
                            <div class="card-panel black-text white workshop-overview">
                                <ul>
                                    <li><i class="material-icons circle left">people</i>Age: <?php echo $user_age; ?></li>
                                    <li><i class="material-icons circle left">mail</i><?php echo $user_email; ?></li>
                                    <li><i class="material-icons circle left">phone</i>555-555-5555</li>
                                    <li><i class="material-icons circle left">share</i><a href="#" target="_blank">LinkedIn</a></li>
                                    <li><i class="material-icons circle left">place</i>Rolla, MO</li>
                                </ul>
                                <iframe width="100%" height="auto" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo $user_location; ?>&key=AIzaSyA3Hnx42SaJEa7CiIPbMaj9uYrglnbl5f0"
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