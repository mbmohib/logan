@extends('admin.layouts.dashboard')

@section('admin_content')
	<div class="ui grid container">
		<h1 class="ui header centered horizontal divider">{{ $borrower->name }}</h1>


		<table class="ui celled padded table center aligned">
		  <thead>
			<tr>
			<th class="single line">Title</th>
			<th>Author</th>
			<th>Category</th>
			<th>Lend Date</th>
			<th>Return Date</th>
			<th>Orginal Return Date</th>
			<th>Borrow Status</th>
			<th>Book Returned ?</th>
			</tr>
		  </thead>
		  <tbody>
			  @foreach ($books as $book)
				  <tr>
				    <td>{{ $book->title }}</td>
				    <td>{{ $book->authors[0]->name }}</td>
				    <td>{{ $book->category->name }}</td>
				    <td>{{ $book->pivot->lend_date }}</td>
				    <td>{{ $book->pivot->return_date }}</td>

					@if ($book->pivot->orginal_return_date)
						<td>{{ $book->pivot->orginal_return_date }}</td>
					@else
						<td>Not Returned Yet</td>
					@endif

					@if (!$book->pivot->orginal_return_date)
						<td>
							Lent To Borrower
						</td>
					@else
						<td>
							In the Shelf
						</td>
					@endif

				    <td>
						<a href="{{ route('show-single-book', ['book' => $book->id])}}">
							<i class="external icon"></i>
						</a>
					</td>
				  </tr>
			  @endforeach


		  </tbody>
		</table>
	</div>
@endsection
