<?php
/**
 * Bài toán thực tế ví dụ :
 * Trong diễn đàn sẽ có 3 đối tượng người dùng
 * Người dùng cấp độ 1 : khách truy cập trang
 * Khách chỉ được xem bài viết và để lại phần bình luận
 * Người dùng cấp độ 2 : Mod
 * Mod có quyền duyệt bình luận, cấm người dùng thông thường
 * Người dùng cấp độ 3 : Quản trị viện administrator
 * Quản trị viên có quyền cao nhất có thể tạo ra bài viết
 * thêm , sửa thông tin của Mod và có tất cả quyền của Mod
 */

/**
 * tạo ra 3 class
 * class Guest {}
 * class Mod {}
 * class Admin {}
 */

// Nạp file vào trong file hiện tại
include_once "guest.php";
include_once "mod.php";
include_once "admin.php";

$guest1 = new Guest();
// Fatal error: Uncaught Error: Cannot access private property
// echo "<br>" . $guest1->bank_account_number;
$guest1->getBankAccount();

echo "<pre>";
print_r($guest1);
echo "</pre>";

// Fatal error: Uncaught Error: Cannot access protected property
// echo $guest1->status;


$mod1 = new Mod();
// Fatal error: Uncaught Error: Cannot access protected property Mod::$status
//echo $mod1->status;
echo $mod1->getStatusInfo();

/**
 * 3 nơi để truy cập
 * bên ngoài của class
 * bên trong chính class đó
 * bên trong class kế thừa từ 1 class cha
 *
 * giới hạn public cho thuộc tính và phương thức thì có thể truy ở cả 3 nơi trên
 * private chỉ có thể truy cập trong chính class đó
 * protected giống private nhưng có thể truy cập từ các class con
 */
