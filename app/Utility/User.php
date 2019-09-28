<?php

namespace App\Utility;

use App\Models\Subscribe;
use App\User as UserModel;
use Carbon\Carbon;

class User
{

    public static function is_user_subscribed(int $user_id = null): bool
    {
        $user = UserModel::find($user_id);
        if (!$user) {
            return false;
        }
        $user_subscribe = $user->currentSubscribe()->first();
        return !empty($user_subscribe);
    }

}