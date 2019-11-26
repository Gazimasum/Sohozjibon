<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Authors;

class AuthorsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }
    public function index(){
      $authors=Authors::orderby('id','desc')->get();
      return view('backend.pages.authors.index',compact('authors'));
    }
    public function create(){

      return view('backend.pages.authors.create');
    }

    public function store(Request $request){
       $this->validate($request,
      ['name' => 'required',

    ],
    [
    'name.required'=>"Please Provide a Authors Name.",

  ]);

  $author=new Authors();
  $author->name=$request->name;
  $author->save();

  session()->flash('success',('A New Authors Added Successfully..'));
  return back();
    }

    public function delete($id){

      $author=Authors::find($id);
      if (!Is_null($author)) {
        $author->delete();
      }
      session()->flash('success','author has deleted Successfully..');
      return back();
    }


    public function edit($id){

      $author=Authors::find($id);
      if (!Is_null($author)) {
        return view('backend.pages.authors.edit',compact('author'));

      }
      else {
        return redirect()->route('admin.authors');

      }

    }


      public function update(Request $request,$id){


    $author=Authors::find($id);
    $author->name=$request->name;
    $author->save();
    session()->flash('success',('Authors has updated Successfully..'));
    return redirect()->route('admin.authors');
      }
}
