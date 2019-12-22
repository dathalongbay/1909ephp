<?php

if (isset($_POST["action"])) {
    if ($_POST["action"] == "edit") {
        // code edit
    } elseif ($_POST["action"] == "delete") {
        // code delete
    } else {
        // code thêm mới

        /**
         * định nghĩa các trường dữ liệu hợp lệ bên trong bảng books
         */
        $bookFields = ["book_name", "book_intro", "book_thumbnail",
            "book_images", "book_price", "book_sell", "book_author", "book_publisher",
            "created" , "updated", "book_hit", "book_buy", "book_status", "book_desc"];

        $data = [];
        foreach($bookFields as $fieldName) {
            if (isset($_POST[$fieldName])) {
                $data[$fieldName] = $_POST[$fieldName];
            }
        }

        echo "<pre>";
        print_r($data);
        echo "</pre>"; die;
    }
}

?>

