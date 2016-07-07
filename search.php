<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<meta name="theme-color" content="#2196F3" />

<title>Search - Give Back</title>

<!-- CSS  -->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,500' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:700,300,400' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<link href="css/custom.css" rel="stylesheet">
<body>
<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');
//ini_set('html_errors', 'On');
include 'header.php'; ?>

<div class="section container">
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
                    <input id="icon_place" type="tel" class="validate">
                    <label for="icon_place">Zip Code</label>
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
</div>

<?php include 'footer.php'; ?>

<?php include 'bottom-script.php'; ?>

</body>
</html>