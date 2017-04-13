@extends('admin.layouts.dashboard')

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
        <th>Borrow Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($books as $book)
        <tr>
          <td>{{ $book->title }}</td>
          <td>{{ $book->authors->name }}</td>
          <td>{{ $book->category->name }}</td>
          <td>{{ $book->language->name }}</td>
          <td>{{ $book->purchaseDates->purchase_date }}</td>
          <td><i class="send outline icon"></i></td>
        </tr>
        @endforeach
        {{ $books->links() }}
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
