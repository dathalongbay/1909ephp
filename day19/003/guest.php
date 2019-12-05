<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/5/2019
 * Time: 7:22 PM
 */

class Guest {

    public $name;

    public $age;

    public $join_created;

    // số tài khoản ngân hàng
    /**
     * Nhưng thuộc tính hay phương thức có giới hạn quyền truy cập là private
     * thì chỉ có thể truy cập trong chính bản thân class này
     * @var
     */
    private $bank_account_number = "0123456789";

    // tình trạng hôn nhân
    // protected chỉ có thể truy cập trong chính class và các class kết thừa của nó
    protected $status = "độc thân";

    /**
     * method đọc bài viết
     */
    public function viewArticle() {
        echo "<br> Xem bài viết";
    }

    /**
     * method để lại bình luận
     */
    public function postComment(){
        echo "<br> bình luận";
    }


    public function getBankAccount(){
        echo $this->bank_account_number;
    }

}