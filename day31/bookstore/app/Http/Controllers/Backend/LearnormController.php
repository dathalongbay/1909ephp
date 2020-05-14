<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\BooksModel;
use App\Models\Backend\CommentsModel;
use App\User;
use Illuminate\Http\Request;

class LearnormController extends Controller
{
    //

    public function index($action) {
        $this->$action();
    }

    // one to one
    public function demo1() {

        $book2 = BooksModel::find(3);
        $author = $book2->author;


        dump($book2);
        dump($author);

    }

    public function demo2() {


        $user = User::find(2);
        $book = $user->book;


        dump($user);
        dump($book);

    }


    public function demo3(){
        $book2 = BooksModel::find(3);
        $comments = $book2->comments;
        dump($book2);
        dump($comments);
    }


    public function demo4() {

        $comment = CommentsModel::find(1);
        $book = $comment->book;
        dump($comment);
        dump($book);
    }


}
