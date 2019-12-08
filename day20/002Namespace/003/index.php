<?php
include_once "app/controllers/controller.php";
include_once "app/controllers/backend/index.php";
include_once "app/controllers/backend/post.php";
include_once "app/controllers/frontend/index.php";
include_once "app/controllers/frontend/post.php";

/**
 * Muốn khởi tạo 1 đổi tượng từ class
 * IndexController nằm trong folder app/controllers/backend
 * Việc đầu tiên ?
 */

// cách 1 sử dụng đầy đủ namespace khi khởi tạo đối tượng
$indexController = new \App\Controllers\Backend\IndexController();
$indexController->getInfo();

$indexController1 = new \App\Controllers\Frontend\IndexController();
$indexController1->getInfo();