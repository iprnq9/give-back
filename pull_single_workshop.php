<?php

//include 'dbconnect.php';

if (!class_exists('workshopObj')) {
    include 'workshop_obj.php';
}

function pullWorkshop($id){
    include 'dbconnect.php';

    $workshopObj = new workshopObj();

    $col = "id";
    $res = $db->query("SELECT $col FROM workshops WHERE id = '".$id."'");
    $val = $res->fetch_assoc();
    $val = $val[$col];
    $workshopObj->setWorkshopId($val);

    $col = "title";
    $res = $db->query("SELECT $col FROM workshops WHERE id = '".$id."'");
    $val = $res->fetch_assoc();
    $val = $val[$col];
    $workshopObj->setTitle($val);

    $col = "author_id";
    $res = $db->query("SELECT $col FROM workshops WHERE id = '".$id."'");
    $val = $res->fetch_assoc();
    $val = $val[$col];
    $workshopObj->setAuthorId($val);

    $col = "short_description";
    $res = $db->query("SELECT $col FROM workshops WHERE id = '".$id."'");
    $val = $res->fetch_assoc();
    $val = $val[$col];
    $workshopObj->setShortDescription($val);

    $col = "full_description";
    $res = $db->query("SELECT $col FROM workshops WHERE id = '".$id."'");
    $val = $res->fetch_assoc();
    $val = $val[$col];
    $workshopObj->setFullDescription($val);

    $col = "zip_code";
    $res = $db->query("SELECT $col FROM workshops WHERE id = '".$id."'");
    $val = $res->fetch_assoc();
    $val = $val[$col];
    $workshopObj->setLocation($val);

    $col = "date_added";
    $res = $db->query("SELECT $col FROM workshops WHERE id = '".$id."'");
    $val = $res->fetch_assoc();
    $val = $val[$col];
    $workshopObj->setPublishDate($val);

    //Set workshop's age
    $today = new DateTime();
    $publish_date = new DateTime($workshopObj->getPublishDate());
    $interval = $today->diff($publish_date);
    $workshopObj->setAge($interval->format('%j'));

    $originalDate = $workshopObj->getPublishDate();
    $newDate = date("F j, Y", strtotime($originalDate));
    $workshopObj->setPublishDate($newDate);

    $res = $db->query("SELECT tag_id FROM workshop_tags WHERE workshop_id = '".$id."'");
    $tagIDs = array();
    $count = 0;
    while($row = mysqli_fetch_array($res))
    {
        $tagIDs[$count] = $row["tag_id"];
        $count++;
    }

    for($i=0; $i < count($tagIDs); $i++)
        $workshopObj->setTag($i, $tagIDs[$i]);

    $workshopObj->setTagCount();

    return $workshopObj;

//    $id  = $workshopObj->getWorkshopId();
//    $title = $workshopObj->getTitle();
//    $author_id = $workshopObj->getAuthorId();
//    $short_description = $workshopObj->getShortDescription();
//    $full_description = $workshopObj->getFullDescription();
//    $location = $workshopObj->getLocation();
//    $publish_date = $workshopObj->getPublishDate();
//    $age = $workshopObj->getAge();


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

function checkFavorite($user_id, $workshop_id){
    include 'dbconnect.php';

    $res = $db->query("SELECT * FROM favorites WHERE workshop_id = '".$workshop_id."' AND user_id = '".$user_id."'");

    if($res->num_rows)
        $favoriteBool = true;
    else
        $favoriteBool = false;

    return $favoriteBool;
}

?>