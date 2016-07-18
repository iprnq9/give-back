<?php

//include 'pull_single_user.php';
//include 'pull_single_workshop.php';


function printWorkshopCard($id){
    include 'pull_tags.php';
    include 'session.php';

    $workshopObj = pullWorkshop($id);

    echo "                             <div class=\"row object-card card\">\n";
    echo "                                <div class=\"topcorner deep-orange lighten-4 grey-text\">".$workshopObj->getPublishDate()."</div>\n";
    echo "                                <div class=\"col s12\">\n";
    echo "                                    <span class=\"object-title\">".$workshopObj->getTitle()."</span>\n";
    if($login_session != $workshopObj->getAuthorId()){
        echo
        ((checkFavorite($login_session, $id) && $login_session)?
            "<i class=\"material-icons\">star</i>"
            :
            "<i class=\"material-icons\">star_border</i>");
    }
    echo "                                    <span class=\"object-author\">".pullUser($workshopObj->getAuthorId())->getFullName()." - " . "<span class=\"object-details\">".locationByZip($workshopObj->getLocation(), "full")
        ."</span></span>\n";
    echo "                                </div>\n";
    echo "                                <div class=\"col s12 object-description\">".$workshopObj->getShortDescription()."</div>\n";
    echo "                                <div class=\"col s8 valign-wrapper object-tags\">\n";
    for($j=0; $j<$workshopObj->getTagCount();$j++){
        echo "                                    <div class=\"chip\">".$tagArray[$workshopObj->getTag($j)]."</div>\n";
    }
    echo "                                </div>\n";
    echo "                                <div class=\"col s4 object-button right-align\">\n";
    echo "                                    <a class=\"waves-effect btn-flat white-text deep-orange darken-2\" href=\"workshop.php?workshop_id=".$workshopObj->getWorkshopId()."\" target=\"\"><i class=\"material-icons left\">exit_to_app</i>Full Details</a>\n";
    echo "                                </div>\n";
    echo "                            </div>\n\n";
}