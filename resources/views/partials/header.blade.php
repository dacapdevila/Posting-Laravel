<header>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home">Posting</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> <!-- /.navbar-collapse -->
    @guest
      <ul class="nav nav-pills pull-right">
        <li role="presentation"> <a class="nav" href="{{ route('login') }}">{{ __('Login') }}</a> </li>
        <li role="presentation"> <a class="nav" href="{{ route('register') }}">{{ __('Register') }}</a> </li>
      </ul>
    @else
        <li class="nav nav-pills pull-right">
            <a class="nav-link" href="#" role="button">
                {{ Auth::user()->name }} <span class=""></span>
            </a>

            <div class="dropdown-menu-left" >
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
    </div>
  </div><!-- /.container-fluid -->
</nav>
</header>
