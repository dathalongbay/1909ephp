<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <pre>
        Khi mà thuộc tính action="" của form
        thì có nghĩa là form khi submit dữ liệu
        sẽ gửi đến đường dẫn URL hiện tại
        $_POST là 1 mảng
    </pre>




    <form name="login" action="process.php" method="post">
        <p>
            <label>Username</label>
            <input name="username" type="text" value="">
        </p>

        <p>
            <label>Password</label>
            <input name="password" type="password" value="">
        </p>

        <p>
            <input type="submit" name="submit" value="Login">
        </p>
    </form>


</body>
</html>