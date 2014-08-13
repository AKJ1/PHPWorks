<?php
/**
 * Created by PhpStorm.
 * User: UniUser
 * Date: 8/12/14
 * Time: 5:47 PM
 */
$date = getdate();
$nowTimestamp = time();
$newYearTimestamp = mktime(0,0,0,1,0,$date['year']+1);
$newYearDate = getdate();

$difference = abs($newYearTimestamp - $nowTimestamp);
$minutesLeft = $difference/60;
$hoursLeft = $difference/60/60;
$daysLeft = $difference/60/60/24;
$combinedLeft = getdate($difference);

echo("Seconds until new year: ".$difference."<br>");
echo("Minutes until new year: ".$minutesLeft."<br>");
echo("Hours until new year: ".$hoursLeft."<br>");
echo("Days until new year: ".$daysLeft."<br>");
