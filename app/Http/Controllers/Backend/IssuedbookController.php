<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Issuedbook;
use App\Model\Book;
use App\User;

class IssuedbookController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth:admin');
  }
    public function index()
    {
      $issuedbooks = Issuedbook::all();
      return view('backend.pages.issuedbooks.index',compact('issuedbooks'));
    }
    public function create()
    {
      return view('backend.pages.issuedbooks.create');
    }

    public function store(Request $r)
    {
      $issuedbooks = new Issuedbook();
      $issuedbooks->book_id = $r->bookid;
      $issuedbooks->student_id = $r->studentid;
      $issuedbooks->issues_date = now();
      $issuedbooks->save();
      session()->flash('success',('A New Issued Book Added Successfully..'));
      return back();
    }

    public function edit($id)
    {
      $issuedbook = Issuedbook::find($id);
      return view('backend.pages.issuedbooks.edit',compact('issuedbook'));
    }

    public function update(Request $request,$id){
      $issuedbook = Issuedbook::find($id);
      $issuedbook->fine = $request->fine;
      $issuedbook->status = 1;
      $issuedbook->return_date = now();
      $issuedbook->update();
      session()->flash('success',(' Issued Book Returned Successfully..'));
      return back();
    }
}
