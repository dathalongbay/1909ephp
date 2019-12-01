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
        Hủy toàn bộ session trong php
    </pre>

    <?php
    // khởi tạo 3 session
    $_SESSION["username"] = "admin";
    $_SESSION["user_email"] = "admin@gmail.com";
    $_SESSION["user_role"] = "administrator";

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";


    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    ?>


</body>
</html>