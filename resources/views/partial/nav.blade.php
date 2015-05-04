<nav class="navbar navbar-default">
    <div class="container-fluid container">
        <div class="navbar-header">
            <button type="button"
                    class="navbar-toggle collapsed"
                    data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {!! link_to('/', 'Learning Laravel', ['class'=>'navbar-brand']) !!}
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>{!! link_to_route('articles.index', 'Articles') !!}</li>
                <li>{!!link_to_route('articles.show', "Latest Article: $latest->title", ['article'=> $latest])!!}</li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li>{!! link_to_action('Auth\AuthController@getLogin', 'Login') !!}</li>
                    <li>{!! link_to_action('Auth\AuthController@getRegister', 'Register') !!}</li>

                @else
                    <li class="dropdown">
                        <a href="#"
                           class="dropdown-toggle"
                           data-toggle="dropdown"
                           role="button"
                           aria-expanded="false">{{ Auth::user()->username }}
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                {!! link_to_action('Auth\AuthController@getLogout', 'Logout') !!}
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>