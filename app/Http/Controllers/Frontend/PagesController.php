<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Issuedbook;

class PagesController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }


  public function issuedbook()
  {
    $issuedbookes = Issuedbook::orderby('id','desc')->get();
    return view('frontend.pages.issuedbooks',compact('issuedbookes'));
  }
}
