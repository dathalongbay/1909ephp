<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Thay đổi múi giờ trong PHP
        date_default_timezone_set("America/New_York");
        danh sách timezone
        https://www.php.net/manual/en/timezones.php
        https://www.php.net/manual/en/timezones.asia.php


        date_default_timezone_set("Asia/Ho_Chi_Minh");
        date_default_timezone_get();

    </pre>

    <?php
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    // In ra thời gian hiện tại loại đầu tiên mà người đọc được
    echo "<br> hàm date : " . date("H:i:s d/m/Y");
    // In ra thời gian hiện tại dùng để tính toán timestamp
    echo "<br> timestamp hàm time " . time();
    echo "<br> múi giờ hiện tại " .  date_default_timezone_get();
    ?>
</body>
</html>