<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    protected $guarded = ['subscribe_id'];

    public $timestamps = false;

    protected $dates = [
        'subscribe_expired_at',
        'subscribe_created_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'subscribe_user_id');
    }

}
