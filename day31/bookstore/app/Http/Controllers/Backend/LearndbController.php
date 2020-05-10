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

        $book = DB::table('books')->where('book_status', 1)->first();

        echo "<br>" . $book->book_name;

        echo "<br>" .  DB::table('books')->where('book_status', 1)->toSql();

        dump($book);

        dd($book);
    }


    /*
     * Lấy ra 1 bản ghi duy nhất trong 1 bảng cách 2
     * */
    public function demo3() {
        echo __METHOD__;

        $book = DB::table('books')->find(2);

        DB::enableQueryLog(); // Enable query log

// Your Eloquent query executed by using get()

        dd(DB::getQueryLog()); // Show results of log

        dd($book);

        dump($book);
    }

    /*
     * Lấy ra 1 danh sách các cột trong bảng
     * */
    public function demo4() {
        $book_names = DB::table('books')->pluck('book_name');

        $book_slug = DB::table('books')->pluck('book_slug');


        dump($book_names);


        dump($book_slug);
    }


    /*
     * count() max() avg()
     * */
    public function demo5() {


        $count = DB::table('books')->count();

        dump($count);

        $maxId = DB::table('books')->max('id');

        dump($maxId);

    }

    /*
    * select db
    * */
    public function demo6() {
        $books = DB::table('books')->select('book_name', 'book_images as anhcuasach')->get();

        dump($books);
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
