<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/19/2019
 * Time: 7:09 PM
 */

/**
 * Cách 2 kết nối CSDL mysql bằng mysqli như theo hướng hàm
 */
// biến 1 : IP máy chủ MYSQL
// trên máy tính local thì nhập là "localhost"
$mysqlServer = "localhost";
// Biến 2 : username để kết nối đến máy chủ CSDL mysql
$mysqlUser = "root";
// Biến 3 : password để kết nối đến máy chủ mysql
$mysqlPassword = "";
// Biến 4 : tên cơ sở dữ liệu đã có sẵn nếu cần kết nối đến CSDL luôn
$mysqlDatabaseName = "ngay19thang12";

// tạo kết nối
$connection = mysqli_connect($mysqlServer, $mysqlUser, $mysqlPassword, $mysqlDatabaseName);


// kiếm tra lỗi
if (!$connection) {
    die("kết nối đến CSDL bị lỗi " . mysqli_connect_error());
}

echo "<br> Kết nối thành công";