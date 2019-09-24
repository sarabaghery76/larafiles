<?php
namespace App\Utility;
class User
{

    public static function is_user_subscribed(int $user_id = null): bool
    {
        $user = \App\User::find($user_id);

        $user_subscribe = $user->subscribes()->where('subscribe_expired_at', '<=', \Carbon\Carbon::now())->first();
        return !empty($user_subscribe) && ($user_subscribe instanceof \App\Models\Subscribe);
    }

}