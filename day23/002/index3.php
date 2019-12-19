<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/19/2019
 * Time: 7:13 PM
 */

/**
 * Cách số 3 sử dụng PDO để kết nối đến mysql
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ngay19thang12";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected thành công";
}
catch(PDOException $e)
{
    echo "Connection thất bại: " . $e->getMessage();
}

echo "DEMO TEST";