<?php

namespace App\Http\Controllers\Admin;

use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlansController extends Controller
{

    public function index()
    {
        $plans = Plan::all();
        return view('admin.plan.list', compact('plans'))->with(['panel_title' => 'لیست طرح های اشتراکی']);
    }

    public function create()
    {

        return view('admin.plan.create')->with(['panel_title' => 'ایجاد طرح جدید']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'plan_title' => 'required',
            'plan_limit_download_count' => 'required',
            'plan_price' => 'required',
            'plan_days_count' => 'required'
        ], [
                'plan_title.required'=>'وارد کردن عنوان طرح الزامی است.',
                'plan_limit_download_count.required'=>'وارد کردن محدودیت دانلود الزامی است.',
                'plan_price.required'=>'وارد کردن قیمت طرح الزامی است.',
                'plan_days_count.required'=>'وارد کردن تعداد روز اعتبار الزامی است.'
            ]
        );
        $new_plan = Plan::create([
            'plan_title' => $request->input('plan_title'),
            'plan_limit_download_count' => $request->input('plan_limit_download_count'),
            'plan_price' => $request->input('plan_price'),
            'plan_days_count' => $request->input('plan_days_count')
        ]);
        if ($new_plan) {
            return redirect()->route('admin.plans.list')->with('success', 'طرح جدید با موفقیت ثبت گردید.');
        }
    }

    public function edit(Request $request, $plan_id)
    {
        $plan_id = intval($plan_id);
        $planItem = Plan::find($plan_id);
        return view('admin.plan.edit', compact('planItem'));
    }

    public function update(Request $request, $plan_id)
    {
        $plan_id = intval($plan_id);
        //validation plan edit
        $planItem = Plan::find($plan_id);
        $updated_plan = $planItem->update(
            [
                'plan_title' => $request->input('plan_title'),
                'plan_limit_download_count' => $request->input('plan_limit_download_count'),
                'plan_price' => $request->input('plan_price'),
                'plan_days_count' => $request->input('plan_days_count')
            ]
        );
        if ($updated_plan) {
            return redirect()->route('admin.plans.list')->with('success', 'طرح مورد نظر با موفقیت به روز رسانی شد.');
        }
    }

    public function remove(Request $request, $plan_id)
    {
        $plan_id = intval($plan_id);
        $planItem = Plan::find($plan_id);
        //Plan::destroy([$plan_id]);
        if ($planItem) {
            $planItem->delete();
            return redirect()->route('admin.plans.list')->with('success', 'طرح مورد نظر با موفقیت حذف گردید');
        }

    }

}
