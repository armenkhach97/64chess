<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function allBooks(){
        $books = Book::all();
        return view('student.books',['books'=> $books]);
    }
    public function addBook(Request $req){
        
    }
}
