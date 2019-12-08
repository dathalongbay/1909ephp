<?php
namespace App\Controllers\Backend;
use App\Models\Backend\IndexModel;

class IndexController {


    public function getInfo() {
        echo "<br>" . __METHOD__;
    }

    public function getInfo2() {
        $model = new IndexModel();
        $model->getAll();
    }
}

