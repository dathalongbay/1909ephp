<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class LearndbController extends Controller
{
    //

    public function index($action) {

        $this->$action();
    }


    /*
     * Lấy ra tất cả các bản ghi trong 1 bảng
     * */
    public function demo1() {
        echo __METHOD__;

        $books = DB::table('books')->get();

        foreach ($books as $book) {
            echo '<pre>';
            echo $book->book_name;
            echo $book->book_intro;
        }

        echo '<br>' . DB::table('books')->toSql();

        dump($books);

        dd($books);



    }


    /*
     * Lấy ra 1 bản ghi duy nhất trong 1 bảng cách 1
     * */
    public function demo2() {
        echo __METHOD__;
    }


    /*
     * Lấy ra 1 bản ghi duy nhất trong 1 bảng cách 2
     * */
    public function demo3() {
        echo __METHOD__;
    }

    /*
     * Lấy ra 1 danh sách các cột trong bảng
     * */
    public function demo4() {

    }


    /*
     * count() max() avg()
     * */
    public function demo5() {

    }

    /*
    * select db
    * */
    public function demo6() {

    }


    /*
    * Raw query
    * */
    public function demo7() {

    }


    /*
    * Join laravel
    * */
    public function demo8() {

    }


    /*
    * Join laravel
    * */
    public function demo9() {

    }


    /*
    * Where 1
    * */
    public function demo10() {

    }


    /*
   * Where 2
   * */
    public function demo11() {

    }


    /*
  * Order
  * */
    public function demo12() {

    }


    /*
  * Group
  * */
    public function demo13() {

    }


    /*
  * Inssert
  * */
    public function demo14() {

    }



    /*
  * Update
  * */
    public function demo15() {

    }


    /*
 * Delete
 * */
    public function demo16() {

    }



    /*
 * Bebug
 * */
    public function demo17() {

    }
}
