@extends("bookstore.backend.layouts.main")

@section("title", "Danh sách books")

@section("content")
    <div class="row">
        <h1>Quản lý sách</h1>
        <div class="col-md-12">
            <a href="create.html" class="btn btn-info">Thêm sách</a>
        </div>
        <div class="col-md-12">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên sách</th>
                    <th scope="col">Giá bán</th>
                    <th scope="col">Hành động</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <a href="edit.html" class="btn btn-warning">Sửa</a>
                        <a href="delete.html" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <a href="edit.html" class="btn btn-warning">Sửa</a>
                        <a href="delete.html" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
