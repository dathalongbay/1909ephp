<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<pre>
    Sử dụng vòng lặp forearch in ra bảng danh sách các tỉnh thành phố tương
    tự nhu link sau
    Tham khảo wikipedia:
https://vi.wikipedia.org/wiki/Danh_s%C3%A1ch_%C4%91%C6%A1n_v%E1%BB%8B_h%C3%A0nh_ch%C3%ADnh_Vi%E1%BB%87t_Nam_theo_GRDP
</pre>

<?php
$cities = [];
$cities[] = ["name" => "hà nội","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "hồ chí minh","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "đồng nai","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "đồng tháp","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "cà mau","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "an giang","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "tiền giang","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "cần thơ","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "hòa bình","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "ninh bình","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "hà nam","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "hải phòng","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "nam định","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "long an","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "sóc trăng","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "vĩnh long","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "quảng ninh","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "đà nẵng","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "hải phòng","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "lạng sơn","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "thanh hóa","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "nghệ an","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "hà tĩnh","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "huế","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "quảng bình","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "lâm đồng","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "hải dương","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "lào cai","dgp" => rand(100,15000), "boot" => rand(10,100)];
$cities[] = ["name" => "quảng nam","dgp" => rand(100,15000), "boot" => rand(10,100)];
echo "<pre>";
print_r($cities);
echo "</pre>";
?>
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th>Số thứ tự</th>
            <th>Tên tỉnh thành phố</th>
            <th>Tổng GRDP (tỉ VND )</th>
            <th>Tốc độ tăng trưởng</th>
        </tr>
        </thead>
        <tbody>

            <?php foreach($cities as $key_city => $city) {
                /*var_dump($key_city);

                echo "<pre>";
                print_r($city);
                echo "</pre>";
                break;*/
                echo "<tr>
                <td>".($key_city+1)."</td>
                <td>".$city["name"]."</td>
                <td>".$city["dgp"]."</td>
                <td>".$city["boot"]."</td>
            </tr>";

            } ?>
           <!-- <tr>
                <td>1</td>
                <td>Hồ chí mình</td>
                <td>1.331.440</td>
                <td>8,30%</td>
            </tr>-->








        </tbody>
    </table>
</div>

</body>
</html>