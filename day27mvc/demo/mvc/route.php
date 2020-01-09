<?php
namespace MVC;

class Route {


    public function run() {

        // $_REQUEST = $_POST + $_GET
        $controller = (isset($_REQUEST["controller"]) && $_REQUEST["controller"]) ? $_REQUEST["controller"] : "index";
        $action = (isset($_REQUEST["action"]) && $_REQUEST["action"]) ? $_REQUEST["action"] : "index";

        // ucfirst viết hoa chữ cái đầu
        $controller = ucfirst($controller);
        $controllerClassName = "\\MVC\\Controllers\\".$controller."Controller";
        $actionMethodName = $action."Action";

        $controllerObject = new $controllerClassName();
        $controllerObject->$actionMethodName();

       /* if ($controller == "Post") {
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
        }*/


    }
}