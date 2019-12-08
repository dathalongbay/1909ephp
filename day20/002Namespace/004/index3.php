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
/**
 * gọi class thuộc namepace mà không nạp namespace
 */

$indexController = new \App\Controllers\Backend\IndexController();
$indexController->getInfo();

$indexModel = new \App\Models\Backend\IndexModel();
$indexModel->getAll();

