<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPage extends Model
{
    use HasFactory;
    protected $table = 'job_page';
    protected $fillable = ['title','description','banner_img','job_title'];
}
