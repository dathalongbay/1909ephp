<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/5/2019
 * Time: 8:29 PM
 */

class Demo {

    public static $pro1;

    public $pro2;

    public function method1() {
        echo "<br> method1";
        $this->pro2 = "abc";
    }


    public static function method2() {
        echo "<br> static method2";
        // chú ý trong 1 phương thức static thì không được phép
        // sử dụng từ khóa $this để gọi chính nó
        // $this->pro2 = 'abc';

        // muốn truy cập đến thuộc tính static
        self::$pro1 = "a1234";
    }

}

/**
 * gọi đến các thuộc tính và phương thức static
 * mà không cần khởi tạo đối tượng
 * gọi static bằng cách ClassName::PropertyName
 * ClassName::MethodName
 *
 * mục đich chính gọi đến thuộc tính và phương thức 1 cách nhanh chóng
 * mà không cần khởi tạo đói tượng
 */
Demo::$pro1 = "abc";
Demo::method2();