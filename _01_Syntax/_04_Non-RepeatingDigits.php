<?php
/**
 * Created by PhpStorm.
 * User: UniUser
 * Date: 8/12/14
 * Time: 3:06 PM
 */
$input = 1234;
for ($i = 0; $i <= $input; $i++) {
    $truthChecker = true;

    if (strlen((string)$i) == 3) {
        for ($j = 0; $j <= 2; $j++) {
            $Matches = 0;
            for ($k = $j; $k <= 2; $k++) {
                if (strval($i)[$k] == strval($i)[$j]) {
                    $Matches++;
                    if ($Matches >= 2) {
                        $truthChecker = false;
                    }
                }
            }
        }
        if ($truthChecker) {
            echo(($i . "\n <br>"));
        }
    }

}