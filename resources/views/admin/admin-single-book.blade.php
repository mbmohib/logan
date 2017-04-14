@extends('admin.layouts.dashboard')

@section('admin_content')
<h1 class="ui header centered horizontal divider">{{ $book->title }}</h1>

<div class="ui equal width column grid container">
    <h4 class="ui header centered horizontal divider">
        {{-- <a href="{{ route('book-update-create', ['book' => $book->id])}}"> --}}

            <i class="edit icon"></i>
            Aditonal info
        {{-- </a> --}}
    </h4>

    <div class="column">
        {{-- @if (!$book->users[0]->pivot->status) --}}
            <table class="ui celled definition table">
              <form class="ui form" action="{{ route('orginal-return-update')}}" method="post">

                {{ csrf_field() }}

                <tbody>
                  @foreach ($borrowers as $borrower)
                    @if (is_null($borrower->pivot->orginal_return_date))
                      <tr>
                          <td>Current Borrower</td>
                          <td>{{ $borrower->name }}</td>
                      </tr>
                      <tr>
                          <td>Lend Date</td>
                          <td>{{ $borrower->pivot->lend_date }}</td>
                      </tr>
                      <tr>
                          <td>Possible Return Date</td>
                          <td>{{ $borrower->pivot->return_date }}</td>
                      </tr>
                      <tr>
                          <td>Orginal Return Date</td>
                          <td>
                              <div class="ui calendar date">
                                <div class="ui input left icon">
                                    <i class="calendar icon"></i>
                                    <input type="text" placeholder="Date" name="orginal_return_date">
                                </div>
                            </div>
                          </td>
                      </tr>
                      <input type="hidden" name="borrower_id" value="{{ $borrower->pivot->borrower_id}}">
                      <input type="hidden" name="book_id" value="{{ $borrower->pivot->book_id}}">
                    @else
                      <div class="ui segment return_table">
                          <h3 class="ui header centered horizontal divider">
                              The Book is in the Shelf!
                          </h3>
                          <h1 class="ui header center aligned">
                              <i class="leanpub icon class"></i>
                          </h1>
                      </div>
                    @endif
                  @endforeach
                </tbody>

            <tfoot class="full-width">
                <tr>
                    <th></th>
                    <th colspan="4">
                      <button class="ui right floated small teal labeled icon button">
                        <i class="checkmark icon"></i> Submit
                      </button>
                    </th>
                </tr>
            </tfoot>
          </form>
            </table>
        {{-- @else
            <div class="ui segment return_table">
                <h3 class="ui header centered horizontal divider">
                    The Book is in the Shelf!
                </h3>
                <h1 class="ui header center aligned">
                    <i class="leanpub icon class"></i>
                </h1>
            </div>
        @endif --}}

    </div>

    <div class="ui pub_year column segment">
        @if (!$book->users[0]->pivot->edition)
            <form class="ui form" method="POST" action="{{ route('book-update-store')}}">

                {{ csrf_field() }}

                <div class="field">

                    <label>Published Year</label>

                    <div class="ui calendar" id="year">

                        <div class="ui input left icon">

                            <i class="calendar icon"></i>

                            <input type="text" name="pub_year" placeholder="Date">

                        </div>

                    </div>

                </div>

                <div class="field">

                    <label>Edition</label>

                    <input type="text" name="edition" placeholder="Ex: 3rd">

                </div>

                <input type="hidden" name="book_id" value="{{ $book->id }}">

                <button class="ui teal submit button right floated small labeled icon" type="submit">
                    <i class="checkmark icon"></i>Submit
                </button>
            </form>

        @else
            <table class="ui celled definition table pub_table">
                <tbody>
                    <tr>
                        <td>Published Year</td>
                        <td>{{ $book->users[0]->pivot->pub_year }}</td>
                    </tr>
                    <tr>
                        <td>Edition</td>
                        <td>{{ $book->users[0]->pivot->edition }}</td>
                    </tr>
                </tbody>
            </table>
        @endif





    </div>
</div>

<div class="ui grid container">

    <h4 class="ui header centered horizontal divider">
            <i class="newspaper icon"></i>
            History
    </h4>

    <table class="ui celled padded table center aligned">
      <thead>
        <tr>
        <th>Borrower Name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Lend Date</th>
        <th>Orginal Return Date</th>
        <th>View Details</th>
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
          <td class="view_book">
              <a href="{{ route('borrower-show', ['borrower' => $borrower->id])}}">
                  <i class="external icon"></i>
              </a>
          </td>
        </tr>
        @endforeach
        {{-- {{ $book->links() }} --}}
      </tbody>
    </table>

</div>
@endsection
