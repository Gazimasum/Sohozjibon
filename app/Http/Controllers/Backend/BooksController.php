<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Book;
use App\Model\Authors;
use App\Model\Category;
use App\Model\Bookimage;
use Image;
use File;

class BooksController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth:admin');
  }
  public function create()
  {
$category = Category::where('status',1)->get();
$author = Authors::all();
    return view('backend.pages.book.create',compact('category','author'));
  }
  public function index()
  {
    $books = Book::get();
    return view('backend.pages.book.index',compact('books'));
  }

  public function store(Request $request)
  {

    $this->validate($request,
   ['name' => 'required',
   'category_id' => 'required',
     'author_id' =>'required',
     'isbnn_number' =>'required',
     'book_image'=> 'nullable'
 ],
 [
 'name.required'=>"Please Provide a Book Name.",

]);

$book=new Book();
$book->name=$request->name;
$book->category_id=$request->category_id;
$book->author_id=$request->author_id;
$book->isbnn_number=$request->isbnn_number;
$book->status = $request->status;

if ($request->book_image!=null) {


      //category image model insert images

        // insert images
        $image=$request->file('book_image');
        $img=time() . '.'. $image->getClientOriginalExtension();
        $location = 'images/books/' .$img;
        Image::make($image)->save($location);
        $book->image=$img;


}
$book->save();

session()->flash('success',('A New Book Added Successfully..'));
return back();
  }

  public function edit($id)
  {
    $category = Category::where('status',1)->get();
    $author = Authors::all();

    $book = Book::find($id);
    return view('backend.pages.book.edit',compact('book','category','author'));
  }


    public function update(Request $request,$id)
    {

      $this->validate($request,
     ['name' => 'required',
     'category_id' => 'required',
       'author_id' =>'required',
       'isbnn_number' =>'required',
   ],
   [
   'name.required'=>"Please Provide a Book Name.",

  ]);

  $book= Book::find($id);
  $book->name=$request->name;
  $book->category_id=$request->category_id;
  $book->author_id=$request->author_id;
  $book->isbnn_number=$request->isbnn_number;
  $book->status = $request->status;

  if ($request->book_image!=null) {
//delete old images
if(File::exists('images/books/'.$book->image)){
File::delete('images/books/'.$book->image);
}
        //category image model insert images

          // insert images
          $image=$request->file('book_image');
          $img=time() . '.'. $image->getClientOriginalExtension();
          $location = public_path('images/books/' .$img);
          Image::make($image)->save($location);
          $book->image=$img;


  }
  $book->update();

  session()->flash('success',(' Book Updated Successfully..'));
  return back();
    }


  public function delete($id)
  {
    $book = Book::find($id);
    $book->delete();
    if(File::exists('images/books/'.$book->image)){
      File::delete('images/books/'.$book->image);
    }
    session()->flash('success',(' Book Deleted Successfully..'));
    return back();
  }
}
