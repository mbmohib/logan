@extends('admin.layouts.dashboard')

@section('admin_content')

	<div class="ui grid container">

	    <div class="eight wide centered column">

	        <h1 class="ui header centered horizontal divider">Add Extra Info for Book</h1>

	        <form class="ui form" method="POST" action="{{ route('book-update-store')}}">

				{{ csrf_field() }}

                <div class="field">

                    <label>Published Year</label>

                    <div class="ui calendar" id="year">

                        <div class="ui input left icon">

                            <i class="calendar icon"></i>

                            <input type="text" name="pub_year" placeholder="Date">

                        </div>

                    </div>

                </div>

                <div class="field">

                    <label>Edition</label>

                    <input type="text" name="edition" placeholder="Ex: 3rd">

                </div>

				<input type="hidden" name="book_id" value="{{ $book }}">

                <button class="ui teal submit button" type="submit">Submit</button>

	        </form>

	    </div>

	</div>
@endsection
