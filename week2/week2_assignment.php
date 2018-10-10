<?php
/**
 * Created by PhpStorm.
 */

$first_num = rand(0, 1000);
$second_num = rand(0, 1000);
$difference = $first_num - $second_num;

print "<h2><strong> You put in $" . $first_num . " and your item costs $" .
    $second_num . ". Your change is $" . $difference . ". </strong></h2>";