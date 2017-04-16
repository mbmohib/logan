@extends('layouts.master')

@section('title', 'Welcome')

@section('stylesheet')
	@parent
@endsection

@section('content')

<!--main content -->
<div class="pusher">
	<div id="home" class="ui vertical aligned center segment inverted header_bannar">
		<div class="ui container">
			@include('components.nav')
		</div>

		<div class="bannar_info wow fadeIn">
			<div class="ui grid">
				<div class="five wide right floated column">
					<h1 class="ui header inverted">Store your BOOK!</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco,
						laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						Excepteur sint occaecat cupidatat non proident,
						sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
		</div>

	</div> <!--header_bannar end -->

	<section id="process" class="process">
		<h1 class="ui header centered horizontal divider">PROCESS</h1>
		<div class="ui equal width column center aligned grid very relaxed container wow fadeInUp">
			<div class="column">
				<i class="sign in icon"></i>
				<span>Registration</span>
				<p>
					lorem ipsum dolar sitsed do eiusmod tempor
					incididunt ut labore et dolore magna aliqua.
					Ut enim ad minim veniam, quis nostrud exer
				</p>
			</div>
			<div class="column">
				<i class="book icon"></i>
				<span>Add Book</span>
				<p>
					lorem ipsum dolar sitsed do eiusmod tempor
					incididunt ut labore et dolore magna aliqua.
					Ut enim ad minim veniam, quis nostrud exer
				</p>
			</div>
			<div class="column">
				<i class="add user icon"></i>
				<span>Add Borrower</span>
				<p>
					lorem ipsum dolar sitsed do eiusmod tempor
					incididunt ut labore et dolore magna aliqua.
					Ut enim ad minim veniam, quis nostrud exer
				</p>
			</div>
		</div>
	</section>

	<section id="login" class="login">
		@include('components.login')
	</section>

	@include('components.footer')
</div>

@endsection

@section('javascript')
	@parent
@endsection
