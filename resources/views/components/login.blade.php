<h1 class="ui header inverted centered horizontal divider">Sign In</h1>
<div class="ui grid basic segment">
	<div class="eight wide centered column">
		<form class="ui form error wow fadeInUp"  role="form" method="POST" action="{{ route('login') }}">
			{{ csrf_field() }}
			<div class="field{{ $errors->has('email') ? ' has-error' : '' }}">
				<div class="ui left icon input">
					<input type="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required autofocus>
					<i class="user icon"></i>
				</div>
			</div>
			@if ($errors->has('email'))
				<div class="ui error message">
					<strong>{{ $errors->login->first('email') }}</strong>
				</div>
			@endif
			<div class="field{{ $errors->has('password') ? ' has-error' : '' }}">
				<div class="ui left icon input">
				<input type="password" placeholder="Password" name="password" required>
				<i class="lock icon"></i>
				</div>
			</div>
			@if ($errors->has('password'))
				<div class="ui error message">
					<strong>{{ $errors->first('password') }}</strong>
				</div>
			@endif
			<div class="inline field">
				<div class="ui checkbox">
					<input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
					<label for="remember"> Remember me </label>
				</div>
			</div>
			<button type="submit" class="ui teal submit button"> Sign In </button>
		</form>
	</div>
</div>
