<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educations';
    protected $fillable = [
        'level',
        'degree_name',
        'major',
        'institute_name',
        'result',
        'passing_year',
        'user_id'
    ];


}
