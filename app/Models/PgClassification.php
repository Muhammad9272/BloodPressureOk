<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PgClassification extends Model
{
    protected $fillable = ['title','slug','desc','status'];
}
