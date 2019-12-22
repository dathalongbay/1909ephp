<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/19/2019
 * Time: 7:37 PM
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection thất bại: " . $e->getMessage();
}