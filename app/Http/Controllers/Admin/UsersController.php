<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view(('admin.user.index'), compact('users'))->with(['panel_title' => 'لیست کاربران']);
    }

    public function create()
    {
        return view('admin.user.create')->with(['panel_title' => 'ایجاد کاربر جدید']);
    }

    public function store(UserRequest $userRequest)
    {
        $user_data = [
            'full_name' => request()->input('full_name'),
            'email' => request()->input('email'),
            'password' => request()->input('password'),
            'role' => request()->input('role'),
            'wallet' => request()->input('wallet'),
        ];
        $new_user_object = User::create($user_data);
        if ($new_user_object instanceof User) {
            return redirect()->route('admin.users.list')->with('success', 'کاربر جدید با موفقیت ثبت گردید.');
        }
    }

    public function delete($user_id)
    {
        if ($user_id && ctype_digit($user_id)) {
            $userItem = User::find($user_id);
            if ($userItem && $userItem instanceof User) {
                $userItem->delete();
                return redirect()->route('admin.users.list')->with('success', 'کاربر مورد نظر با موفقیت حذف گردید.');
            }
        }
    }

    public function edit($user_id)
    {
        if ($user_id && ctype_digit($user_id)) {
            $userItem = User::find($user_id);
            if ($userItem && $userItem instanceof User) {
                return view(('admin.user.edit'), compact('userItem'))->with(['panel_title' => 'ویرایش کاربر']);
            }
        }
    }

    public function update(UserRequest $userRequest, $user_id)
    {
        $inputs = [
            'full_name' => request()->input('full_name'),
            'email' => request()->input('email'),
            'password' => request()->input('password'),
            'role' => request()->input('role'),
            'wallet' => request()->input('wallet'),
        ];
        if (!request()->has('password')) {
            unset($inputs['password']);
        }
        $userItem = User::find($user_id);
        $userItem ->update($inputs);
        return redirect()->route('admin.users.list')->with('success', 'اطلاعات کاربر مورد نظر با موفقیت به روز رسانی شد.');
    }
}


