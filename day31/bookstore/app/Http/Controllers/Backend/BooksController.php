<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    //

    public function index() {

        /**
         * trả về view
         */
        return view("bookstore.backend.subviews.index");
    }


    public function create() {
        /**
         * trả về view
         */
        return view("bookstore.backend.subviews.create");
    }

    public function edit() {
        /**
         * trả về view
         */
        return view("bookstore.backend.subviews.edit");
    }

    public function delete() {
        /**
         * trả về view
         */
        return view("bookstore.backend.subviews.delete");
    }
}
