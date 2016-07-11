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


?>

<html>
<head>
    <title>Welcome</title>
</head>

<body>
    <h1>Welcome <?php echo $first_name . "&nbsp;" . $last_name; ?></h1>
    <h2><a href = "logout.php">Sign Out</a></h2>
</body>

</html>