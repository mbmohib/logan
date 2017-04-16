@extends('admin.layouts.dashboard')

@section('admin_content')
	<div class="ui three column grid container">
		<div class="column">

			  <h3 class="ui header centered horizontal divider">Recently Added</h3>
				<div class="ui list">
					@foreach ($latest_books as $latest_book)
					 <div class="item">
 						<i class="book icon"></i>
 						<div class="content">
 							<a href="{{ route('show-single-book', ['book' => $latest_book->id])}}">{{ $latest_book->title }}</a>
	 						</div>
 					</div>
	  			  	@endforeach
				</div>


		</div>

		<div class="column">

			  <h3 class="ui header centered horizontal divider"> Upcoming Return Book</h3>
			  		<div class="ui list">
						@foreach ($upcoming_return_books as $upcoming_return_book)
							<div class="item">
	    						<i class="book icon"></i>
	    						<div class="content">
										<a href="{{ route('show-single-book', ['book' => $upcoming_return_book->id])}}">{{ $upcoming_return_book->title }}</a>
	    						</div>
	    					</div>
					 @endforeach
			  		</div>


		</div>

		<div class="column">

		      <h3 class="ui header centered horizontal divider"> Expire Return Book</h3>
			  		<div class="ui list">
						@foreach ($expire_return_books as $expire_return_book)
							<div class="item">
	    						<i class="book icon"></i>
	    						<div class="content">
										<a href="{{ route('show-single-book', ['book' => $expire_return_book->id])}}">{{ $expire_return_book->title }}</a>
	    						</div>
	    					</div>
		  		      @endforeach
			  		</div>


		</div>

	</div>





@endsection
