<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Chuyển đổi qua lại giữa 2 định dạng thời gian
        - định dạng 1 là người đọc 12:05:05 23/12/2008
        - định dạng 2 là timestamp 946724400

        Thực hành strtotime()
    </pre>

    <?php
    $time1 = "12:05:05 23-12-2008";

    echo "<br> Thời gian 1 : 12:05:05 23-12-2008";

    $time2 = strtotime($time1);
    echo "<br> demo strtotime : ". $time2;

    // chuyên ngược lại thì date()
    echo "<br> chuyển đổi ngược lại xem có đúng ko : " . date("H:i:s d/m/Y", $time2);
    ?>
</body>
</html>