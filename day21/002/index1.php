<?php
/**
 * Lambda là 1 hàm không có tên
 * Có những hàm chỉ dùng 1 lần duy nhất sinh ra lambda
 */

function tinhchuvihinhtron($r) {
    return $r*2*3.14;
}

function hello($name) {
    echo "<br> chào " . $name;
}

hello("tuấn");

// hàm ẩn danh kết thúc bằng dấu ;
$php = function (){
    return "PHP";
};

// khi mà gọi hàm ẩn danh gọi : tenHam();
hello( $php() );