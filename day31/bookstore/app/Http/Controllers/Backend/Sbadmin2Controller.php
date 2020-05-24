<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Sbadmin2Controller extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('sblogin')->except(['login', 'register', 'loginTask', 'registerTask', 'logout']);
    }

    /**
     * trả về dashboard khi đã login
     */
    public function index() {


        return view('bookstore.sbadmin2.subviews.dashboard');
    }


    public function login() {
        return view('bookstore.sbadmin2.subviews.login');
    }

    public function register() {


        return view('bookstore.sbadmin2.subviews.register');
    }

    /**
     * nhận login của người dùng
     */
    public function loginTask(Request $request) {

        /*echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        die;*/
       //$request = $_POST + $_GET

        $username = $request->input('username');
        $password = $request->input('password');

        if ($username == 'admin' && $password == '123') {
            // tạo ra 1 session login thành công
            session(['sblogin' => [
                'username' => 'admin',
                'password' => '123'
            ]]);

            // chuyển hướng về dashboard sau khi login thành công
            return redirect('/backend/sbadmin2')->with('status', 'Đăng nhập thành công!');
        }

        //
        // sai thông tin đăng nhập trả về view đăng nhập kèm thông báo lỗi
        return redirect('/backend/sbadmin2/login')->with('status', 'Username hoặc mật khẩu không đúng!');
    }


    public function logout(Request $request) {
        // Forget a single key...
        $request->session()->forget('sblogin');

        $request->session()->flush();

        return redirect('/backend/sbadmin2/login')->with('status', 'Đăng xuất thành công!');
    }


    /**
     * nhận register của người dùng
     */
    public function registerTask(Request $request) {

    }
}
