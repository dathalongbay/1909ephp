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

        if (class_exists($controllerClassName)) {
            $controllerObject = new $controllerClassName();

            if(method_exists($controllerObject,$actionMethodName )) {
                $controllerObject->$actionMethodName();
            } else {
                $controllerClassName = "\\MVC\\Controllers\\ErrorController";
                $controllerObject = new $controllerClassName();
                $controllerObject->redirect404();
            }

        } else {
            $controllerClassName = "\\MVC\\Controllers\\ErrorController";
            $controllerObject = new $controllerClassName();
            $controllerObject->redirect404();
        }



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