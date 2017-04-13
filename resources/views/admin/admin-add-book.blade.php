@extends('admin.layouts.dashboard')

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
                <input type="text" name="cat_name" placeholder="Ex: Art">
            </div>

            <div class="field">

                <label>Language</label>
                <input type="text" name="lang_name" placeholder="Ex: Bangla">

            </div>

            <button class="ui teal submit button" type="submit">Submit</button>

        </form>

    </div>

</div>
@endsection
