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

}