<?php
/**
 * Created by PhpStorm.
 * User: UniUser
 * Date: 8/12/14
 * Time: 3:51 PM
 * Fuck this assignment
 */

$month = date("m");
$lastDay = date("t");
$year = date("Y");
$timestamp = mktime(1,1,1,$month,$lastDay,$year);
$date = getdate($timestamp);
for($i = $lastDay; $i >= 0; $i--){
    $timestamp = mktime(1,1,1,$month,$lastDay-$i,$year);
    $date = getdate($timestamp);

    $currentOrdinal = getOrdinal((int)strval($date["mday"])[strlen(strval($date['mday']))-1]);
    if($date['wday'] == 0){
        echo($date['mday'].$currentOrdinal." ".$date['month'].", ".$date['year']."<br>");
    }
}

function getOrdinal ($day){
    $ordinals = ["th","st","nd","rd"];
    switch($day){
        case 1:{
            return $ordinals[1];
            break;
        }
        case 2:{
            return $ordinals[2];
            break;
        }
        case 3:{
            return $ordinals[3];
            break;
        }
        default:{
            return $ordinals[0];
            break;
        }
    }
}