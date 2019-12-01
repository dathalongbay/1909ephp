<?php
// khởi tạo chức năng của session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Session trong PHP

        Một session là cách để lưu trữ thông tin trong biến mà được sử dụng
        trên toàn bộ các trang trên cùng 1 trang web
        Không giống cookie , thông tin được lưu trữ trên session được lưu trữ trên
        server

        Ứng dụng của session
        1 - làm giỏ hàng trong php để lưu trữ các sản phẩm mà khách hàng muốn mua
        2 - làm chức năng đăng nhập và đăng xuất trong php

        Chú ý để sử dụng session thì đầu file phải để dòng code :
        session_start();

        Để khởi tạo session
        $_SESSION["username"] = "admin";
        Chú ý
        $_SESSION là 1 mảng
    </pre>

    <?php
        // khởi tạo 3 session
        $_SESSION["username"] = "admin";
        $_SESSION["user_email"] = "admin@gmail.com";
        $_SESSION["user_role"] = "administrator";

        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";

        // in ra 1 session cụ thể
    echo "<br>" .  $_SESSION["username"];


    // thay đổi giá trị lưu trữ trong 1 session
    $_SESSION["username"] = "mod";

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    ?>


</body>
</html>