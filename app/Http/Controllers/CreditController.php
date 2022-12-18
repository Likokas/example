<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Credit;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $books = Books::all();

        $credits = Credit::all();

        return view('admin/credit/indexcredit', compact('credits','users', 'books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $books = Books::all();

        $credit_date = Carbon::now()->format('Y-m-d');
        $return_date = Carbon::now()->addDays(7)->format('Y-m-d');

        return view('admin/credit/addcredit', compact('users','books','credit_date', 'return_date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Credit::create($input);
        return redirect('admin/credit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Credit $credit)
    {
//        $users = User::pluck('email','id');
//        $books = Books::pluck('title', 'id');
//
//        $credit->load('users', 'books');
//
//        return view('admin/credit/editcredit', compact('credit', 'users', 'books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $credit = Credit::find($id);
        $input = $request->all();

        $credit->update($input);

        return redirect('admin/credit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Credit $credit)
    {
        $credit->delete();

        return redirect()->route('admin/credit/creditindex');
    }
}
