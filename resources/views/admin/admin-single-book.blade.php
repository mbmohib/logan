@extends('admin.layouts.dashboard')

@section('admin_content')
<div class="ui grid container">
    <h1 class="ui header centered horizontal divider">{{ $book->title }}</h1>
    <table class="ui celled padded table center aligned">
      <thead>
        <tr>
        <th>Borrower Name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Lend Date</th>
        <th>Orginal Return Date</th>
        {{-- <th>Borrow Status</th> --}}
        </tr>
      </thead>
      <tbody>
        @foreach ($borrowers as $borrower)
        <tr>
          <td>{{ $borrower->name }}</td>
          <td>{{ $borrower->mobile }}</td>
          <td>{{ $borrower->email }}</td>
          <td>{{ $borrower->pivot->lend_date }}</td>
          @if ($borrower->pivot->orginal_return_date)
              <td>{{ $borrower->pivot->orginal_return_date }}</td>
          @endif
          @if (!$borrower->pivot->orginal_return_date)
              <td><i class="send outline icon"></i></td>
          @else
              <td><i class="disk outline icon"></i></td>
          @endif
          {{-- <td>
              <a href="{{ route('book-update')}}">
                  <i class="external icon"></i>
              </a>
          </td> --}}
        </tr>
        @endforeach
        {{-- {{ $book->links() }} --}}
      </tbody>
    </table>

    <h4 class="ui header centered horizontal divider">
        <a href="{{ route('book-update-create', ['book' => $book->id])}}">
            Add aditonal info
            <i class="external icon"></i>
        </a>
    </h4>


</div>
@endsection
