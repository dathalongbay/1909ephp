<?php
// Nạp file kết nối CSDL
include_once "connectdb.php";

if (isset($_POST["id"]) ) {

    $id = $_POST["id"];

    $sql = "DELETE FROM myguests WHERE id=$id";

    echo $sql;

    $test = $conn->query($sql);

    if ($test) {
        echo "<br> Xóa thành công";
    } else {
        echo "<br> Xóa thất bại";
    }
    echo "<br> kết quả thực hiện câu query";
    var_dump($test);

    header("Location: index6.php"); exit;
}

?>