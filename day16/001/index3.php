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
    ?>

</body>
</html>