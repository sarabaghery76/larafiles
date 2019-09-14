<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //protected $primaryKey = 'payment_id';
    protected $guarded = ['payment_id'];
    const CREATED_AT = 'payment_created_at';
    const UPDATED_AT = 'payment_updated_at';
    const ONLINE = 1;
    const WALLET = 2;
    const COMPLETE = 1;
    const INCOMPLETE = 2;


    public function user()
    {
        return $this->belongsTo(User::class, 'payment_user_id');
    }

    public function payment_method_format()
    {
        switch ($this->attributes['payment_method']) {
            case self::ONLINE:
                return 'آنلاین';
                break;
            case self::WALLET:
                return 'کیف پول';
                break;
        }
    }

    public function payment_status_format()
    {
        switch ($this->attributes['payment_status']) {
            case self::COMPLETE:
                return 'کامل';
                break;
            case self::INCOMPLETE:
                return 'ناقص';
                break;
        }
    }
}
