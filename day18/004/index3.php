<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Tạo và ghi nội dung vào 1 file trong PHP
    </pre>

    <?php
    $myfile = fopen("write.txt", "w");
    $content = "
        Dòng số 1
        Dòng số 2
        Dòng số 3
    ";
    fwrite($myfile, $content);
    fclose($myfile);


    ?>
</body>
</html>