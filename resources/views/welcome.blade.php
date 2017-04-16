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
					<h1 class="ui header inverted">Keep track your BOOK!</h1>
					<p>Here you can create your personal virtual library to keep track your physical books.
						You can also track books you lended to other people.
						It's easy to use and save lots of time managing your books.
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
					Register with your name and email.
				</p>
			</div>
			<div class="column">
				<i class="book icon"></i>
				<span>Add Book</span>
				<p>
					Add your books to your personal virtual library.
				</p>
			</div>
			<div class="column">
				<i class="exchange icon"></i>
				<span>Lend Books</span>
				<p>
					Lend your books to borrower and you can easily track it.
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
