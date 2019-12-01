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

        r	Open a file for read only. File pointer starts at the beginning of the file
        r	Mở 1 file chỉ để đọc . Con trỏ bắt đầu từ đầu file
        r+	Open a file for read/write. File pointer starts at the beginning of the file
        r+	Mở 1 file để đọc và ghi . Con trỏ bắt đầu từ đầu file
    </pre>

    <?php
    $myfile = fopen("demo.txt", "r") or die("Không thể mở file");
    echo fread($myfile,filesize("demo.txt"));
    fclose($myfile);
    ?>
</body>
</html>