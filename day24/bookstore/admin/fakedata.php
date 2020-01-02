<?php
include_once "../config/connectdb.php";
include_once "../config/functions.php";


/**
 * định nghĩa các trường dữ liệu hợp lệ bên trong bảng books
 */
$bookFields = ["book_name", "book_intro", "book_thumbnail",
    "book_images", "book_price", "book_sell", "book_author", "book_publisher",
    "created" , "updated", "book_hit", "book_buy", "book_status", "book_desc"];

$bookFieldsNotQuote = ["book_hit", "book_buy", "book_status", "book_price", "book_sell"];

for($i = 1;$i <= 20; $i++) {

    $data = [];
    foreach($bookFields as $fieldName) {

        if ($fieldName == "created" || $fieldName == "updated") {
            if (!in_array($fieldName, $bookFieldsNotQuote)) {
                $data[$fieldName] = "'".date("Y-m-d H:i:s")."'";
            } else {
                $data[$fieldName] = date("Y-m-d H:i:s");
            }
        } elseif (!in_array($fieldName, $bookFieldsNotQuote)) {
            $data[$fieldName] = "'".randomString(20)."'";
        } else {
            $data[$fieldName] = 0;
        }


    }

    echo "<pre>";
    print_r($data);
    echo "</pre>";

// convert mảng thành 1 chuỗi
    $fieldsSQL = implode(',', $bookFields);
    $fieldsValue = implode(",", $data);

    echo "<br>" . $fieldsSQL;
    echo "<br>" . $fieldsValue;

    $sqlInsert = "INSERT INTO books($fieldsSQL) VALUES ($fieldsValue)";
    echo "<br>" . $sqlInsert;

    $insertFlag = $conn->query($sqlInsert);
    var_dump($insertFlag);
}



?>

