<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  public function category(){
    return $this->belongsTo(Category::class);
  }
  public function author(){
    return $this->belongsTo(Authors::class);
  }
  public function issuedbook(){
    return $this->hasMany(Issuedbook::class);
  }

}
