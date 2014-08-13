<?php
/**
 * Created by PhpStorm.
 * User: UniUser
 * Date: 8/12/14
 * Time: 5:18 PM
 */
$input = ['Name' => 'Gosho','Phone' =>'0882-321-423', 'Age' => 24, "Location" => 'Hadji Dimitar'];
$finalString = "<table>";
foreach($input as $k => $v){
    $finalString = $finalString."<tr>";
    $finalString = $finalString."<th>".$k."</th>";
    $finalString = $finalString."<td>".$v."</td>";
    $finalString = $finalString."</tr>";
}
$finalString = $finalString."</table>";
print_r($finalString);