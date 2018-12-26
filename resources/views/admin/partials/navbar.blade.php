<ul class="navbar-nav mr-auto">
    <li class="nav-item"><a href="/" class="nav-link">首页</a></li>
    @auth
        <li class="nav-item{{ Request::is('admin/post*') ? ' active' : '' }}">
            <a href="/admin/post" class="nav-link">文章</a>
        </li>
        <li class="nav-item{{ Request::is('admin/tag*') ? ' active' : '' }}">
            <a href="/admin/tag" class="nav-link">标签</a>
        </li>
        <li class="nav-item{{ Request::is('admin/upload*') ? ' active' : '' }}">
            <a href="/admin/upload" class="nav-link">上传</a>
        </li>
    @endauth
</ul>

<ul class="navbar-nav ml-auto">
    @guest
        <li class="nav-item"><a href="/login" class="nav-link">登陆</a></li>
    @else
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
                <span class="caret"></span>
            </a>
            <div class="dropdown-menu" role="menu">
                <a href="/logout" class="dropdown-item">退出</a>
            </div>
        </li>
    @endguest
</ul>
