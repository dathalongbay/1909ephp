<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/5/2019
 * Time: 8:47 PM
 */

/**
 * Đa kế thừa trong PHP
 * Đơn kế thừa sẽ sử dụng từ khoa extends
 *
 * Đa kế thừa trong PHP sử dụng trait
 *
 * Bài toán
 * điện thoại thông minh kế thừa từ điện thoại phổ thông gồm tính năng
 * nghe gọi và sms
 *
 * nhưng điện thoại thông minh muốn tích hợp máy tính vào trong chính nó
 * để có thể gửi và nhận email, soạn thảo văn bản, chơi game
 * cũng như điện thoại thông minh muốn tích hợp tính năng của máy ảnh
 * vào trong chính nó
 * và tích hợp radio nghe đài vào trong chính nó
 */


class ClassicPhone {

    public $name;

    public function goiDien() {
        echo "<br> gọi điện";
    }

    public function guiSms() {
        echo "<br> guiSms";
    }
}

trait Computer {

    public function sendEmail() {
        echo "<br> sendEmail";
    }

    public function playGame() {
        echo "<br> chơi game";
    }

    public function office() {
        echo "<br> soan thảo văn bản";
    }

}

trait Radio {

    public function ngheDaiRadio() {
        echo "<br> ngheDaiRadio";
    }
}

trait Camera {


    public function chupanh() {
        echo "<br> chụp ảnh";
    }
}


class SmartPhone extends ClassicPhone {

    // kế thừa từ các trait bằng từ khóa use
    use Computer,Radio,Camera;
}

$sony = new SmartPhone();
$sony->goiDien();
$sony->chupanh();
$sony->ngheDaiRadio();
$sony->office();

