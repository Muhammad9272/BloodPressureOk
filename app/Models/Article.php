<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
     protected $fillable = ['title','slug','photo','small_desc','desc','meta_title','meta_tag','meta_desc','status'];
}
