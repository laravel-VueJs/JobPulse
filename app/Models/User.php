<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = ['firstName','lastName','email','mobile','password','otp','role','status'];
    protected $attributes = [
        'otp' => '0',
        'role' => 'candidate',
        'status' => 'active'
    ];
    protected $hidden = ['password', 'otp'];

//    public function candidateProfile()
//    {
//        return $this->hasOne(CandidateProfile::class);
//    }

}
