<?php



//fetches userObj from user_id
function pullUser($id){
    if (!class_exists('userObj')) {
        include 'user_obj.php';
    }

    include 'dbconnect.php';

    $userObj = new userObj;

    $col = "username";
    $res = $db->query("SELECT $col FROM users WHERE user_id = '".$id."'");
    $val = $res->fetch_assoc();
    $val = $val[$col];
    $userObj->setUsername($val);

    $col = "user_id";
    $res = $db->query("SELECT $col FROM users WHERE user_id = '".$id."'");
    $val = $res->fetch_assoc();
    $val = $val[$col];
    $userObj->setUserId($val);

    $col = "first_name";
    $res = $db->query("SELECT $col FROM users WHERE user_id = '".$id."'");
    $val = $res->fetch_assoc();
    $val = $val[$col];
    $userObj->setFirstName($val);

    $col = "last_name";
    $res = $db->query("SELECT $col FROM users WHERE user_id = '".$id."'");
    $val = $res->fetch_assoc();
    $val = $val[$col];
    $userObj->setLastName($val);

    $first = $userObj->getFirstName();
    $last  = $userObj->getLastName();
    $userObj->setFullName($first, $last);

    $col = "location";
    $res = $db->query("SELECT $col FROM users WHERE user_id = '".$id."'");
    $val = $res->fetch_assoc();
    $val = $val[$col];
    $userObj->setLocation($val);

    $col = "description";
    $res = $db->query("SELECT $col FROM users WHERE user_id = '".$id."'");
    $val = $res->fetch_assoc();
    $val = $val[$col];
    $userObj->setDescription($val);

    $col = "about";
    $res = $db->query("SELECT $col FROM users WHERE user_id = '".$id."'");
    $val = $res->fetch_assoc();
    $val = $val[$col];
    $userObj->setAbout($val);

    $col = "profile_pic";
    $res = $db->query("SELECT $col FROM users WHERE user_id = '".$id."'");
    $val = $res->fetch_assoc();
    $val = $val[$col];
    $userObj->setProfilePicture($val);

    $col = "email";
    $res = $db->query("SELECT $col FROM users WHERE user_id = '".$id."'");
    $val = $res->fetch_assoc();
    $val = $val[$col];
    $userObj->setEmail($val);

    $col = "phone";
    $res = $db->query("SELECT $col FROM users WHERE user_id = '".$id."'");
    $val = $res->fetch_assoc();
    $val = $val[$col];
    $userObj->setPhone($val);

    $col = "linkedin";
    $res = $db->query("SELECT $col FROM users WHERE user_id = '".$id."'");
    $val = $res->fetch_assoc();
    $val = $val[$col];
    $userObj->setLinkedIn($val);

    $col = "dob";
    $res = $db->query("SELECT $col FROM users WHERE user_id = '".$id."'");
    $val = $res->fetch_assoc();
    $val = $val[$col];
    $userObj->setDOB($val);

    //Set user's age
    $today = new DateTime();
    $birthdate = new DateTime($userObj->getDOB());
    $interval = $today->diff($birthdate);
    $userObj->setAge($interval->format('%y'));

    $res = $db->query("SELECT id FROM workshops WHERE author_id = '".$id."'");
    $workshopIDs = array();
    $count = 0;
    while($row = mysqli_fetch_array($res))
    {
        $workshopIDs[$count] = $row["id"];
        $count++;
    }

    for($i=0; $i < count($workshopIDs); $i++)
        $userObj->setWorkshop($i, $workshopIDs[$i]);

    $res = $db->query("SELECT tag_id FROM user_tags WHERE user_id = '".$id."'");
    $tagIDs = array();
    $count = 0;
    while($row = mysqli_fetch_array($res))
    {
        $tagIDs[$count] = $row["tag_id"];
        $count++;
    }

    for($i=0; $i < count($tagIDs); $i++) {
        $userObj->setTag($i, $tagIDs[$i]);
    }

    return $userObj;

//    $first_name = $userObj->getFirstName();
//    $last_name  = $userObj->getLastName();
//    $user_id = $userObj->getUserId();
//    $username = $userObj->getUsername();
//    $user_location = $userObj->getLocation();
//    $user_about = $userObj->getAbout();
//    $user_email = $userObj->getEmail();
//    $user_dob = $userObj->getDOB();
//    $user_age = $userObj->getAge();
//    $profile_picture = $userObj->getProfilePicture();
//    $user_description = $userObj->getDescription();

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

}

?>