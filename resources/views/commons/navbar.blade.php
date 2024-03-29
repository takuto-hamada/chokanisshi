<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        
        <a class="navbar-brand" href="/">釣果日誌</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    <li class="nav-item">{!! link_to_route('search', '投稿検索',[], ['class' => 'nav-link']) !!}</li>
                    <li class="nav-item">{!! link_to_route('posts.create', '新規投稿',[], ['class' => 'nav-link']) !!}</li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">メニュー</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-item">{!! link_to_route('users.show', '投稿一覧', ['user' => Auth::id()]) !!}</li>
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-item">{!! link_to_route('logout.get', 'ログアウト') !!}</li>
                            </ul>
                    </li>
                @else
                    
                    <li class="nav-item">{!! link_to_route('signup.get', '新規会員登録', [], ['class' => 'nav-link']) !!}</li>
                    
                    <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>

