@extends('admin.layouts.dashboard')

@section('admin_content')
    <div class="">
      <h3>Latest Added Books</h3>
      @foreach ($latest_books as $latest_book)
         * {{ $latest_book->title }} <br>
      @endforeach
    </div>

    <div class="">
      <h3> Upcoming Return Book</h3>
      @foreach ($upcoming_return_books as $upcoming_return_book)
         * {{ $upcoming_return_book->title }} <br>
      @endforeach
    </div>

    <div class="">
      <h3> Expire Return Date Books</h3>
      @foreach ($expire_return_books as $expire_return_book)
         * {{ $expire_return_book->title }} <br>
      @endforeach
    </div>
@endsection
