<?php
class Student {

    public function getInfo(){
        echo "<br>" . __METHOD__;
    }

}

class Teacher {

}

class Course {

}

// cách 1 đơn giản
$an = new Student();
$an->getInfo();
$minh = new Teacher();
$php = new Course();

// cách 2 quy tên class và tên phương thức thành biến
$className1 = "Student"; // $_GET[]
$chi = new $className1();
$methodName1 = "getInfo"; // // $_GET[]
$chi->$methodName1();

//


