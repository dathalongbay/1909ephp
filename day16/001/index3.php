<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Mảng đa chiều
    </pre>

    <?php
    $vietnam = [];
    $vietnam["hn"] = [
        "province" => "Hà nội",
        "district" => [
            "tx" => "Thanh xuân",
            "hk" => "Hoàn kiếm",
            "th" => "Tây hồ",
        ]
    ];

    $vietnam["hcm"] = [
        "province" => "Hồ chí minh",
        "district" => [
            "td" => "Thủ đức",
            "1" => "Quận 1",
            "3" => "Quận 3",
            "7" => "Quận 7",
        ]
    ];

    $vietnam["dn"] = [
        "province" => "Đà nẵng",
        "district" => [
            "lc" => "Liên chiểu",
            "nhs" => "Ngũ hành sơn",
            "hc" => "Hải châu",
            "tk" => "Thanh khê",
        ]
    ];

    echo "<pre>";
    print_r($vietnam);
    echo "</pre>";

    echo "<br>" . $vietnam["hn"]["province"];
    echo "<br>" . $vietnam["hn"]["district"]["tx"];
    echo "<br>" . $vietnam["hcm"]["province"];
    echo "<br>" . $vietnam["hcm"]["district"]["td"];

    foreach($vietnam as $key_province => $value_province) {

        echo "<br> - " .  $value_province["province"];
        /*echo "<pre>";
        print_r($value_province);
        echo "</pre>";*/
        foreach($value_province["district"] as $key_district => $value_district) {
            echo "<br> --" . $key_district . " - " . $value_district;
           /* echo "<pre>";
            print_r($value_district);
            echo "</pre>";*/

        }
    }
    ?>

</body>
</html>