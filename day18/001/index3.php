<?php
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
        Hủy 1 session php
    </pre>

<?php
        // khởi tạo 3 session
        $_SESSION["username"] = "admin";
        $_SESSION["user_email"] = "admin@gmail.com";
        $_SESSION["user_role"] = "administrator";

        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";

        unset($_SESSION["user_email"]);

        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";

        ?>

</body>
</html>