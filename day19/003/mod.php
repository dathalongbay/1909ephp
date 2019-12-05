<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/5/2019
 * Time: 7:22 PM
 */

/**
 * Class Mod
 * Kế thừa từ class khác bằng cách sử dụng từ khóa extends
 */
class Mod extends Guest {

    public $approve_comment;

    public $manager_guest;

    /**
     * duyệt comment của người dùng
     */
    public function approveComment(){
        echo "<br> duyệt comment";
    }


    /**
     * đồng ý hoặc loại người dùng ra khỏi diễn đàn
     */
    public function manageGuest(){
        echo "<br> quản lý người dùng đồng ý hay ban 1 người dùng";
    }

    public function getStatusInfo() {
        // truy cập thuộc tính protected của class Guest
        echo "<br>" . $this->status;
    }
}