<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Booklist;
use Illuminate\Http\Request;

class BookController extends Controller
{



    public function create()
    {
        $key=null;
        if(request()->search){
            $key=request()->search;
            $allBooks = BookList::where('book_name','LIKE','%'.$key.'%')->get();
            return view('admin.layouts.category.books.book-list',compact('allBooks','key'));
        }
        $allBooks = BookList::all();
        return view('admin.layouts.category.books.book-list',compact('allBooks','key'));

    }
    public function bookForm()
    {
// dd('add');
        return view('admin.layouts.category.book-category.book-form');
    }
    public function addBook(Request $request)
    {

        Booklist::create([
            'book_name' => $request->name,
            'category' => $request->category,
            'writer' => $request->writer,
        ]);
        return redirect()->route('allBook')->with('success', 'Book created successfully');;
    }
    public function updateBook(Request $request, $id)
    {

        Booklist::where('id', $id)->update([
            'book_name' => $request->name,
            'category' => $request->category,
            'writer' => $request->writer,
        ]);
        return redirect()->route('allBook')->with('success', 'Book updated successfully');
    }
    public function deleteBook($id)
    {
        // dd($id);

        $book = BookList::find($id);



        $book->delete();

        return redirect()->route('allBook')->with('success', 'Book deleted successfully');
    }




}
