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

	@include('components.footer')
</div>

@endsection

@section('javascript')
	@parent
@endsection
