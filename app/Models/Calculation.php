<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calculation extends Model
{
    protected $fillable = ['upper1','upper2','lower1','lower2','desc','meta_title','meta_tag','meta_desc'];
}
