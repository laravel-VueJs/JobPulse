<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPage extends Model
{
    use HasFactory;
    protected $table = 'blog_page';
    protected $fillable = ['title','description','banner_img'];
}
