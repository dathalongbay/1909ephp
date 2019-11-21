<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Chú ý về quy tắc nháy kép chứa nháy đơn
        và nháy đơn chứa nháy kép
        cũng như ký tự escape khi xuất chuỗi

        Yêu cầu :
        In ra câu nói của bác hồ
        'Không có gì quý hơn độc lập tự do'
    </pre>

    <?php
    // lệnh php
    // cách 1 sử dụng nháy kép chứa nháy đơn
    echo "'Không có gì quý hơn độc lập tự do'";
    echo "<br>";
    // cách 2 sử dụng ký tự escape \ để php hiểu đâu là nháy kép thuộc chuỗi
    echo '\'Không có gì quý hơn độc lập tự do\'';
    ?>

</body>
</html>