@extends('admin.dashboard')

@section('admin_content')
<div class="ui grid container books-list">
  <div class="thirteen wide column">
    <table class="ui celled padded table center aligned">
      <thead>
        <tr>
        <th class="single line">Title</th>
        <th>Author</th>
        <th>Category</th>
        <th>Language</th>
        <th>Purchase Date</th>
        <th>Rating</th>
        <th>Borrow Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Code Smart</td>
          <td>Dayle Raees</td>
          <td>Category</td>
          <td>English</td>
          <td>22 Jan, 2017</td>
          <td><div class="ui star rating" data-rating="3" data-max-rating="3"></div></td>
          <td><i class="send outline icon"></i></td>
        </tr>

        <tr>
          <td>Code Smart</td>
          <td>Dayle Raees</td>
          <td>Category</td>
          <td>English</td>
          <td>22 Jan, 2017</td>
          <td><div class="ui star rating" data-rating="2" data-max-rating="2"></div></td>
          <td><i class="icon"></i></td>
        </tr>

        <tr>
          <td>Code Smart</td>
          <td>Dayle Raees</td>
          <td>Category</td>
          <td>English</td>
          <td>22 Jan, 2017</td>
          <td><div class="ui star rating" data-rating="4" data-max-rating="4"></div></td>
          <td><i class="send outline icon"></i></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="three wide column">
      <div class="ui segments">

          <div class="ui segment">
              <h2 class="ui header center">Category</h2>
          </div>
          <div class="ui red segment">
              <p>Middle</p>
          </div>
          <div class="ui blue segment">
              <p>Middle</p>
          </div>
          <div class="ui green segment">
              <p>Middle</p>
          </div>
          <div class="ui yellow segment">
              <p>Bottom</p>
          </div>
      </div>
  </div>
</div>
@endsection
