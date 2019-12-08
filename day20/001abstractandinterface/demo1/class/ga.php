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

class Ga extends Dongvat implements An , Keu , Sinhsan {


    public function tenloai() {
        echo "tôi là gà";
    }


    public function thongtin() {
        echo "gà là loài 2 chân năng từ 1 đến 3 cân tùy giống gà";
    }


    public function toi_nay_an_gi()
    {
        // TODO: Implement toi_nay_an_gi() method.
        echo "gà ăn thóc";
    }


    public function keu_nhu_the_nao()
    {
        // TODO: Implement keu_nhu_the_nao() method.
        echo "gà kêu cục ta cục tác";
    }

    public function thongtinsinhsan()
    {
        // TODO: Implement thongtinsinhsan() method.
        echo "gà đẻ trứng";
    }
}