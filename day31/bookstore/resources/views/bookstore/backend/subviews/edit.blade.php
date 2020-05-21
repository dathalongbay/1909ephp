@extends("bookstore.backend.layouts.main")

@section("title", "tạo books")
@section("content")
    <div class="row">
        <h1>Sửa sách</h1>
        <div class="col-md-12">
            <a href="index.html" class="btn btn-info">Quay về</a>
        </div>
        <div class="col-md-12">


            <form name="book" action="{{ url("/backend/edit/$book->id") }}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="form-group">
                    <label>book_name</label>
                    <input type="text" name="book_name" class="form-control" value="{{ $book->book_name }}">
                </div>
                <div class="form-group">
                    <label>book_slug</label>
                    <input type="text" name="book_slug" class="form-control" value="{{ $book->book_slug }}">
                </div>
                <div class="form-group">
                    <label>book_intro</label>
                    <textarea class="form-control" name="book_intro">{{ $book->book_intro }}</textarea>
                </div>
                <div class="form-group">
                    <label>book_desc</label>
                    <textarea class="form-control" name="book_desc">{{ $book->book_desc }}</textarea>
                </div>
                <div class="form-group">
                    <label>book_main_image</label>
                    <input type="file" name="book_main_image" class="form-control">

                    @if($book->book_main_image)
                    <img src="{{ asset('storage/images/'. basename($book->book_main_image)) }}" />
                    @endif
                </div>
                <div class="form-group">
                    <label>book_images</label>
                    <input type="file" name="book_images[]" class="form-control">
                    @if($book->book_images)
                    <img src="{{ asset('storage/images/'. basename($book->book_images)) }}" />
                    @endif
                </div>
                <div class="form-group">
                    <label>book_author</label>
                    <input type="text" name="book_author" class="form-control" value="{{ $book->book_author }}">
                </div>
                <div class="form-group">
                    <label>book_price_core</label>
                    <input type="text" name="book_price_core" class="form-control" value="{{ $book->book_price_core }}">
                </div>
                <div class="form-group">
                    <label>book_price_sell</label>
                    <input type="text" name="book_price_sell" class="form-control" value="{{ $book->book_price_sell }}">
                </div>
                <div class="form-group">
                    <label>book_status</label>
                    <select name="book_status">
                        <option value="1" {{ ($book->book_status == 1) ? "selected" : ""  }}>Xuất bản</option>
                        <option value="2" {{ ($book->book_status == 2) ? "selected" : ""  }}>Không xuất bản</option>

                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Sửa sách</button>
            </form>
        </div>
    </div>
@endsection
