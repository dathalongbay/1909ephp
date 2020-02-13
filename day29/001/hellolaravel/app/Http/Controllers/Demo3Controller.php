<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Demo3Controller extends Controller
{
    //

    public function index() {
        echo "<br>" . __METHOD__;

        /**
         * Truyền biến từ controller xuống view
         */
        $data = [];
        $students = [
            ["id" => 1, "name" => "nguyen van an", "age" => 21, "address" => "ha noi"],
            ["id" => 2, "name" => "nguyen van b", "age" => 22, "address" => "bac ninh"],
            ["id" => 3, "name" => "nguyen van c", "age" => 23, "address" => "bac giang"],
        ];
        /**
         * Tên biến truyền xuống view là key của mảng
         * biến $students
         * biến $welcome
         */
        $data["students"] = $students;
        $data["welcome"] = "hello admin";


        /**
         * trả về folder
         * resources/views/demo3/index.blade.php
         */
        return view("demo3.index", $data);
    }

    public function create() {
        echo "<br>" . __METHOD__;
        /**
         * trả về folder
         * resources/views/demo3/create.blade.php
         */
        return view("demo3.create");
    }


    public function index2() {
        return view("demo5.subviews.homepage");
    }


}
