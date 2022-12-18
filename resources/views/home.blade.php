@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header text-center">List Books</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/create') }}" class="btn btn-success" title="Add Books">
                            <i class="fa fa-plus text-right" aria-hidden="true"></i> Add Books
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>1</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Publisher</th>
                                    <th>Pages</th>
                                    <th>ISBN</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($books as $book)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $book->book_title }}</td>
                                        <td>{{ $book->book_author }}</td>
                                        <td>{{ $book->book_publisher }}</td>
                                        <td>{{ $book->book_pages }}</td>
                                        <td>{{ $book->book_isbn }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-9">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-header">List Books</div>--}}
{{--                                <div class="card-body">--}}
{{--                                    <a href="{{ url('/Admin/create') }}" class="btn btn-success btn-sm" title="Add New Contact">--}}
{{--                                        <i class="fa fa-plus" aria-hidden="true"></i> Add Books--}}
{{--                                    </a>--}}
{{--                                    <br/>--}}
{{--                                    <br/>--}}
{{--                                    <div class="table-responsive">--}}
{{--                                        <table class="table">--}}
{{--                                            <thead>--}}
{{--                                            <tr>--}}
{{--                                                <th>No. </th>--}}
{{--                                                <th>Title</th>--}}
{{--                                                <th>Author</th>--}}
{{--                                                <th>Publisher</th>--}}
{{--                                                <th>Pages</th>--}}
{{--                                                <th>ISBN</th>--}}
{{--                                            </tr>--}}
{{--                                            </thead>--}}
{{--                                            <tbody>--}}
{{--                                            @foreach($books as $book)--}}
{{--                                                <tr>--}}
{{--                                                    <td>{{ $loop->iteration }}</td>--}}
{{--                                                    <td>{{ $book->book_title }}</td>--}}
{{--                                                    <td>{{ $book->book_author }}</td>--}}
{{--                                                    <td>{{ $book->book_publisher }}</td>--}}
{{--                                                    <td>{{ $book->book_pages }}</td>--}}
{{--                                                    <td>{{ $book->book_isbn }}</td>--}}
{{--                                                </tr>--}}
{{--                                            @endforeach--}}
{{--                                            </tbody>--}}
{{--                                        </table>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
