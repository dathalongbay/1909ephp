<?php
include_once "connect.php";


function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$sql = "";

$conn->beginTransaction();

for ($i = 1; $i < 200; $i++) {

    $title = $i . "-title-" . generateRandomString(10);
    $intro = $i . "-intro-" . generateRandomString(10);

    $singleSQL = "INSERT INTO posts(title, intro) VALUES ('$title', '$intro');";
    $sql = $sql . $singleSQL;

    $conn->exec($singleSQL);
}
echo "<br>" . $sql;
$conn->commit();

