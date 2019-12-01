<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Hủy 1 phần tử trong mảng php
        Sử dụng lệnh unset()
    </pre>

    <?php
    $students = [];
    $students[] = "nguyễn văn an";
    $students[] = "nguyễn văn B";
    $students[] = "nguyễn văn C";

    echo "<pre>";
    print_r($students);
    echo "</pre>";

    // hủy phần tử có key là 1
    unset($students[1]);

    echo "<pre>";
    print_r($students);
    echo "</pre>";
    ?>

</body>
</html>