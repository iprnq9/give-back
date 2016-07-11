<?php

include 'dbconnect.php';
//include 'user_obj.php'; //uncomment for testing

$userObj = new userObj;

$col = "username";
$res = $db->query("SELECT $col FROM users WHERE username = '".$login_session."'");
$val = $res->fetch_assoc();
$val = $val[$col];
$userObj->setUsername($val);

$col = "user_id";
$res = $db->query("SELECT $col FROM users WHERE username = '".$login_session."'");
$val = $res->fetch_assoc();
$val = $val[$col];
$userObj->setUserId($val);

$col = "first_name";
$res = $db->query("SELECT $col FROM users WHERE username = '".$login_session."'");
$val = $res->fetch_assoc();
$val = $val[$col];
$userObj->setFirstName($val);

$col = "last_name";
$res = $db->query("SELECT $col FROM users WHERE username = '".$login_session."'");
$val = $res->fetch_assoc();
$val = $val[$col];
$userObj->setLastName($val);

$col = "location";
$res = $db->query("SELECT $col FROM users WHERE username = '".$login_session."'");
$val = $res->fetch_assoc();
$val = $val[$col];
$userObj->setLocation($val);

$col = "description";
$res = $db->query("SELECT $col FROM users WHERE username = '".$login_session."'");
$val = $res->fetch_assoc();
$val = $val[$col];
$userObj->setDescription($val);

$col = "about";
$res = $db->query("SELECT $col FROM users WHERE username = '".$login_session."'");
$val = $res->fetch_assoc();
$val = $val[$col];
$userObj->setAbout($val);

$col = "profile_pic";
$res = $db->query("SELECT $col FROM users WHERE username = '".$login_session."'");
$val = $res->fetch_assoc();
$val = $val[$col];
$userObj->setProfilePicture($val);

$col = "email";
$res = $db->query("SELECT $col FROM users WHERE username = '".$login_session."'");
$val = $res->fetch_assoc();
$val = $val[$col];
$userObj->setEmail($val);

$col = "dob";
$res = $db->query("SELECT $col FROM users WHERE username = '".$login_session."'");
$val = $res->fetch_assoc();
$val = $val[$col];
$userObj->setDOB($val);

//Set user's age
$today = new DateTime();
$birthdate = new DateTime($userObj->getDOB());
$interval = $today->diff($birthdate);
$userObj->setAge($interval->format('%y'));

$first_name = $userObj->getFirstName();
$last_name  = $userObj->getLastName();
$user_id = $userObj->getUserId();
$username = $userObj->getUsername();
$user_location = $userObj->getLocation();
$user_about = $userObj->getAbout();
$user_email = $userObj->getEmail();
$user_dob = $userObj->getDOB();
$user_age = $userObj->getAge();



//echo $userObj->getFirstName();
//echo "<br>";
//echo $userObj->getLastName();
//echo "<br>";
//echo $userObj->getUserId();
//echo "<br>";
//echo $userObj->getUsername();
//echo "<br>";
//echo $userObj->getLocation();
//echo "<br>";

?>