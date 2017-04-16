@extends('layouts.master')

@section('title', 'Welcome')

@section('stylesheet')
	@parent
@endsection

@section('content')

<!--main content -->
<div class="register">
	<div id="home" class="ui vertical aligned center segment inverted">
		<div class="ui container">
			@include('components.nav')
		</div>

	<section id="signup" class="signup">
		<h1 class="ui header centered horizontal divider">Registration</h1>
		<div class="ui grid basic segment">
			<div class="eight wide centered column">
				<form class="ui form error wow fadeInUp" role="form" method="POST" action="{{ route('register') }}">
					{{ csrf_field() }}
					<div class="field">
						<label> Name </label>
						<div class="ui left icon input">
							<input placeholder="Bruce Wayne" type="text" name="name" id="name"  value="{{ old('name') }}" required autofocus>
							<i class="user icon"></i>
							<div class="ui corner label">
								<i class="asterisk icon"></i>
							</div>
						</div>
					</div>
					<div class="field{{ $errors->has('email') ? ' has-error' : '' }}">
						<label> Email </label>
						<div class="ui left icon input">
							<input id="email" placeholder="batman@batcave.com" type="text" name="email" id="email" value="{{ old('email') }}" required>
							<i class="mail icon"></i>
							<div class="ui corner label">
								<i class="asterisk icon"></i>
							</div>
						</div>
					</div>
					@if ($errors->has('email'))
						<div class="ui error message">
							<strong>{{ $errors->first('email') }}</strong>
						</div>
					@endif
					<div class="two fields">
						<div class="field{{ $errors->has('password') ? ' has-error' : '' }}">
							<label> Password </label>
							<div class="ui left icon input">
								<input id="password" placeholder="e.g., !@#$%^&amp;*()_+:)" type="password" name="password" required>
								<i class="lock icon"></i>
								<div class="ui corner label">
									<i class="asterisk icon"></i>
								</div>
							</div>
						</div>
						@if ($errors->has('password'))
							<div class="ui error message">
								<strong>{{ $errors->first('password') }}</strong>
							</div>
						@endif
						<div class="field">
							<label> Confirm Password </label>
							<div class="ui left icon input">
								<input id="password-confirm" placeholder="e.g., !@#$%^&amp;*()_+:)" type="password" name="password_confirmation" required>
								<i class="lock icon"></i>
								<div class="ui corner label">
									<i class="asterisk icon"></i>
								</div>
							</div>
						</div>
					</div>
					<button type="submit" class="ui teal submit button"> Sign Up </button>
				</form>
			</div>
		</div>

	</section>
</div>

@endsection

@section('javascript')
	@parent
@endsection
