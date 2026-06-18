<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'preview', 'content', 'image','image_alt', 'featured'];
}
