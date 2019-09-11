@extends('layouts.admin')
@section('content')
    @include('admin.user.notifications')
    @if($users && count($users)>0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>شناسه</th>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>موجودی</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            @foreach($users as $user)
                @include('admin.user.item',$user)
            @endforeach
        </table>
    @endif
@endsection