@extends('layouts.app')
@section('content')
    <section class="clean-block clean-form dark">
        <div class="container">
            <form action="{{ url('admin/addbook') }}" method="post"> {{--add data dosen -- DosenController--}}
                @csrf
                <div class="form-group">
                    <label for="nama">Title Books:</label>
                    <input type="text" class="form-control"  id="book_title" name="book_title">
                </div>
                <div class="form-group">
                    <label for="nama">Author Books:</label>
                    <input type="text" class="form-control"  id="book_author" name="book_author">
                </div>
                <div class="form-group">
                    <label for="nama">Publisher:</label>
                    <input type="text" class="form-control"  id="book_publisher" name="book_publisher">
                </div>
                <div class="form-group">
                    <label for="nama">Pages:</label>
                    <input type="text" class="form-control"  id="book_pages" name="book_pages">
                </div>
                <div class="form-group">
                    <label for="nama">ISBN:</label>
                    <input type="text" class="form-control"  id="book_isbn" name="book_isbn">
                </div>
                <br>
                <div>
                    <button class="btn btn-primary btn-block" type="submit">Create</button> </div>
            </form>
        </div>
    </section>
@endsection
