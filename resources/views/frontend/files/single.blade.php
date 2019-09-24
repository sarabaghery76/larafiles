@extends('layouts.frontend')
@section('content')

    <div class="col-xs-9 col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">مشاهده جزئیات فایل</div>
            <div class="panel-body">
                <p>عنوان : {{$file_item->file_title }}</p>
                <p>توضیحات : {{$file_item->file_description }}</p>
                <p>
                    <span>نوع فایل :</span>
                    <span class="{{$file_item->file_type_text }}"> {{$file_item->file_type_text }} </span>
                </p>
                <p>
                    <span>تاریخ ثبت :</span>
                    <span>{{$file_item->created_at}}</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xs-3 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">خرید فایل</div>
            <div class="panel-body">
                @if(App\Utility\User::is_user_subscribed($current_user))
                    <a href="">دانلود فایل </a>
                @else
                    <form action="" method="post">
                        {{ csrf_field()  }}
                        <button class="btn btn-success btn-lg btn-block"> خرید این فایل</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection
