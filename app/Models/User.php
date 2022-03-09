<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Traits\HasPermissionsTrait;

class User extends Authenticatable {

    use HasApiTokens, HasFactory, Notifiable, HasPermissionsTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
    **/
    protected $fillable = [
        'name',
        'email',
        'password',
        'wrong_attempt',
        'is_login_active',
        'employee_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
    **/
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
    **/
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function employee() {
        return $this->hasOne(EmployeeMaster::class,'id');
    }

    public function logged_info() {
        return $this->hasMany(UserLogedInfo::class,'id','user_id')->take(10);
    }
}