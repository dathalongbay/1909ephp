<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Mảng trong PHP ?
        Mảng là 1 kiểu dữ liệu trong PHP có thể chứa nhiều giá trị
        Mảng chứa phần tử ( và các phần tử được tạo thành từ 2 yếu tố )
        Yếu tố 1 là key ( chỉ số ) Yếu tố 2 là value ( giá trị )
        Mảng được chia thành 3 kiểu mảng
        Kiểu 1 là mảng chỉ số Indexed arrays ( tất cả các key trong mảng
        đều là số )
        Kiểu 2 là mảng kết hợp Associative arrays ( khi có 1 key trở lên trong
        mảng là chuỗi )
        Kiểu 3 là mảng đa chiều Multidimensional arrays ( mảng lồng mảng có nghĩa
        mỗi 1 phần tử trong mảng là 1 mảng con )
    </pre>

    <?php
    $mobiles = ["Oppo", "Xiaomi", "Samsung", "Vinsmart"];

    // in ra cấu trúc của cả mảng
    echo "<pre>";
    print_r($mobiles);
    echo "</pre>";

    // Truy xuất vào từng phần tử trong mảng
    echo "<br>" . $mobiles[0];
    echo "<br>" . $mobiles[1];
    echo "<br>" . $mobiles[2];
    echo "<br>" . $mobiles[3];

    // Đếm số phần tử trong mảng
    echo "<br> Tổng số phần tử trong mảng " . count($mobiles);

    // Kiểm tra 1 biến có phải là 2 mảng không
    $checkArray = is_array($mobiles);
    echo "<br> test thử hàm is_array để kiểm tra mảng ";
    var_dump($checkArray);

    // Muốn kiểm tra mảng có rỗng hay không
    $checkEmpty = empty($mobiles);
    echo "<br> empty() trả về true nếu mảng rỗng trả về false nếu mảng không rỗng ";
    var_dump($checkEmpty);

    foreach ($mobiles as $key_mobiles => $value_mobile) {
        echo "<br> Key : " . $key_mobiles;
        echo "<br> Value : " . $value_mobile;
    }

    ?>

</body>
</html>