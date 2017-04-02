@extends('admin.dashboard')

@section('admin_content')
	<div class="ui grid container">
		<div class="eight wide centered column">
			<h1 class="ui header centered horizontal divider">Change Your Password</h1>
			<div class="ui form">

				<div class="field wow">
					<div class="ui left icon input">
					<input type="password" placeholder="Old Password">
					<i class="lock icon"></i>
					</div>
				</div>

				<div class="field wow">
					<div class="ui left icon input">
					<input type="password" placeholder="New Password">
					<i class="lock icon"></i>
					</div>
				</div>

				<div class="field wow">
					<div class="ui left icon input">
					<input type="password" placeholder="Repeat Password">
					<i class="lock icon"></i>
					</div>
				</div>

				<div class="ui teal submit button wow fadeIn"> Change Password </div>
			</div>
		</div>
	</div>
@endsection
