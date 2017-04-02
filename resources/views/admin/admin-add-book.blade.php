@extends('admin.dashboard')

@section('admin_content')
<div class="ui grid container">
    <div class="eight wide centered column">
        <h1 class="ui header centered horizontal divider">Add Book</h1>
        <div class="ui form">
            <div class="field">
                <label>Title</label>
                <input type="text" name="first-name" placeholder="First Name">
            </div>

            <div class="field">
                <label>Author</label>
                <input type="text" name="first-name" placeholder="First Name">
            </div>

            <div class="field">
                <label>Category</label>
                <div class="ui selection dropdown">
                    <input type="hidden" name="gender">
                    <i class="dropdown icon"></i>
                    <div class="default text">Gender</div>
                    <div class="menu">
                        <div class="item" data-value="1">Male</div>
                        <div class="item" data-value="0">Female</div>
                    </div>
                </div>
            </div>

            <div class="field">
                <label>Language</label>
                <div class="ui selection dropdown">
                    <input type="hidden" name="gender">
                    <i class="dropdown icon"></i>
                    <div class="default text">Gender</div>
                    <div class="menu">
                        <div class="item" data-value="1">Male</div>
                        <div class="item" data-value="0">Female</div>
                    </div>
                </div>
            </div>

            <div class="field">
                <label>Published Year</label>
                <div class="ui calendar" id="year">
                    <div class="ui input left icon">
                        <i class="calendar icon"></i>
                        <input type="text" placeholder="Date">
                    </div>
                </div>
            </div>

            <div class="field">
                <label>Purchase Date</label>
                <div class="ui calendar date">
                    <div class="ui input left icon">
                        <i class="calendar icon"></i>
                        <input type="text" placeholder="Date">
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
                        <input type="file" id="file" style="display:none">
                    </div>
                </div>
                <div class="field">
                    <div class="ui massive star rating" data-rating="1" data-max-rating="5"></div>
                </div>

            </div>

             <div class="ui teal submit button">Submit</div>
        </div>
    </div>
</div>
@endsection
