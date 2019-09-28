<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Plan;
use App\Models\Subscribe;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscribeController extends Controller
{
    public function index(Request $request, int $plan_id)
    {
        $plan = Plan::find($plan_id);
        return view('frontend.subscribe.index', compact('plan'));
    }

    public function register(Request $request, $plan_id)
    {
        $plan = Plan::find($plan_id);
        if (!$plan) {
            return redirect()->back()->with('planError', 'طرح مورد نظر شما معتبر نمی باشد.');
        }

        $plan_days_count=$plan->plan_days_count;
        $expired_at=Carbon::now()->addDays($plan_days_count);
        $subscribeData = [
            'subscribe_user_id' => 3,
            'subscribe_plan_id' => $plan_id,
            'subscribe_download_limit' => $plan->plan_limit_download_count,
            'subscribe_created_at' => Carbon::now(),
            'subscribe_expired_at' => $expired_at,
        ];
        Subscribe::create($subscribeData);
    }
}
