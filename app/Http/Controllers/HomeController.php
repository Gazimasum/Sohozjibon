<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Book;
use App\Model\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $books = Book::orderby('id','desc')->get();
        return view('frontend.pages.index',compact('books'));
    }

    public function show($id)
    {
      $category = Category::find($id);
        return view('frontend.pages.show',compact('category'));

    }

    public function about_us()
    {
      return view('frontend.Pages.about_us');
    }
}
