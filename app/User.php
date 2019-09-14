<?php

namespace App;

use App\Models\Package;
use App\Models\Payment;
use App\Models\Subscribe;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

//    protected $fillable = [
//        'name', 'email', 'password',
//    ];
    protected $guarded = ['role'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password']=bcrypt($value);
    }
    
//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];

    public function payments()
    {
        return $this->hasMany(Payment::class,'payment_user_id');
    }

    public function subscribes()
    {
        return $this->hasMany(Subscribe::class,'subscribe_user_id');
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class,'user_packages','user_id','package_id');
    }
    
}
