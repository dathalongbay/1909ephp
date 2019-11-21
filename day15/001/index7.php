<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Mảng là gì
        Mảng là kiểu dữ liệu chứa nhiều giá trị
        Mảng trong php được khai báo bởi
        $a = array();
        trong PHP7 thì người ta khai báo bằng cú pháp []
        $a = [];

        Trong mảng sẽ chứa các phần tử
        các phần tử được phân tách bởi dấu ,

        Chú ý : không thể in ra mảng bằng echo

        trong mảng chứa nhiều phần tử
        mỗi phần tử thì có 2 khái niệm tạo ra 1 phần tử
        - key ( hay còn gọi là là chỉ số của phần tử )
        - value ( giá trị của phần tử )
    </pre>

    <?php
    // mảng số nguyên
    $a = array(1,2,5,9,11,15);
    // mảng số thực
    $b = array(3.1,3.5,5.7,9.2);
    // mảng chuỗi
    $c = array("nguyen van a", "nguyen van b", "nguyen van c");
    // mảng boolean
    $d = array(true, false, true, true);
    // mảng hỗn hợp
    $e = array(1,"nguyen van a", true, 3.5);

    // in ra 1 mảng
    echo "<pre>";
    print_r($a);
    echo "</pre>";
    // in ra 1 mảng
    echo "<pre>";
    print_r($b);
    echo "</pre>";

    // in ra 1 mảng
    echo "<pre>";
    print_r($c);
    echo "</pre>";

    // in ra 1 mảng
    echo "<pre>";
    print_r($d);
    echo "</pre>";

    // in ra 1 mảng
    echo "<pre>";
    print_r($e);
    echo "</pre>";

    // thử in ra từng phần tử của mảng

    /// foreach đi với mảng
    foreach($c as $key => $value) {
        echo "<br>" . $key . " - " . $value;
    }


    ?>
</body>
</html>