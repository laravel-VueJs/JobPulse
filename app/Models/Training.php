<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    // protected $table = 'trainings';
    protected $fillable = [
        'title',
        'institute',
        'completion_year',
        'user_id'
    ];
}
