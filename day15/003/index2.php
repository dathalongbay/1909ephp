<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Hằng số trong PHP
        Hằng số cũng giống như biến trong PHP
        cũng có khả năng lưu trữ giá trị
        nhưng khác với biến .
        Hằng số không thay đổi giá trị trong suốt quá trình chạy
        Sử dụng hàm define để khai báo hằng số
        Hằng số không cần sử dụng $ khi khai báo như biến
    </pre>

    <?php
    define("DIENTICHVIETNAM", 331000);
    echo "Diện tích việt nam là : " . DIENTICHVIETNAM . " KM2";
    ?>
</body>
</html>