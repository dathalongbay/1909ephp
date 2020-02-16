<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\BooksModel;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    //

    public function index() {

        /**
         * Nạp model vào trong controller
         * lấy ra tất cả các bản ghi ::all;
         */
        $books1 = BooksModel::all();

        echo "<pre>";
        print_r($books1);
        echo "</pre>";

        $data = [];

        // key của mảng truyền xuống view chính là tên biến cửa view
        $data["books"] = $books1;

        /**
         * trả về view
         * $data là mảng dữ liệu truyền xuống view
         */
        return view("bookstore.backend.subviews.index", $data);
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


    /**
     *lưu dữ liệu khi tạo mới
     */
    public function store() {

    }

    /**
     *lưu dữ liệu khi cập nhật
     */
    public function update() {

    }

    /**
     * xóa dữ liệu trong db
     */
    public function destroy() {

    }
}
