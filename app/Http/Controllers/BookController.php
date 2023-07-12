<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::simplePaginate(5);
        return view('books.index',compact('book'));
    }

    public  function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $book = Book::where('title','like','%' . $searchTerm. '%')->get();

        return view('books.search',compact('book', 'searchTerm'));
    }
}
