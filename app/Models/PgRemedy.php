<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PgRemedy extends Model
{
    protected $fillable = ['title','slug','desc','meta_title','meta_tag','meta_desc','status'];
}
