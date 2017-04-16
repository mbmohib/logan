@extends('admin.layouts.dashboard')

@section('admin_content')
	<div class="ui grid container books-list">
	  <div class="thirteen wide column centered">
	    <table class="ui celled padded table center aligned">
	      <thead>
	        <tr>
	        <th>Name</th>
	        <th>Email</th>
	        <th>Mobile</th>
			{{-- <th>Borrow Status</th> --}}
			<th>View Details</th>

	        </tr>
	      </thead>
	      <tbody>
			@foreach ($borrowers as $borrower)


				<tr class="borrower_info">
			          <td>{{ $borrower->name }}</td>
			          <td>{{ $borrower->email }}</td>
			          <td>{{ $borrower->mobile }}</td>
					  {{-- <td>
						@if ($borrower->status)
						  	<i class="send outline icon"></i>
						@else
							<i class="icon"></i>
						@endif
					  </td> --}}
					  <td class="view_book">
						  <a href="{{ route('borrower-show', ['borrower' => $borrower->id])}}">
						  	  <i class="external icon"></i>
						  </a>
					  </td>
	        	</tr>


			@endforeach

	      </tbody>
	    </table>


	  </div>


	  </div>
	</div>
@endsection
