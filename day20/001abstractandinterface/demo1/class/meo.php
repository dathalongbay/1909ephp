<?php
/**
 * Created by PhpStorm.
 * User: datdo
 * Date: 8/31/2019
 * Time: 7:16 PM
 */

include_once "../abstract/dongvat.php";
include_once "../interface/an.php";
include_once "../interface/keu.php";
include_once "../interface/sinhsan.php";

class Meo extends Dongvat implements An , Keu , Sinhsan {


    public function tenloai() {
        echo "tôi là mèo";
    }


    public function thongtin() {
        echo "tôi là mèo có 4 chân hay nằm góc bếp";
    }


    public function toi_nay_an_gi()
    {
        // TODO: Implement toi_nay_an_gi() method.
        echo "mèo ăn thịt chuột";
    }


    public function keu_nhu_the_nao()
    {
        // TODO: Implement keu_nhu_the_nao() method.
        echo "mèo kêu meo meo";
    }

    public function thongtinsinhsan()
    {
        // TODO: Implement thongtinsinhsan() method.
        echo "mèo sinh sản mỗi lứa 2 đến 4 con mỗi lứa khoảng 5 tháng";
    }
}