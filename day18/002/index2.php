<?php
$cookieName = "user_email";
$cookieValue = "admin@gmail.com";
$lifetime = time() + (86400*30);

setcookie($cookieName, $cookieValue, $lifetime, "/");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
       Hàm setcookie phải được đặt trước thẻ mở html
    </pre>

 <?php

    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";
    ?>

</body>
</html>