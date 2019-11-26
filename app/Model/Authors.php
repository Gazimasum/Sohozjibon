<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
  public function books(){
    return $this->hasMany(Book::class);
  }
}
