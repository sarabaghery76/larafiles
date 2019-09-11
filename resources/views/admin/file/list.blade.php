@extends('layouts.admin')
@section('content')
    @include('admin.partials.notifications')
    <table class="table table-bordered">
        <thead>
        @include('admin.file.columns')
        </thead>
        @if($files && count($files) > 0 )
            @foreach($files as $file)
                @include('admin.file.item',$file)
            @endforeach
        @else
            @include('admin.partials.no-item')
        @endif
    </table>
@endsection