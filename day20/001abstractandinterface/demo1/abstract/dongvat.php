<?php
/**
 * Created by PhpStorm.
 * User: datdo
 * Date: 8/31/2019
 * Time: 7:06 PM
 *
 * abstract là gi ?
 * interface làm gi ?
 *
 * trong abstract class có thể có các abstract method
 * và method bình thường
 */
abstract class Dongvat {


    /**
     * abstract method có từ khóa abstract trước từ khóa function
     * trong abstract method không có code thực thi
     * @return mixed
     */

    // tên loài
    public abstract function tenloai();

    // thông tin
    public abstract function thongtin();


    /**
     * phương thức thông thường
     */
    public function khainiem() {
        echo "Từ \"animal\" xuất phát từ tiếng Latin animalis, có nghĩa là \"có thở\".[1] 
        Trong sử dụng ngôn ngữ giao tiếp hàng ngày, từ \"động vật\" thường bị sử dụng sai -
         từ \"động vật\" đó dùng để chỉ tất cả các thành viên của giới Animalia trừ con người. Theo nghĩa sinh học, 
        \"động vật\" dùng để chỉ tất cả các thành viên của giới Animalia, bao gồm cả con người.";
    }

}