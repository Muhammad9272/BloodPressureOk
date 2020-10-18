<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
     protected $fillable = ['title','slug','photo','small_desc','desc','status'];
}
