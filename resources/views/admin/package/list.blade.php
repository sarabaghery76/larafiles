@extends('layouts.admin')
@section('content')
    @include('admin.partials.notifications')
    <table class="table table-bordered">
        <thead>
        @include('admin.package.columns')
        </thead>
        @if($packages && count($packages) > 0 )
            @foreach($packages as $package)
                @include('admin.package.item',$package)
            @endforeach
        @else
            @include('admin.partials.no-item')
        @endif
    </table>
@endsection