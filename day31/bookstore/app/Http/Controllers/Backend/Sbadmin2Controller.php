<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Sbadmin2Controller extends Controller
{
    //

    /**
     * trả về dashboard khi đã login
     */
    public function index() {


        return view('bookstore.sbadmin2.subviews.dashboard');
    }
}
