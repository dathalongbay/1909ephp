<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Thời gian trong PHP
        Có 2 kiểu thời gian trong PHP
        1 - Thời gian con người có thể đọc được
        2 - Thời gian tính toán được ( timestamp )
    </pre>

    <?php
    // In ra thời gian hiện tại loại đầu tiên mà người đọc được
    echo "<br> hàm date : " . date("H:i:s d/m/Y");
    // In ra thời gian hiện tại dùng để tính toán timestamp
    echo "<br> timestamp hàm time " . time();
    ?>
</body>
</html>