<h1 class="ui header centered horizontal divider">Registration</h1>
<div class="ui grid basic segment">
	<div class="eight wide centered column">
		<form class="ui form" role="form" method="POST" action="{{ route('register') }}">
			{{ csrf_field() }}
			<div class="field wow slideInLeft{{ $errors->has('name') ? ' has-error' : '' }}">
				<label> Name </label>
				<div class="ui left icon input">
					<input placeholder="Bruce Wayne" type="text" name="name" id="name"  value="{{ old('name') }}" required autofocus>

					@if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif

					<i class="user icon"></i>
					<div class="ui corner label">
						<i class="asterisk icon"></i>
					</div>
				</div>
			</div>
			<div class="two fields wow slideInRight">
				{{-- <div class="field">
					<label> Username </label>
					<div class="ui left icon input">
						<input id="username" placeholder="Batman" type="text">
						<i class="user icon"></i>
						<div class="ui corner label">
							<i class="asterisk icon"></i>
						</div>
					</div>
				</div> --}}
				<div class="field{{ $errors->has('email') ? ' has-error' : '' }}">
					<label> Email </label>
					<div class="ui left icon input">
						<input id="email" placeholder="batman@batcave.com" type="text" name="email" id="email" value="{{ old('email') }}" required">
						@if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
						<i class="mail icon"></i>
						<div class="ui corner label">
							<i class="asterisk icon"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="two fields  wow slideInLeft">
				<div class="field{{ $errors->has('password') ? ' has-error' : '' }}">
					<label> Password </label>
					<div class="ui left icon input">
						<input id="password" placeholder="e.g., !@#$%^&amp;*()_+:)" type="password" name="password" required>
						@if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
						<i class="lock icon"></i>
						<div class="ui corner label">
							<i class="asterisk icon"></i>
						</div>
					</div>
				</div>
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
			<button type="submit" class="ui teal submit button wow fadeIn"> Sign In </button>
			<div class="ui error message"></div>
		</form>
	</div>
</div>
