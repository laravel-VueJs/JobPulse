<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateOtherInformation extends Model
{
    protected $table = 'candidate_others_information';
    protected $fillable = [
        'current_salary',
        'expected_salary',
        'user_id'
    ];
}
