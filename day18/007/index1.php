<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        $_REQUEST = $_POST + $_GET
        $_REQUEST sẽ lấy tất cả dữ liệu mà $_POST hay $_GET lấy được
    </pre>

    <?php
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    ?>

    <form name="abc" method="post" action="">
        <input type="text" value="" name="abcd">
        <input type="submit" value="Gửi dữ liệu" name="submit">
    </form>
</body>
</html>