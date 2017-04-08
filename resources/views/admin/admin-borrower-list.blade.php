@extends('admin.dashboard')

@section('admin_content')
	<div class="ui grid container books-list">
	  <div class="thirteen wide column">
	    <table class="ui celled padded table center aligned">
	      <thead>
	        <tr>
	        <th>Name</th>
	        <th>Email</th>
	        <th>Mobile</th>
			<th>Borrow Status</th>
	        <th>Add Books</th>
			<th>View Books</th>

	        </tr>
	      </thead>
	      <tbody>
			@foreach ($borrowers as $borrower)

	        <tr class="borrower_info">
	          <td>{{ $borrower->name }}</td>
	          <td>{{ $borrower->email }}</td>
	          <td>{{ $borrower->mobile }}</td>
			  <td>
				@if ($borrower->status)
				  	<i class="send outline icon"></i>
				@else
					<i class="icon"></i>
				@endif
			  </td>
			  <td value="{{ $borrower->id }}" class="add_book"><i class="book icon"></i></td>
	          <td class="view_book"><i class="external icon"></i></td>
	        </tr>

			@endforeach

	      </tbody>
	    </table>

		<!-- Add Books Modal Section -->

		<div class="ui modal a_book">
			<i class="close icon"></i>
			<div class="header">
				Add Books
			</div>

			<form class="ui form add-book-to-borrower" method="post">
				{{ csrf_field() }}
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
					<div class="ui calendar date borrower_date">
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


				<div class="actions">
					<button type="submit" class="ui positive button">
						Submit
					</button>
					<button class="ui black deny button">
						Back
					</button>
				</div>
			</form>
		</div>

		<!-- End Add Books Modal Section -->


		<!-- View Books Modal Section -->
		<div class="ui modal v_book">
			<i class="close icon"></i>
			<div class="header">
				Borrowed Books
			</div>
			<table class="ui celled padded table center aligned">
		      <thead>
		        <tr>
		        <th class="single line">Title</th>
		        <th>Author</th>
		        <th>Category</th>
		        <th>Lending Date</th>
		        <th>Return Date</th>
		        <th>Borrow Status</th>
		        <th>Book Return?</th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
		          <td>Code Smart</td>
		          <td>Dayle Raees</td>
		          <td>Category</td>
		          <td>22 Jan, 2017</td>
		          <td>22 Jan, 2017</td>
		          <td><i class="send outline icon"></i></td>
		          <td>
					  <div class="inline field">
					    <div class="ui toggle checkbox">
					      <input tabindex="0" class="hidden" type="checkbox">
					      <label>Toggle</label>
					    </div>
					  </div>
				  </td>
		        </tr>

				<tr>
				 <td>Code Smart</td>
				 <td>Dayle Raees</td>
				 <td>Category</td>
				 <td>22 Jan, 2017</td>
				 <td>22 Jan, 2017</td>
				 <td><i class="send outline icon"></i></td>
				 <td>
					 <div class="inline field">
					   <div class="ui toggle checkbox">
						 <input tabindex="0" class="hidden" type="checkbox">
						 <label>Toggle</label>
					   </div>
					 </div>
				 </td>
			   </tr>
		      </tbody>
		    </table>
			<div class="actions">
				<div class="ui positive button">
					Submit
				</div>
				<div class="ui black deny button">
			      	Return
			    </div>
			</div>
		</div>
		<!-- End View Books Modal Section -->
	  </div>

	  <div class="three wide column">
			<div class="ui vertical menu">
			<a class="active teal item" href="/dashboard/borrowers">
				Total
				<div class="ui teal left pointing label">{{ $total }}</div>
			</a>
			<a class="item" href="/dashboard/borrowers?return=true">
				Returned
				<div class="ui label">{{ $return }}</div>
			</a>
			<a class="item" href="/dashboard/borrowers?return=false">
				Not Return
				<div class="ui label">{{ $not_return }}</div>
			</a>
			</div>
	      </div>
	  </div>
	</div>
@endsection
