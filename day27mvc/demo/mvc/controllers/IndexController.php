<?php
namespace MVC\Controllers;

class IndexController {

    public function indexAction() {
        // __METHOD__ in ra tên class và tên method đang được gọi đến
        echo "<br>" . __METHOD__;

        include_once "mvc/views/index/index.php";
    }

    public function createAction() {
// __METHOD__ in ra tên class và tên method đang được gọi đến
        echo "<br>" . __METHOD__;

        include_once "mvc/views/index/create.php";
    }

    public function editAction() {
// __METHOD__ in ra tên class và tên method đang được gọi đến
        echo "<br>" . __METHOD__;

        include_once "mvc/views/index/edit.php";
    }

    public function deleteAction() {
// __METHOD__ in ra tên class và tên method đang được gọi đến
        echo "<br>" . __METHOD__;

        include_once "mvc/views/index/delete.php";
    }

}