<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
       Xử lý file trong PHP
        sử dụng hàm fopen() fread() fclose
    </pre>

    <?php
    $myfile = fopen("demo.txt", "r") or die("Không thể mở file");
    echo fread($myfile,filesize("demo.txt"));
    fclose($myfile);
    ?>
</body>
</html>