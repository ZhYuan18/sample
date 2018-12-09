<header class="">
    <div class="container">
        <div class="row">
            <div class="navbar col-sm-9">
                <a class="navbar-brand" href="{{ url('/') }}" id="logo">Sample App</a>
            </div>
            <div class="col-sm-3">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav pull-right" id="dropmenu">
                        @if(Auth::check())
                            <li class="nav-item nav-link"><a href="#">用户列表</a></li>
                            <li class="nav-item nav-link dropdown">
                                <a href="#" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                                    {{ Auth::user()->name }} <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li class="nav-item nav-link"><a href="{{ route('users.show', Auth::user()->id) }}">个人中心</a></li>
                                    <li class="nav-item nav-link"><a href="#">编辑资料</a></li>
                                    <li class="divider"></li>
                                    <li>
                                        <a id="logout" href="#">
                                            <form action="{{ route('logout') }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item nav-link"><a href="{{ route('login') }}">登录</a></li>
                            <li class="nav-item nav-link"><a href="{{ route('help') }}">帮助</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>