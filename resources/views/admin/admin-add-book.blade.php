@extends('admin.dashboard')

@section('admin_content')

<div class="ui grid container">
    <div class="eight wide centered column">

        <h1 class="ui header centered horizontal divider">
            Add Book
        </h1>

        <form class="ui form" method="post" action="{{ route('store-book') }}">

            {{ csrf_field() }}

            <div class="field">

                <label>Title</label>

                <input type="text" name="title" placeholder="Ex: The Godfather">

            </div>

            <div class="field">

                <label>Author</label>

                <input type="text" name="name" placeholder="Ex: Mario Puzo">

            </div>

            <div class="field">

                <label>Category</label>

                <div class="ui selection dropdown">

                    <input type="hidden" name="category_id">

                    <i class="dropdown icon"></i>

                    <div class="default text">Select A Category</div>

                    <div class="menu">

                        @foreach ($categories as $category)
                            <div class="item" data-value={{ $category->id }}>{{ $category->name }}</div>
                        @endforeach

                    </div>

                </div>

            </div>

            <div class="field">

                <label>Language</label>

                <div class="ui selection dropdown">

                    <input type="hidden" name="language_id">

                    <i class="dropdown icon"></i>

                    <div class="default text">Select A Language</div>

                    <div class="menu">

                        @foreach ($languages as $language)
                            <div class="item" data-value={{ $language->id }}>{{ $language->name }}</div>
                        @endforeach

                    </div>

                </div>

            </div>

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

                <input type="text" name="edition" placeholder="Ex: 3rd ">

            </div>

            <div class="field">

                <label>Purchase Date</label>

                <div class="ui calendar date">

                    <div class="ui input left icon">

                        <i class="calendar icon"></i>

                        <input type="text" name="purchase_date" placeholder="Date">

                    </div>

                </div>

            </div>

            <div class="two fields">

                <div class="field">

                    <div>
                        <label for="file" class="ui icon button">

                            <i class="image icon"></i>

                            Upload Image

                        </label>

                        <input type="file" id="file" name="image" style="display:none">

                    </div>

                </div>

                <div class="field">

                    <label>Rating</label>

                    <div class="ui selection dropdown">

                        <input type="hidden" name="value">

                        <i class="dropdown icon"></i>

                        <div class="default text">1</div>

                        <div class="menu">

                            <div class="item" data-value="1">1</div>

                            <div class="item" data-value="2">2</div>

                            <div class="item" data-value="3">3</div>

                            <div class="item" data-value="4">4</div>

                            <div class="item" data-value="5">5</div>

                        </div>

                    </div>

                </div>

            </div>

             <button class="ui teal submit button" type="submit">Submit</button>

        </form>

    </div>

</div>
@endsection
