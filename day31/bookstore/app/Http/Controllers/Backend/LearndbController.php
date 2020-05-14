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

        DB::enableQueryLog();

        $count = DB::table('books')->count();

        dump($count);

        $maxId = DB::table('books')->max('id');

        dump($maxId);
        dump(DB::getQueryLog());
    }

    /*
    * select db
    * */
    public function demo6() {

        DB::enableQueryLog();

        $books = DB::table('books')->select('book_name', 'book_images as anhcuasach')->get();

        dump($books);

        dump(DB::getQueryLog());
    }


    /*
    * Raw query
    * */
    public function demo7() {

        DB::enableQueryLog();

        $res = DB::table('books')
            ->select(DB::raw('book_author, count(*) as total'))
            ->groupBy('book_author')
            ->get();

        dump($res);

        dump(DB::getQueryLog());
    }


    /*
    * Join laravel
    * */
    public function demo8() {

        DB::enableQueryLog();
        $books = DB::table('books')
            ->select('books.book_name', 'books.book_author', 'users.email as email_tac_gia')
            ->leftJoin('users', 'users.name', '=', 'books.book_author')
            ->get();
        dump($books);

        dump(DB::getQueryLog());


    }


    /*
    * Where
    * */
    public function demo9() {

        DB::enableQueryLog();

        $books = DB::table('books')
            ->where('book_author', 'like', 't%')
            ->get();

        dump($books);

        dump(DB::getQueryLog());
    }


    /*
    * Where 1
    * */
    public function demo10() {
        DB::enableQueryLog();
        // multi where toán tử and

        $books = DB::table('books')->where([
            ['book_author', 'like', 't%'],
            ['book_status', '=', '1'],
        ])->get();

        dump($books);

        dump(DB::getQueryLog());
    }


    /*
   * Where 2
   * */
    public function demo11() {

        DB::enableQueryLog();

        $books = DB::table('books')
            ->where('book_author', 'like', 't%')
            ->orWhere('book_name', '=', 'Nell Ford')
            ->get();


        dump($books);

        dump(DB::getQueryLog());
    }


    /*
  * Order
  * */
    public function demo12() {

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
