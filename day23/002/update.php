<?php
// Nạp file kết nối CSDL
include_once "connectdb.php";

if (isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["email"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $id = $_POST["id"];

    $sql_update = "UPDATE myguests SET firstname='$firstname',lastname = '$lastname', email='$email' WHERE id=$id";

    echo $sql_update;

    $test = $conn->query($sql_update);

    if ($test) {
        echo "<br> Cập nhật thành công";
    } else {
        echo "<br> Cập nhật thất bại";
    }
    echo "<br> kết quả thực hiện câu query";
    var_dump($test);

    header("Location: index6.php"); exit;
}

?>