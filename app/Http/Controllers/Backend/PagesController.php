<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class PagesController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }

  public function index(){
    $admin = Auth::user();
    return view('backend.pages.index', compact('admin'));

  }
  public function reguser(){
    $users = User::get();
    return view('backend.pages.reg_user', compact('users'));

  }


}
