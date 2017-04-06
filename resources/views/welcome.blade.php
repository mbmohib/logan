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
			<div class="ui secondary inverted top large pointing menu">
				<div class="left item">
					<a href="#">
						{{-- <i class="sidebar icon tablet"></i> --}}
					</a>
					<a href="#" class="logo">
						<img src="/images/logo.png" alt="">
						<span>BookShelf</span>
					</a>
				</div>

				<div class="right item">
					<a href="/" class="active item">Home</a>
					<a href="#process" class="item">Process</a>
					<a href="#login" class="item">Login</a>
					<a href="#signup" class="item">Registration</a>
				</div>
			</div>
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

	<section id="signup" class="signup">
		@include('components.register')
	</section>

	<section class="footer">

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

		<a class="up-arrow" href="#home"><i class="arrow circle up icon"></i></a>

	</section>
</div>

@endsection

@section('javascript')
	@parent
@endsection
