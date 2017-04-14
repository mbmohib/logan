@extends('admin.layouts.admin-master')

@section('title', 'Dashboard')

@section('stylesheet')
    @parent
@endsection
@section('content')
    @include('admin.components.sidebar-menu')

    <div class="pusher">
        @include('admin.components.header')

		<!--Message after oparetion complete -->
		@if ($flash = session('status'))
            <div class="ui success message container large">
                <i class="close icon close_status"></i>
                <p><i class="check  circle icon"></i>{{ $flash }}</p>
            </div>
        @endif

		<!--Error message -->
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

        <div class="min_height">
            @yield('admin_content')

        </div>

        <footer>
            <div class="ui centered grid wow slideInUp">
                <div class="row">
                    <div class="five wide column">
                        <div class="ui form">
                            <div class="field">
                                <div class="ui action input">
                                    <input type="email" placeholder="batman@batcave.com">
                                    <button class="ui teal right labeled icon button">
                                        <i class="announcement icon"></i>
                                        Tell Your Friends
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="copyright">
                    <a href="#">&copy; Maruf, Mohib, Momit</a>
                </div>

            </div>
        </footer>
    </div>
@endsection



@section('javascript')
    @parent
@endsection
