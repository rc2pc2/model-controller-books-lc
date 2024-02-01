<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index(){
        // % SELECT * FROM books WHERE `id` = 13;
        // ? $books = Book::where('id', 13)->get();

        // % SELECT * FROM books WHERE `title` LIKE 'L%';
        // ? $books = Book::where('title', 'LIKE' , 'L%')->get();

        // % SELECT * FROM books WHERE `title` LIKE 'L%' ORDER BY `title` DESC;
        // ? $books = Book::where('title', 'LIKE' , 'L%')->orderBy('title', 'DESC')->get();

        $books = Book::all();
        return view('admin.book.index', [ 'books' => $books ]);
    }
}
