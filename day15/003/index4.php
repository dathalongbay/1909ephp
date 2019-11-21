<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/21/2019
 * Time: 8:38 PM
 */

echo "đếm số ký tự : " . strlen("chào việt nam");
echo "<br>đếm số chữ : " . str_word_count("chao viet nam");
echo "<br>tìm chuỗi nhỏ trong chuỗi mẹ " . strpos("hai phong là 1 tp cang của viet nam nam o phia bac", "viet nam");
$a = strpos("hai phong là 1 tp cang của viet nam nam o phia bac", "han quoc");
echo "<br>";
var_dump($a);

echo "<br> thay thế chuỗi " . str_replace("viet nam", "nhat ban", "chao viet nam");

echo "<br> thay thế chuỗi " . str_replace("han quoc", "nhat ban", "chao viet nam");