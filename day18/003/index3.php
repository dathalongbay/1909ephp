<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
       tạo thời gian bằng hàm
        mktime(hour, minute, second, month, day, year)
        kết quả trả về là dạng thời gian timestamp

    </pre>

    <?php
        $time2000 = mktime(12, 0,0,1,1,2000);

        echo "<br>" . $time2000;

        // chuyển kết quả về thời gian đọc được
    // tham số 1 của date() là định dạng format thời gian
    // tham số 2 sẽ là timestamp nếu không truyền tham số 2 nó lấy thời gian hiện tại
    echo "<br>" . date("H:i:s d/m/Y", $time2000);
    ?>
</body>
</html>