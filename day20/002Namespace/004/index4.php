<?php
/**
 * Created by PhpStorm.
 * User: T3H
 * Date: 9/9/2019
 * Time: 6:53 PM
 */

include_once "app/controllers/controller.php";
include_once "app/controllers/backend/index.php";
include_once "app/controllers/backend/post.php";
include_once "app/controllers/frontend/index.php";
include_once "app/controllers/frontend/post.php";
include_once "app/models/backend/index.php";


$index = new \App\Controllers\Backend\IndexController();
$index->getInfo2();