@extends('admin.dashboard')

@section('admin_content')


	<div class="ui grid container">
	    <div class="eight wide centered column">
	        <h1 class="ui header centered horizontal divider">Add Borrower</h1>
	        <form class="ui form" method="POST" action="{{ route('add-borrower')}}">
				{{ csrf_field() }}
	            <div class="field">
	                <label>Name</label>
	                <input type="text" name="name" placeholder="Name">
	            </div>

				<div class="field">
	                <label>Email</label>
	                <input type="text" name="email" placeholder="Email">
	            </div>

	            <div class="field">
	                <label>Mobile</label>
	                <input type="text" name="mobile" placeholder="Mobile No">
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
@endsection
