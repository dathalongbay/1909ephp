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

    public function edit($id) {

        var_dump($id);

        /**
         * trả về view
         */
        $book = BooksModel::find($id);

        $data = [];

        // key của mảng truyền xuống view chính là tên biến cửa view
        $data["book"] = $book;

        return view("bookstore.backend.subviews.edit", $data);
    }

    public function delete($id) {
        /**
         * trả về view
         */

        /**
         * trả về view
         */
        $book = BooksModel::find($id);

        $data = [];

        // key của mảng truyền xuống view chính là tên biến cửa view
        $data["book"] = $book;

        return view("bookstore.backend.subviews.delete", $data);
    }


    /**
     *lưu dữ liệu khi tạo mới
     */
    public function store(Request $request) {

        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        /*
         * $request là object của class Request
         * được sử dụng để lấy dữ liệu từ form post hoặc từ trên url của trình duyệt
         */

        $book = new BooksModel();
        $book->book_name = $request->book_name;
        $book->book_slug = $request->book_slug;
        $book->book_intro = $request->book_intro;
        $book->book_desc = $request->book_desc;
        $book->book_main_image = $request->book_main_image;
        $book->book_images = $request->book_images;
        $book->book_author = $request->book_author;
        $book->book_price_core = $request->book_price_core;
        $book->book_price_sell = $request->book_price_sell;
        $book->book_status = $request->book_status;
        $book->save();

        return redirect('backend/index')->with('status', 'Đã thêm cuốn sách thành công!');
    }

    /**
     *lưu dữ liệu khi cập nhật
     */
    public function update(Request $request, $id) {

        $book = BooksModel::find($id);

        $book->book_name = $request->book_name;
        $book->book_slug = $request->book_slug;
        $book->book_intro = $request->book_intro;
        $book->book_desc = $request->book_desc;
        $book->book_main_image = $request->book_main_image;
        $book->book_images = $request->book_images;
        $book->book_author = $request->book_author;
        $book->book_price_core = $request->book_price_core;
        $book->book_price_sell = $request->book_price_sell;
        $book->book_status = $request->book_status;
        $book->save();

        return redirect('backend/index')->with('status', 'Cập nhật cuốn sách thành công!');
    }

    /**
     * xóa dữ liệu trong db
     */
    public function destroy(Request $request, $id) {
        var_dump($id);
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        //die;

        $book = BooksModel::find($id);

        $book->delete();

        return redirect('backend/index')->with('status', 'Xóa cuốn sách thành công!');

    }
}
