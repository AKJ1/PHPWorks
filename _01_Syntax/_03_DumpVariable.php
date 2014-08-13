<?php
/**
 * Created by PhpStorm.
 * User: UniUser
 * Date: 8/12/14
 * Time: 2:55 PM
 */
$variable = ["hello", 15, 1.2345, [12,13,14],(object)[1,3,4]];

for($i = 0; $i <= 4; $i++){
    echo(gettype($variable[$i]) . "<br>");
}
