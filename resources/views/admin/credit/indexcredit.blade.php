@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-9">
                            <div class="card" style="margin-top: 15px">
                                <div class="card-header">List Books</div>
            <div class="card-body">
                <a href="{{ url('/admin/addbook') }}" class="btn btn-success" title="Add Books">
                    <i class="fa fa-plus text-right" aria-hidden="true"></i> Add Books
                </a>
                <a href="{{ route('credit.index') }}" class="btn btn-success" title="List Books">
                    <i class="fa fa-plus text-right" aria-hidden="true"></i> List Loan Books
                </a>
                <a href="{{ route('credit.create')  }}" class="btn btn-success" title="Add Credits">
                    <i class="fa fa-plus text-right" aria-hidden="true"></i> Add Loan Books
                </a>

                <br/>
                <br/>
                <div class="table-responsive">
                    <table class="table table-hover table-borderless">
                        <thead>
                        <tr>
                            <th>Book Name</th>
                            <th>User</th>
                            <th>Borrow Date</th>
                            <th>Return Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($credits as $credit)
                                @foreach ($books as $book)
                                    @if ($credit->book_id == $book->id)
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $book->book_title }}
                                        </td>
                                    @endif
                                @endforeach

                                @foreach ($users as $user)
                                    @if ($credit->user_id == $user->id)
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->email }}
                                        </td>
                                    @endif
                                @endforeach
                                <td>{{ $credit->credit_date }}</td>
                                <td>{{ $credit->return_date }}</td>
                                <td>
                                    @if($credit->status == 0)
                                        Finish
                                    @endif
                                    @if($credit->status == 1)
                                          Credit Active
                                        @endif
                                </td>
                                <td>
                                    @if($credit->status ==1)
                                        <form method="POST" action="{{ url('/admin/credit/indexcredit/'.$credit->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('Patch') }}
                                            @csrf
                                            <input type="hidden" name="status" id="status" class="form-input rounded-md shadow-sm mt-1 block w-full" value= 0 />
                                            <button type="submit" class="btn btn-danger btn-sm" title="Finish" onclick="return "><i class="fa fa-trash-o" aria-hidden="true"></i> Finish</button>
                                        </form>
                                    @endif
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
