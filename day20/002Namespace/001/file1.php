<?php
/**
 * Created by PhpStorm.
 * User: T3H
 * Date: 8/26/2019
 * Time: 7:58 PM
 */

class Student {

    public function demo1() {
        echo "DEMO 1";
    }
}

class Student {

    public function demo2() {
        echo "DEMO 2";
    }
}

/**
 * Cannot declare class Student, because the name is already in use in
 * khi mà 2 class , 2 function trùng tên nhau
 * bị xung đột bị lỗi
 * => để giải quyết vấn đề trùng tên
 * người ta sử dụng namespace ( không gian tên )
 *
 */
$student = new Student();

