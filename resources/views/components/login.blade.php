<h1 class="ui header inverted centered horizontal divider">Sign In</h1>
<div class="ui grid basic segment">
	<div class="eight wide centered column">
		<form class="ui form"  role="form" method="POST" action="{{ route('login') }}">
			{{ csrf_field() }}
			<div class="field wow slideInLeft{{ $errors->has('email') ? ' has-error' : '' }}">
				<div class="ui left icon input">
					<input type="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required autofocus>
					@if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
					<i class="user icon"></i>
				</div>
			</div>
			<div class="field wow slideInRight{{ $errors->has('password') ? ' has-error' : '' }}">
				<div class="ui left icon input">
				<input type="password" placeholder="Password" name="password" required>
				@if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
				<i class="lock icon"></i>
				</div>
			</div>
			<div class="inline field  wow fadeIn">
				<div class="ui checkbox">
					<input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
					<label for="remember"> Remember me </label>
				</div>
			</div>
			<button type="submit" class="ui teal submit button wow fadeIn"> Sign In </button>
		</form>
	</div>
</div>
