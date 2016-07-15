<?php

$tagArray = array();

include 'dbconnect.php';

$res = $db->query("SELECT * FROM tags");
$count = 0;
while($row = mysqli_fetch_array($res))
{
    $tagArray[$row["tag_id"]] = $row["topic"];
    $count++;
}

?>