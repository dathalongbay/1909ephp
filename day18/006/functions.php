<?php
echo "<br> Mỗi lần gọi : " . __FILE__;

if (!function_exists("tinhShinhtron")) {
    function tinhShinhtron($r) {

        echo "<br>" . __FUNCTION__;

        $s = 3.14*$r*$r;
        return $s;
    }
}
