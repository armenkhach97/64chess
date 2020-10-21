<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\File;

class BookController extends Controller
{
    public function allBooks(){
        $books = Book::all();
        return view('student.books',['books'=> $books]);
    }
    public function allBooksAdmin(){
        $books = Book::all();
        return view('Admin.adminbooks',['books'=> $books]);
    }
    public function add_book(Request $req){
        $book = new Book;
        $book->title = $req->input('book_title');
        if($req->hasFile('book_link') && $req->hasFile('book_image')){
            $image = $req->file('book_image');
            $file = $req->file('book_link');
            $image_name = $image->getClientOriginalExtension();
            $book_name = $file->getClientOriginalExtension();
            $imagename = 'image\\'.time() . '.' . $image_name;
            $bookname = 'book\\'.time() . '.' . $book_name;
            $image -> move('books\image',$imagename);
            $file -> move('books\book',$bookname);
            $book->image = $imagename;
            $book->link = $bookname;

        }else{
            return redirect()->route('add_books')->with('success','imege or book error');
        }
        $book->save();
        return redirect()->route('add_books')->with('success','Book added');
    }
    public function deleteBook($id){
        $book = Book::find($id);
        $booklink = $book->link;
        $bookimage = $book->image;
        Book::find($id)->delete();
        File::delete(public_path().'\books\\'.$booklink);
        File::delete(public_path().'\books\\'.$bookimage);
        return redirect()->route('admin_books')->with('success','book delete');
    }
}
