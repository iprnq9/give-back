<?php

function locationByZip($zip, $field){
    $xml = simplexml_load_file("http://www.webservicex.net/uszip.asmx/GetInfoByZIP?USZip=".$zip);
    $city = $xml->Table->CITY;
    $state = $xml->Table->STATE;
    $full = $city . ",&nbsp;" . $state;

    if($field == "city")
        return $city;
    elseif($field == "state")
        return $state;
    elseif($field == "full")
        return $full;
}