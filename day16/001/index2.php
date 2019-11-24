<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Mảng kết hợp là mảng có 1 key trở lên là chuỗi
    </pre>

    <?php
    $mobiles = ["xi" => "Xiaomi", "sa" => "Samsung", "op" => "Oppo"];
    $mobiles[5] = "Test";

    echo "<pre>";
    print_r($mobiles);
    echo "</pre>";

    echo "<br>" . $mobiles["xi"];
    echo "<br>" . $mobiles["sa"];
    echo "<br>" . $mobiles["op"];

    foreach ($mobiles as $key_mobiles => $value_mobile) {
        echo "<br> Key : " . $key_mobiles;
        echo "<br> Value : " . $value_mobile;
    }
    ?>

</body>
</html>