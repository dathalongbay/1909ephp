<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <pre>
        Vừa khai báo mảng vừa gán giá trị cho phần tử trong mảng
        // mảng trong php5
        $c = array("nguyen van a", "nguyen van b", "nguyen van c");
        // mảng trong php7
        $d = ["nguyen van a", "nguyen van b", "nguyen van c"];

        => học cách khai báo mảng trước
        và khai báo các phần tử trong mảng sau đó
        => mảng chỉ số mặc định bắt đầu từ 0
    </pre>

    <?php
    // khai báo mảng và sinh key tự động
    $e = [];
    $e[] = "nguyen van a";
    $e[] = "nguyen van b";
    $e[] = "nguyen van c";

    // khai báo mảng và gán key khi khai báo phần tử
    $f = [];
    $f[0] = "nguyen van a";
    $f[1] = "nguyen van b";
    $f[3] = "nguyen van c";

    // khai báo mảng và gán key trong cùng 1 dòng
    // mảng kết hợp là mảng có key là chuỗi
    $g = ["a" => "nguyen van a", "b" => "nguyen van b","c" => "nguyen van c"];

    echo "<pre>";
    print_r($g);
    echo "</pre>";

    ?>
</body>
</html>