<?php

// Nạp tất cả các file khác vào trong luồng chạy index.php
include_once "mvc/route.php";
include_once "mvc/models/Database.php";
include_once "mvc/controllers/PostController.php";
include_once "mvc/controllers/ProductController.php";
include "mvc/models/PostModel.php";
include "mvc/models/ProductModel.php";
