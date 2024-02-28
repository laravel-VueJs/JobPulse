<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateProfile extends Model
{
    protected $fillable = [
        'photo',
        'father_name',
        'mother_name',
        'date_of_birth',
        'gender',
        'blood_group',
        'gov_id',
        'emergency_phone',
        'address',
        'bio',
        'user_id'
    ];

//    public function user()
//    {
//        return $this->belongsTo(User::class);
//    }

}
