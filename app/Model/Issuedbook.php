<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Issuedbook extends Model
{
  public function book(){
    return $this->belongsTo(Book::class);
  }
  public function student(){
    return $this->belongsTo(User::class);
  }
}
