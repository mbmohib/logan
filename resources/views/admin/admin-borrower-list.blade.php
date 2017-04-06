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
	        <th>Lend Date</th>
	        <th>Return Date</th>
			<th>Borrow Status</th>
	        </tr>
	      </thead>
	      <tbody>
			@foreach ($borrowers as $borrower)

	        <tr>
	          <td>{{ $borrower->name }}</td>
	          <td>{{ $borrower->email }}</td>
	          <td>{{ $borrower->mobile }}</td>
	          <td>{{ $borrower->lend_date }}</td>
	          <td>{{ $borrower->return_date }}</td>
			  <td>
				@if ($borrower->status)
				  	<i class="send outline icon"></i>
				@else
					<i class="icon"></i>
				@endif
			  </td>
	        </tr>

			@endforeach

	      </tbody>
	    </table>
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
