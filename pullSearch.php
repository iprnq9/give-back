<?php

function tagSearch($tag){
    if (!class_exists('workshopObj')) {
        include 'workshop_obj.php';
    }

    include 'dbconnect.php';

    $col = "tag_id";
    $res = $db->query("SELECT $col FROM tags WHERE topic = '".$tag."'");
    $val = $res->fetch_assoc();
    $val = $val[$col];

    //echo $val;

    $workshopIDs = array();

    $res = $db->query("SELECT workshop_id FROM workshop_tags WHERE tag_id = '".$val."'");
    $count = 0;
    while($row = mysqli_fetch_array($res))
    {
        $workshopIDs[$count] = $row['workshop_id'];
        //echo $count . ": " .$workshopIDs[$count] . "<br>";
        $count++;
    }

    return $workshopIDs;
}

?>

