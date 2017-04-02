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
	        <tr>
	          <td>Code Smart</td>
	          <td>Dayle Raees</td>
	          <td>Category</td>
	          <td>22 Jan, 2017</td>
	          <td>22 Jan, 2017</td>
			  <td><i class="icon"></i></td>
	        </tr>

	        <tr>
	          <td>Code Smart</td>
	          <td>Dayle Raees</td>
	          <td>Category</td>
	          <td>22 Jan, 2017</td>
	          <td>22 Jan, 2017</td>
			  <td><i class="icon"></i></td>
	        </tr>

	        <tr>
	          <td>Code Smart</td>
	          <td>Dayle Raees</td>
	          <td>Category</td>
	          <td>22 Jan, 2017</td>
	          <td>22 Jan, 2017</td>
			  <td><i class="send outline icon"></i></td>
	        </tr>
	      </tbody>
	    </table>
	  </div>

	  <div class="three wide column">
			<div class="ui vertical menu">
			<a class="active teal item">
				Total
				<div class="ui teal left pointing label">20</div>
			</a>
			<a class="item">
				Returned
				<div class="ui label">5</div>
			</a>
			<a class="item">
				Not Return
				<div class="ui label">15</div>
			</a>
			</div>
	      </div>
	  </div>
	</div>
@endsection
