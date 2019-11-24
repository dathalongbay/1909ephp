<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/24/2019
 * Time: 7:44 PM
 */

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

echo "<pre>";
print_r($age);
echo "</pre>";
krsort($age);

echo "<pre>";
print_r($age);
echo "</pre>";
