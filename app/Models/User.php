<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
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

    public function candidateProfile(): HasOne
    {
        return $this->hasOne(CandidateProfile::class);
    }
    public function education(): HasMany
    {
        return $this->hasMany(Education::class);
    }
    public function training(): HasMany
    {
        return $this->hasMany(Training::class);
    }


}
