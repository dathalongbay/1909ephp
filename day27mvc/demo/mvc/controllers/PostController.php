<?php
namespace MVC\Controllers;

class PostController {

    public function indexAction() {
        // __METHOD__ in ra tên class và tên method đang được gọi đến
        echo "<br>" . __METHOD__;

        include_once "mvc/views/post/index.php";
    }

    public function createAction() {
// __METHOD__ in ra tên class và tên method đang được gọi đến
        echo "<br>" . __METHOD__;

        include_once "mvc/views/post/create.php";
    }

    public function editAction() {
// __METHOD__ in ra tên class và tên method đang được gọi đến
        echo "<br>" . __METHOD__;

        include_once "mvc/views/post/edit.php";
    }

    public function deleteAction() {
// __METHOD__ in ra tên class và tên method đang được gọi đến
        echo "<br>" . __METHOD__;

        include_once "mvc/views/post/delete.php";
    }

}