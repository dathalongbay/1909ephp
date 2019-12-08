<?php
/**
 * file index.php đang nằm cùng cấp
 * với folder app không có dòng khai báo namespace nào cả
 * điều đó có nghĩa là file index.php đang ở trong global namespace
 *
 * Khi đang ở trong global namespace thì khi nạp
 * namespace khác thì sẽ \ ( xược ngược ) ở trước tên của các namespace khác
 */
include_once "app/controllers/controller.php";
include_once "app/controllers/backend/index.php";
include_once "app/controllers/backend/post.php";
include_once "app/controllers/frontend/index.php";
include_once "app/controllers/frontend/post.php";
include_once "app/models/backend/index.php";

/**
 * Muốn khởi tạo 1 đổi tượng từ class
 * IndexController nằm trong folder app/controllers/backend
 * Việc đầu tiên ?
 */
// nạp namespace bằng use cách 2

/**
 * Sử dụng bí danh khi nạp 2 class thuộc 2 namespace khác nhau
 * nhưng lại trùng tên class cuối cùng
 */
use \App\Controllers\Backend\IndexController as BE_IndexController;
use \App\Controllers\Frontend\IndexController as FE_IndexController;
use \App\Models\Backend\IndexModel;

$indexController1 = new BE_IndexController();
$indexController1->getInfo();

$indexController2 = new FE_IndexController();
$indexController2->getInfo();

