<div class="ui grid logan-header">
    <div class="row">
        <div class="five wide column dashboard_title">
            <a class="item"><i id="toggle" class="sidebar icon"></i></a>

                <a href="/dashboard">
                    <img class="ui avatar image" src="/images/avatar.png">
                    <span>{{ Auth::user()->name }}</span>
                </a>

        </div>

        {{-- <div class="seven wide column centered">
            <div class="ui form">
                <div class="field">
                    <div class="ui search book-search">
                      <div class="ui icon input">
                        <input class="prompt" type="text" placeholder="Book or Borrower Name...">
                        <i class="search icon book-search-icon"></i>
                      </div>
                      <div class="results"></div>
                    </div>
                </div>
            </div>

        </div> --}}

        <div class="three wide column right floated left aligned">
            <div class="ui secondary  menu">
              <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"
              class="item signout">Sign Out &nbsp<i class="sign out icon"></i>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </div>
        </div>

    </div>
</div>
