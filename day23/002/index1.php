<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/19/2019
 * Time: 6:47 PM
 */

/**
 * Có 2 cách kết nối đến CSDL trong php
 * cách 1 : MySQLi extension (the "i" stands for improved)
 * cách 2 : PDO (PHP Data Objects)
 */

/**
 * Cách 1 : Sử dụng MYSQLI theo kiểu hướng đối tượng
 * để kết nối đến CSDL
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

// tạo 1 kết nối đến CSDL
$connection = new mysqli($mysqlServer, $mysqlUser, $mysqlPassword, $mysqlDatabaseName);

/**
 * Kiểm tra xem kết nối đến CSDL có lỗi không
 * $connection->connect_error khác 0,null,false
 */
if ($connection->connect_error) {
    // nếu có lỗi xảy ra
    // có thể CSDL không tồn tại
    // hay kết nối máy chủ CSDL bị lỗi
    // hay sai username và password

    // ngắt chương trình bằng lệnh die
    // và show cái lỗi đang gặp phải
    die("kết nối đến CSDL bị lỗi " . $connection->connect_error);

}

echo "<br> Kết nối đến CSDL mysql thành công";



