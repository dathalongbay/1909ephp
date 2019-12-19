<?php
if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
    $id = (int)$_GET["id"];

    include_once "connectdb.php";

    $sqlSelect = "SELECT * FROM myguests WHERE id=$id";

    $stmt = $conn->prepare($sqlSelect);
    $stmt->execute();

// set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $all = $stmt->fetchAll();

    echo "<pre>";
    print_r($all);
    echo "</pre>";
} else {
    echo "<br> Không tìm thấy id";
}

?>
