@extends('admin.layouts.admin-master')

@section('title', 'Dashboard')

@section('stylesheet')
    @parent
@endsection
@section('content')
    @include('admin.components.sidebar-menu')

    <div class="pusher">
        @include('admin.components.header')

		
        @yield('admin_content')
    </div>
@endsection

@section('javascript')
    @parent
@endsection
