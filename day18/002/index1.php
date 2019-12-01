<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <pre>
        Cookie là gì ?
        Cookie thường được sử dụng để nhận diện người dùng . Một coolie là 1 file
        nhỏ mà server nhúng vào trong máy tính của người dùng . Mỗi lần cùng 1 máy tính
        gửi yêu cầu truy cập đến 1 trang trên trình duyệt nó sẽ gửi đi 1 cookie tương
        tự như những lần trước . Với PHP bạn có thể tạo và lấy giá trị của cookie

        Cú pháp tạo 1 cookie

        setcookie(name, value, expire, path, domain, secure, httponly);
        tham số 1 là tên cookie
        tham số 2 là giá trị
        tham số 3 là thời gian sống cookie
        tham số 4 đường dẫn của cookie
        tham số 5 tên miền


    </pre>

    <?php
    $cookieName = "username";
    $cookieValue = "administrator";
    $lifetime = time() + (86400*30);

    setcookie($cookieName, $cookieValue, $lifetime, "/");

    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";

    // in ra cookie truy cập vào 1 cookie
    echo "<br> username : " . $_COOKIE["username"];
    ?>



</body>
</html>