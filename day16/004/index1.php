<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <pre>
        - isset() để kiểm tra 1 biến có tồn tại hay không
        nếu biến tồn tại isset() trả về true
        nếu biến không tồn tại isset() trả về false
        - header("Location: url")
        hàm header trong PHP được dùng để chuyển hướng URL
        đến 1 trang khác sau header nhớ dùng lệnh exit();
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

        <?php
        if (isset($_GET["message"])) {
            ?>
            <p style="color:red"><?php echo $_GET["message"] ?></p>
            <?php
        }
        ?>
    </form>


</body>
</html>