<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/12/2019
 * Time: 8:52 PM
 */

/**
 * Closure chính là hàm ẩn danh nhưng mà nó có thể sử dụng những biến ngoài
 * khi mà mình khai báo hàm ẩn danh
 */

function hello($name) {
    echo "<br> chào " . $name;
}

hello("tuấn");

$abc = " phiên bản 7";
$abc1 = " , phiên bản 5";
$php = function () use ($abc, $abc1){
    return "PHP" . $abc . $abc1;
};

// khi mà gọi hàm ẩn danh gọi : tenHam();
hello( $php() );
