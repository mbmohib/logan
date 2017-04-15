@extends('admin.layouts.dashboard')

@section('admin_content')
<script src="/js/jquery.min.js"></script>

	<div class="ui grid container">
	    <div class="eight wide centered column">
	        <h1 class="ui header centered horizontal divider">Add Borrower</h1>
	        <form class="ui form" method="POST" action="{{ route('add-borrower')}}">
				{{ csrf_field() }}

				<div class="field">
					<label>Borrower Name</label>
					<div class="ui search">
					  <div class="ui icon input">
					    <input class="prompt" type="text" placeholder="Add Borrower" name="name">
					    <i class="users icon"></i>
					  </div>
					  <div class="results"></div>
					</div>
				</div>

				<div class="field">
					<label>Books</label>
					<div class="ui multiple search selection dropdown">
						<input name="books" type="hidden">
						<i class="dropdown icon"></i>
						<div class="default text">Books</div>
						<div class="menu">

						@foreach ($books as $book)
							<div class="item" data-value="{{ $book->id }}">{{ $book->title }}</div>
						@endforeach

						</div>
			        </div>
				</div>


	            <div class="field">
	                <label>Lend Date</label>
					<div class="ui calendar date">
	                    <div class="ui input left icon">
	                        <i class="calendar icon"></i>
	                        <input type="text" placeholder="Date" name="lend_date">
	                    </div>
	                </div>
	            </div>

	            <div class="field">
	                <label>Return Date</label>
					<div class="ui calendar date">
	                    <div class="ui input left icon">
	                        <i class="calendar icon"></i>
	                        <input type="text" placeholder="Date" name="return_date">
	                    </div>
	                </div>
	            </div>

	             <button type="submit" class="ui teal submit button">Submit</button>
	        </form>
	    </div>
	</div>
	<script>
	// Check console to see the values of Borrower. Use these value to show in search bar.
		$(document).ready(function() {
			$.ajax({
				method: 'GET',
				url: 'borrower-ajax',
				dataType: 'json'
			}).done(function(data){
				console.log(data);
				$.map(data, function(key, value){
					console.log(key.id + " - " + key.name + " - " + key.mobile + " - " + key.email);
				});
			});
		});
	</script>
	<script>
	// Check console to see the values of Books. Use these value to show in search bar.
		$(document).ready(function() {
			$.ajax({
				method: 'GET',
				url: 'book-ajax',
				dataType: 'json'
			}).done(function(data){
				console.log(data);
				$.map(data, function(key, value){
					console.log(key.id + " - " + key.title);
				});
			});
		});
	</script>

@endsection
