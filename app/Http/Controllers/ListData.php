<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class ListData extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $books = Books::all();
//
//        return view('admin/halamanadmin', compact('books'));

    }
    //
}
