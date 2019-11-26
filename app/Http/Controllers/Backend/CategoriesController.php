<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\HTTP\Controllers\Controller;
use App\Model\Category;


class CategoriesController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }
    public function index(){
      $categories=Category::orderby('id','desc')->get();
      return view('backend.pages.categories.index',compact('categories'));
    }
    public function create(){

      return view('backend.pages.categories.create');
    }

    public function store(Request $request){
       $this->validate($request,
      ['name' => 'required',
        'status' =>'required',
    ],
    [
    'name.required'=>"Please Provide a Category Name.",

  ]);

  $category=new Category();
  $category->name=$request->name;
  $category->status=$request->status;
  $category->save();

  session()->flash('success',('A New Category Added Successfully..'));
  return back();
    }

    public function delete($id){

      $category=category::find($id);
      if (!Is_null($category)) {
        $category->delete();
      }
      session()->flash('success','category has deleted Successfully..');
      return back();
    }


    public function edit($id){

      $category=Category::find($id);
      if (!Is_null($category)) {
        return view('backend.pages.categories.edit',compact('category'));

      }
      else {
        return redirect()->route('admin.categories');

      }

    }


      public function update(Request $request,$id){


    $category=Category::find($id);
    $category->name=$request->name;
    $category->status=$request->status;
    $category->save();
    session()->flash('success',('Category has updated Successfully..'));
    return redirect()->route('admin.categories');
      }

}
