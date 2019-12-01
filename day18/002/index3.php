<?php
$cookieName = "user_password";
$cookieValue = "12345";
$lifetime = time() + (86400*30);

setcookie($cookieName, $cookieValue, $lifetime, "/");
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
// thay đổi nội dung của cookie
setcookie($cookieName, "987654321", $lifetime, "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Thay đổi nội dung của 1 cookie
    </pre>

    <?php
    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";
    ?>

</body>
</html>