<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Demo5Controller extends Controller
{
    //

    public function homepage(){
        // chú ý là trả về view
        return view("demo5.subviews.homepage");
    }

    public function intro() {
        return view("demo5.subviews.intro");
    }

    public function contact() {
        return view("demo5.subviews.contact");
    }
}
