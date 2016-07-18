<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<meta name="theme-color" content="#2196F3" />

<title>Search - Give Back</title>

<?php

$tag = htmlspecialchars($_GET["tag"]);

include 'user_obj.php';
include 'workshop_obj.php';
include 'pull_single_workshop.php';
include 'pull_single_user.php';
include 'pull_tags.php';
include 'printWorkshop.php';
include 'findLocation.php';

include 'dbconnect.php';

include 'pullSearch.php';

if ($db->connect_errno) {
    $connection_error = "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}

include 'includes.php';

include('session.php');


$workshopArray = array();
$workshopArray = tagSearch($tag);


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
            <div class="col s12 l2 card center-align">
                <h5>Topics</h5>
                <ul class="categories-ul">
                    <li><div class="chip"><i class="material-icons">functions</i>Math</div></li>
                    <li><div class="chip"><i class="material-icons">code</i>Programming</div></li>
                    <li><div class="chip"><i class="material-icons">public</i>Science</div></li>
                    <li><div class="chip"><i class="material-icons">palette</i>Art</div></li>
                </ul>
            </div>
            <div class="col l8">
                <h4 class="center-align">Search</h4>
                <?php if($tag == NULL): ?>
                <form class="col s12">
                    <div class="row search-field">
                        <div class="col s12 l2 push-l1">
                            <p><i class="material-icons left">school</i>Topic(s):</p>
                        </div>
                        <div class="col s12 l6 push-l1 input-field search-field bottom-border">
                            <div class="chip">Any Age</div>
                            <div class="chip"><i class="material-icons">palette</i>Art</div>
                            <div class="chip"><i class="material-icons">palette</i>Art</div>
                            <div class="chip"><i class="material-icons">palette</i>Art</div>
                            <div class="chip"><i class="material-icons">palette</i>Art</div>
                            <div class="chip"><i class="material-icons left">close</i><i class="material-icons">palette</i>Art</div>
                            <div class="chip"><i class="material-icons left">palette</i><i class="material-icons">close</i>Art</div>
                        </div>
                    </div>
                    <div class="row search-field">
                        <div class="col s12 l2 push-l1">
                            <p><i class="material-icons left">people</i>Grade(s):</p>
                        </div>
                        <div class="col s12 l6 push-l1 search-field bottom-border">
                            <div class="chip">Any Age</div>
                        </div>
                    </div>
                    <p class="center-align">
                        <input type="checkbox" id="test6" />
                        <label for="test6">Near Rolla, MO</label>
                    </p>
                    <p class="center-align">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Who Can Help Me
                            <i class="material-icons left">account_circle</i>
                        </button>
                        OR
                        <button class="btn waves-effect waves-light" type="submit" name="action">Where Can I Help
                            <i class="material-icons left">location_city</i>
                        </button>
                        <br><br>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Just Show Me Everything
                            <i class="material-icons right"></i>
                        </button>
                    </p>
                </form>
                <?php endif; ?>
                <?php if($tag): ?>
                    <h5 class="center-align"><?php echo "'".$tag."' &rarr; ".count($workshopArray)." workshops"; ?></h5>
                    <div class="col">
                <?php
                  for($i=count($workshopArray)-1; $i >= 0; $i--){
                      printWorkshopCard($workshopArray[$i]);
                  }
                ?>
                    </div>
                <?php endif; ?>

            </div>
            <div class="col l2 card center-align">
                <h5>Grade Level</h5>
                <ul class="grade-level-ul">
                    <li><div class="chip">Early (4-6 yrs)</div></li>
                    <li><div class="chip">Elementary (7-10 yrs)</div></li>
                    <li><div class="chip">Middle (11-13 yrs)</div></li>
                    <li><div class="chip">Jr. High (14-15)</div></li>
                    <li><div class="chip">High School (16-18)</div></li>
                    <li><div class="chip">Any Age</div></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="section container hide">
        <div class="row">
            <div class="col l2 card center-align">
                <h5>Topics</h5>
                <ul class="categories-ul">
                    <li><div class="chip"><i class="material-icons">functions</i>Math</div></li>
                    <li><div class="chip"><i class="material-icons">code</i>Programming</div></li>
                    <li><div class="chip"><i class="material-icons">public</i>Science</div></li>
                    <li><div class="chip"><i class="material-icons">palette</i>Art</div></li>
                </ul>
            </div>
            <div class="col l8 center-align">
                <h5>Search</h5>
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">school</i>
                            <input id="icon_prefix" type="text" class="">
                            <label for="icon_prefix">Topic(s)</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">place</i>
                            <input id="icon_place" type="text" class="">
                            <label for="icon_place">Location</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">supervisor_account</i>
                            <input id="icon_age" type="text" class="">
                            <label for="icon_age">Age Group</label>
                        </div>
                    </div>
                    <p class="center-align">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Who Can Help Me
                            <i class="material-icons left">account_circle</i>
                        </button>
                        OR
                        <button class="btn waves-effect waves-light" type="submit" name="action">Where Can I Help
                            <i class="material-icons left">location_city</i>
                        </button>
                        <br><br>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Just Show Me Everything
                            <i class="material-icons right"></i>
                        </button>
                    </p>
                </form>
            </div>
            <div class="col l2 card center-align">
                <h5>Grade Level</h5>
                <ul class="grade-level-ul">
                    <li><div class="chip">Early (4-6 yrs)</div></li>
                    <li><div class="chip">Elementary (7-10 yrs)</div></li>
                    <li><div class="chip">Middle (11-13 yrs)</div></li>
                    <li><div class="chip">Jr. High (14-15)</div></li>
                    <li><div class="chip">High School (16-18)</div></li>
                    <li><div class="chip">Any Age</div></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="section container hide">
        <div class="row">
            <h3 class="center-align">Search by Topic and/or Location</h3>
            <h6 class="center-align">Select a topic and/or input a zip code to find available workshops and community members.</h6>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">school</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Topic</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">place</i>
                        <input id="icon_place" type="tel" class="validate" value="chip">
                        <label for="icon_place">Zip Code</label>
                    </div>
                </div>
                <p class="center-align">
                    <button class="btn waves-effect waves-light deep-orange darken-2" type="submit" name="action">Who Can Help Me
                        <i class="material-icons left">account_circle</i>
                    </button>
                    OR
                    <button class="btn waves-effect waves-light deep-orange darken-2" type="submit" name="action">Where Can I Help
                        <i class="material-icons left">location_city</i>
                    </button>
                    <br><br>
                    <button class="btn waves-effect waves-light deep-orange darken-2" type="submit" name="action">Just Show Me Everything
                        <i class="material-icons right"></i>
                    </button>
                </p>
            </form>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>

<?php include 'bottom-script.php'; ?>

</body>
</html>