@extends('admin.layouts.admin-master')

@section('title', 'Dashboard')

@section('stylesheet')
    @parent
@endsection
@section('content')
    @include('admin.components.sidebar-menu')

    <div class="pusher">
        @include('admin.components.header')

		@if ($flash = session('status'))
            <div class="ui success message container large">
                <i class="close icon close_status"></i>
                <p><i class="check  circle icon"></i>{{ $flash }}</p>
            </div>
        @endif

		@if (count($errors) > 0)
			<div class="ui negative message container large">
				<i class="close icon close_status"></i>
				<ul>
					@foreach ($errors->all() as $error)
						<p><i class="warning circle icon"></i>{{ $error }}</p>
					@endforeach
				</ul>
			</div>
		@endif


        @yield('admin_content')
    </div>
@endsection

@section('javascript')
    @parent
@endsection
