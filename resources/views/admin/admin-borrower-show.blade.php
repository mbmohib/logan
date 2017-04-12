@extends('admin.dashboard')

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
			<th>Book Returned</th>
			</tr>
		  </thead>
		  <tbody>
			  @foreach ($books as $book)
				  <tr>
				    <td>{{ $book->title }}</td>
				    <td>Dayle Raees</td>
				    <td>{{ $book->category->name }}</td>
				    <td>{{ $book->pivot->lend_date }}</td>
				    <td>{{ $book->pivot->return_date }}</td>
					@if ($book->pivot->orginal_return_date)
						<td>{{ $book->pivot->orginal_return_date }}</td>
					@endif
					@if (!$book->pivot->orginal_return_date)
						<td><i class="send outline icon"></i></td>
					@else
						<td><i class="disk outline icon"></i></td>
					@endif

				    <td>
						<div class="inline field">
					    <div class="ui toggle checkbox">
					      <input tabindex="0" class="hidden" type="checkbox">
					      <label>Toggle</label>
					    </div>
					  </div>
					</td>
				  </tr>
			  @endforeach


		  </tbody>
		</table>
	</div>
@endsection
