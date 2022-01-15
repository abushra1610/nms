<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Booklist;
use Illuminate\Http\Request;

class BookController extends Controller
{

    // public function show(Request $request)
    // {
    // $categorys=Booklist::all();

    //     return view('backend.contents.category.category-list',compact('categorys'));
    // }


    public function create()
    {
     $allBooks = BookList::all();
    //  dd("hi");
        return view('admin.layouts.category.books.book-list', compact('allBooks'));
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
        //first get the product
        // $employees = Employee::find($id);
        $book = BookList::find($id);


        //then delete it
        // $employees->delete();
        $book->delete();

        return redirect()->route('allBook')->with('success', 'Book deleted successfully');
    }

// product category post method

// public function store(Request $request)
// {

//dd($request->all());
    //  $file_name = '';
    // // step1: check request has file?
    // if ($request->hasFile('employee_image')) {
    //     //file is valid or not
    //     $file = $request->file('employee_image');
    //     if ($file->isValid()) {
    //         //generate unique file name
    //         $file_name = date('Ymdhms') . '.' . $file->getClientOriginalExtension();

    //         //store image into local directory
    //         $file->storeAs('employee', $file_name);
    //     }


    //     Booklist::create([
    //         'category_name'=>$request->category_name,
    //         'description'=> $request->description
    //     ]);

    //      return redirect()->back()->with('success-message', 'Category Created Successfully.');
    // }

    // DELETE METHOD
    // public function delete($id)
    // {
    //    $categorys=Booklist::find($id);
    //    $categorys->delete();
    //    return redirect()->back()->with('success-message','Category Created Successfully.');
    // }

    //EDIT METHOD
    // public function edit($id)
    // {
    //    $categorys=Booklist::find($id);
    // //    return redirect()->back()->with('success-message','Product Created Successfully.');
    // return view('backend.contents.category.edit-category',compact('categorys'));
    // }

    //UPDATE METHOD
//     public function update(Request $request,$id)
//      {
//       $categorys=Booklist::find($id);
// //        $file_name=$categorys->image;
// // //              step 1: check image exist in this request.
// //                  if($request->hasFile('image'))
// //                  {
// //                      // step 2: generate file name
// //                      $file_name=date('Ymdhms') .'.'. $request->file('image')->getClientOriginalExtension();

// //                      //step 3 : store into project directory

// //                      $request->file('image')->storeAs('/uploads',$file_name);

// //               }



//             $categorys->update([
//                 'category_name' => $request->category_name,
//                 'descripation' => $request->description,


//          ]);
//             return redirect()->back()->with('success-message', 'Category Created Successfully.');
//     }


}
