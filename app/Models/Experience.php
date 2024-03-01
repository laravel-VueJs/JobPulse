<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'company_name',
        'department',
        'join',
        'resign',
        'is_currently_working',
        'company_address',
        'responsibilities',
        'user_id'
    ];
}
