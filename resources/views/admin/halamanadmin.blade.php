@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header text-center">List Books</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/addbook') }}" class="btn btn-success" title="Add Books">
                            <i class="fa fa-plus text-right" aria-hidden="true"></i> Add Books
                        </a>
                        <a href="{{ route('credit.index') }}" class="btn btn-success" title="Add Books">
                            <i class="fa fa-plus text-right" aria-hidden="true"></i> List Loan Books
                        </a>
                        <a href="{{ route('credit.create')  }}" class="btn btn-success" title="Add Books">
                            <i class="fa fa-plus text-right" aria-hidden="true"></i> Add Loan Books
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Publisher</th>
                                    <th>Pages</th>
                                    <th>ISBN</th>
                                    <th>Action</th>
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
                                    <td>
                                        {{--                                            <a href="{{ url('/contact/' . $book->id) }}" title="View Book"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>--}}
                                        <a href="{{ url('/admin/editbook/' . $book->id) }}" title="Edit Book"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        <form method="POST" action="{{ url('/admin/halamanadmin/' . $book->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
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
    @endsection
