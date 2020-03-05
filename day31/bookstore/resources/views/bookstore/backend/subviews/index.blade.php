@extends("bookstore.backend.layouts.main")

@section("title", "Danh sách books")

@section("content")
    <div class="row">
        <h1>Quản lý sách</h1>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="col-md-12">
            <a href="{{ url("/backend/create") }}" class="btn btn-info">Thêm sách</a>
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
                    @foreach($books as $book)
                    <tr>
                        <th scope="row">{{ $book->id }}</th>
                        <td>{{ $book->book_name }}</td>
                        <td>{{ $book->book_price_sell }}</td>
                        <td>
                            <a href="edit.html" class="btn btn-warning">Sửa</a>
                            <a href="delete.html" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
