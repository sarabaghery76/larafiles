@extends('layouts.admin')
@section('content')
    @include('admin.partials.notifications')
    <table class="table table-bordered">
        <thead>
        @include('admin.plan.columns')
        </thead>
        @if($plans && count($plans) > 0 )
            @foreach($plans as $plan)
                @include('admin.plan.item',$plan)
            @endforeach
        @else
            @include('admin.partials.no-item')
        @endif
    </table>
@endsection