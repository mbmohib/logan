@extends('admin.layouts.dashboard')

@section('admin_content')


	<div class="ui grid container">
	    <div class="eight wide centered column">
	        <h1 class="ui header centered horizontal divider">Add Borrower</h1>
	        <form class="ui form" method="POST" action="{{ route('borrower-update')}}">
				{{ csrf_field() }}

				<div class="field">

	                <label>Email</label>

	                <input type="email" name="email" placeholder="batman@batcave.com">

	            </div>

				<div class="field">

					<label>Mobile No</label>

					<input type="text" name="mobile" placeholder="01.........">

				</div>


	             <button type="submit" class="ui teal submit button">Submit</button>
	        </form>
	    </div>
	</div>
@endsection
