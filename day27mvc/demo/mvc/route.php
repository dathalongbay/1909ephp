<?php
namespace MVC;

class Route {


    public function run() {

        // $_REQUEST = $_POST + $_GET
        $controller = $_REQUEST["controller"];
        $action = $_REQUEST["action"];

        // ucfirst viết hoa chữ cái đầu
        $controller = ucfirst($controller);

        if ($controller == "Post") {
            $controllerObject = new \MVC\Controllers\PostController();

            if ($action == "index") {
                $controllerObject->indexAction();
            } elseif ($action == "create") {
                $controllerObject->createAction();
            } elseif ($action == "edit") {
                $controllerObject->editAction();
            } elseif ($action == "delete") {
                $controllerObject->deleteAction();
            }
        } else if ($controller == "Product") {
            $controllerObject = new \MVC\Controllers\ProductController();

            if ($action == "index") {
                $controllerObject->indexAction();
            } elseif ($action == "create") {
                $controllerObject->createAction();
            } elseif ($action == "edit") {
                $controllerObject->editAction();
            } elseif ($action == "delete") {
                $controllerObject->deleteAction();
            }
        }


    }
}